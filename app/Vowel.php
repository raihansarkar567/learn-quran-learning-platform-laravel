<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vowel extends Model
{
    protected $table = 'vowels';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $guarded=['old_image','old_sound'];
}
