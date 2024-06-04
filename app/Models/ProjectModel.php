<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
    use HasFactory;
    protected $table ='projects';
    protected $fillable = ['title', 'description', 'thumbnail','link','category','price'];
    
    public function update(array $attributes = [], array $options = [])
{
    return parent::update($attributes, $options);
}

}
