<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register(): void
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(route('dashboard', absolute: false));
    }


    public static function UserDataProvider(): array
    {
        $users = [];

        for ($i = 0; $i <= 1000; $i++) {
            $users[] = [
                'Test User' . $i,
                'test' . $i . '@example.com',
                'password',
                $i % 2 === 0 ? '' : ''
            ];
        }
        return $users;
    }

}