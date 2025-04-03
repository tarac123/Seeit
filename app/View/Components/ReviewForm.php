<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Homestay;
use App\Models\Activity;

class ReviewForm extends Component
{
    public $action;
    public $method;
    public $homestay;
    public $activity;
    public $review;

    /**
     * Create a new component instance.
     *
     * @param  string  $action
     * @param  string  $method
     * @param  \App\Models\Homestay|null  $homestay
     * @param  \App\Models\Activity|null  $activity
     * @param  \App\Models\Review|null  $review
     * @return void
     */
    public function __construct($action, $method, $homestay = null, $activity = null, $review = null)
    {
        $this->action = $action;
        $this->method = $method;
        $this->homestay = $homestay;
        $this->activity = $activity;
        $this->review = $review;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render(): View|Closure|string
    {
        return view('components.review-form');
    }
}
