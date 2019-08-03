<?php

namespace App\Shop\Entity;
use Illuminate\Database\Eloquent\Model;

class user extends Model{
    protected $table = 'merchandise';
    protected $primaryKey = 'id';

    protected $fillable=[
        'id',
        'status',
        'name',
        'name_en',
        'introduction',
        'introduction_en',
        'photo',
        'price',
        'remain_count',
    ];
}

?>