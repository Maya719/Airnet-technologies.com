<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefundPolicy extends Model
{
    use HasFactory;

    protected $table ='refund_policies';
    protected $fillable = ['language', 'refund_policy'];

    public $timestamps = true;
}
