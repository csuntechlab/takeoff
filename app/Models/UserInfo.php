<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table = 'user_info';

    public $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'title',
        'major',
        'grad_date',
        'college',
        'bio',
        'research',
        'fun_facts',
        'academic_interest',
        'archive'
    ];

    public function users()
    {
        return $this->belongsTo('App\Models\User', 'id', 'user_id');
    }

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }
}
