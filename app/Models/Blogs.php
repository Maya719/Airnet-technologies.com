<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = "blogs";

    protected $fillable = ['id', 'title', 'description', 'image'];

    public $timestamps = true;
}
