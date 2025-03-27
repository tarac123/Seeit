<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $primaryKey = 'reservation_id';

    protected $fillable = [
        'reservable_type',
        'reservable_id',
        'user_id',
        'check_in_date',
        'check_out_date',
        'guests',
        'full_name',
        'email',
        'phone',
        'total_price',
        'status'
    ];

    // Polymorphic relationship
    public function reservable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}