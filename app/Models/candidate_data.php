<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidate_data extends Model
{
    use HasFactory;
    protected $primaryKey   = 'id';
    protected $table = 'candidate_data';

    public $timestamps = true;
}
