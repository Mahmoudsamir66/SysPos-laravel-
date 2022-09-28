<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'name', 'store_id', 'kind_id', 'code','photo',
        'storePlace', 'count', 'sellerPrice', 'purchasingPrice',
    ];

    public function stores(){

      return  $this->belongsTo(Store::class,'store_id','id');
    }

    public function kinds(){

        return  $this->belongsTo(Kind::class,'kind_id','id');
    }
}
