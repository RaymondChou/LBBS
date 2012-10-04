<?php
/**
 * Author: zhouyt
 * Date: 12-10-4
 * Time: 下午1:36
 * zhouyt.kai7@gmail.com
 */
class User extends Eloquent{

    public static $timestamps = true;

    public function posts()
    {
        return $this->has_many('Post');
    }

    public function set_password($password)
    {
        $this->set_attribute('password',\Laravel\Hash::make($password['fefe']));
    }
}