<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    //
    private int $id;
    private int $category_id;
    private string $name;
    private string $brand;
    private string $image;
    private string $thumbnail;
    private string $price;
}
