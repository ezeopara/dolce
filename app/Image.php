<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable = ['filename','mime','original_filename'];
    
    /*
     * one to many relationship
     */
    public function register(){
        return $this->belongsTo('App\Register');
    }
}
