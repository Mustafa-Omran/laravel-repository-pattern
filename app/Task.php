<?php

/**
 * @author Mustafa Omran <promustafaomran@hotmail.com>
 * 
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model {

    /**
     *
     * @var array  
     */
    protected $fillable = ['title'];

}
