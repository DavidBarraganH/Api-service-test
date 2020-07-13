<?php

namespace App\Models;

use Illuminate\Database\Eloquent;

/**
 * @Class User
 *
 * @author Hair David Barragan Barragan <hdavidbarragan@gmail.com>
 * @package App\Models
 *
 * @property string $name
 */

class Menu extends \Illuminate\Database\Eloquent\Model
{

    /**
     * The database table used by the model
     *
     * @var string
     */
    protected  $table = "menus";

    /**
     * The primary key of tha table
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

}
