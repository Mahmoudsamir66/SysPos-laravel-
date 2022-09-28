<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buyer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'store_id', 'kind_id', 'product_id','money','count','user_id'
    ];

    public function stores()
    {


        return $this->belongsto(Store::class, 'store_id', 'id');
    }

    public function kinds()
    {


        return $this->belongsto(Kind::class, 'kind_id', 'id');
    }
    public function products()
    {


        return $this->belongsto(Product::class, 'product_id', 'id');
    }public function users()
{


    return $this->belongsto(User::class, 'user_id', 'id');
}
}
