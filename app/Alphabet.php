<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alphabet extends Model
{
    protected $table = 'alphabets';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $guarded=['old_image','old_sound'];

    public function getMakharij(){
        return $this->belongsTo('App\Makharij','makharij_id');
    }
}
