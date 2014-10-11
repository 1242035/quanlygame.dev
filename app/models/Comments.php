<?php
/**
 * Created by PhpStorm.
 * User: honganh
 * Date: 11/10/2014
 * Time: 23:34
 */

class Comments extends Illuminate\Database\Eloquent{
    public function News()
    {
        $this->hasOne('News');
    }
    public function User()
    {
        $this->hasOne('User');
    }
    public function Comments()
    {
        $this->hasOne('Comments');
    }

} 