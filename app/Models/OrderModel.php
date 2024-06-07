<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderModel extends Model
{
    use HasFactory;
    protected $table ='order';
    protected $fillable = ['product_id', 'invoice_id','status', 'price','email','invoice_url','invoice_pdf'];
    public $timestamps = true;
}
