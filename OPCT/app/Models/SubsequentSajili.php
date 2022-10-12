<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubsequentSajili extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'sajili',
        'confirm_subsequent_sajili',
        'status',
    ];
    
    public function sajilis()
    {
        return $this->hasMany('App\Models\Sajili');
    }
}
