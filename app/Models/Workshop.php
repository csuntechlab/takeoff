<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $table = 'workshops';

    public $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'instructor',
        'about_instructor',
        'assignment_info',
        'workshop_name',
        'workshop_description',
        'date',
    ];

    public function badges()
    {
        return $this->belongsToMany('App\Models\Badge');
    }
}
