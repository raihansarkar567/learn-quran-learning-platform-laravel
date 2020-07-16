<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LetterFormation extends Model
{
    protected $table = 'letter_formations';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $guarded=['old_detached_image','old_initial_image','old_medial_image','old_final_image','old_sound'];
}
