<?php
namespace App;
use \Illuminate\Database\Eloquent\Model as Illuminate;
/**
 * Created by PhpStorm.
 * User: andreazo
 * Date: 01/09/17
 * Time: 22:11
 */
class Users extends Illuminate{
    protected $table = "Users";
    /*Set the conection*/
    protected $connection = "db2";

}