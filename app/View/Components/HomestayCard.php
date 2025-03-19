<?php
namespace App\View\Components;

use App\Models\Homestay;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HomestayCard extends Component
{
    public $homestay;

    /**
     * Create a new component instance.
     */
    public function __construct(Homestay $homestay)
    {
        // Store the homestay data passed to the component
        $this->homestay = $homestay;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.homestay-card');
    }
}

