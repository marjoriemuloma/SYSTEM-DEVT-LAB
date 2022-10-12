<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Sajili extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'constituency',
        'address',
        'next_of_kin',
        'created_at',
        'updated_at',
        'user_id'
    ];
    
    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }

}
