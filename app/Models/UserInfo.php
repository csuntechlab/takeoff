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
        'major',
        'units',
        'grad_date',
        'college',
        'bio',
        'research',
        'fun_facts',
        'academic_interest'
    ];

    public function users(){
        return $this->belongsTo('App\User', 'id', 'user_id');
    }
}
