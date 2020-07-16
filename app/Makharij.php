<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Makharij extends Model
{
    protected $table = 'makharijs';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';


    protected $fillable = ['slug','name','details'];

}
