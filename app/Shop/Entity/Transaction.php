<?php

namespace App\Shop\Entity;
use Illuminate\Database\Eloquent\Model;

class user extends Model{
    protected $table = 'transaction';
    protected $primaryKey = 'id';

    protected $fillable=[
        'id',
        'user_id',
        'merchandise_id',
        'price',
        'buy_count',
        'total_price',
    ];
}

?>