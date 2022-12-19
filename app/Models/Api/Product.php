<?php

namespace App\Models\Api;

class Product extends \App\Models\Product
{
    protected $fillable = ['title', 'description', 'price', 'image', 'published', 'image_mime', 'image_size', 'created_by', 'updated_by'];
    
    public function getRouteKeyName()
    {
        return 'id';
    }
}