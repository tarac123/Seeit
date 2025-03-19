<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homestay extends Model


{   

    public function getRouteKeyName()
{
    return 'homestay_id';
}

    use HasFactory;

    protected $primaryKey = 'homestay_id'; 

    protected $fillable = [
        'homestay_name',
        'homestay_location',
        'homestay_desc',
        'homestay_rules',
        'homestay_price',
        'homestay_images',

    ]; 
        /**
     * Get the reviews for the homestay.
     */
    public function reviews()
    {
        return $this->hasMany(Review::class, 'homestay_id', 'homestay_id');
    }

}

