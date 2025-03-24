<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model


{   

    public function getRouteKeyName()
{
    return 'activity_id';
}

    use HasFactory;

    protected $primaryKey = 'activity_id'; 

    protected $fillable = [
        'activity_name',
        'activity_location',
        'activity_desc',
        'activity_rules',
        'activity_price',
        'activity_images',

    ]; 
        /**
     * Get the reviews for the homestay.
     */
    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

}

