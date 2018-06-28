<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class loginModel extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';
    protected $keyType = 'varchar';
    protected $fillable = [
        'username', 'password',
    ];


    public $incrementing = false;
    protected $hidden = [
        'password', 'remember_token',
    ];
}
