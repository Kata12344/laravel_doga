<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_type extends Model
{
    use HasFactory;
    protected $primaryKey='type_id';
    protected $fillable = [
        'name',
        'description',
        'cost',
    ];
}
