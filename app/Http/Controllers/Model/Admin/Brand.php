<?php

namespace App\Http\Controllers\Model\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Brand extends Controller
{
    protected $fillable = [
            'brand_name', 'brand_logo'
        ];
}
