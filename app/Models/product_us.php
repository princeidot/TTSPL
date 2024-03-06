<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_us extends Model
{
    public $table = 'product_us';
    public $fillable = ['name', 'email', 'mobileno', 'companyname', 'productname', 'demo_datasheet'];
}
