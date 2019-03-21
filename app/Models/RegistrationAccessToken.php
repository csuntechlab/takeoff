<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistrationAccessToken extends Model
{
    protected $table = 'registration_access_token';
    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'access_code',
    ];

}
