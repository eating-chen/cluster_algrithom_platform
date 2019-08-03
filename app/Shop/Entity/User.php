<?php

namespace App\Shop\Entity;
use Illuminate\Database\Eloquent\Model;

class user extends Model{
    protected $table='users';
    protected $primaryKey = 'id';

    protected $fillable=[
        'email',
        'password',
        'type',
        'nickname',
    ];
}

?>