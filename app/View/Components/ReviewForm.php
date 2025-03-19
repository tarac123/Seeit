<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ReviewForm extends Component
{
    public $action;
    public $method;
    public $homestay;
    public $review;

    /**
     * Create a new component instance.
     *
     * @param  string  $action
     * @param  string  $method
     * @param  \App\Models\Homestay  $homestay
     * @param  \App\Models\Review|null  $review
     * @return void
     */
    public function __construct($action, $method, $homestay, $review = null)
    {
        $this->action = $action;
        $this->method = $method;
        $this->hoemstay = $homestay;
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