<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disbursement extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'ssajili',
        'status',
    ];
    
    public function ssajili()
    {
        return $this->belongsTo('App\Models\SubsequentSajili');
    }
}
