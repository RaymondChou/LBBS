<?php
/**
 * Author: zhouyt
 * Date: 12-10-4
 * Time: 下午2:06
 * zhouyt.kai7@gmail.com
 */
class User_Home_Controller extends Base_Controller{
    public $restful = true;

    public function get_index()
    {
        return 'hello';
    }

    public function get_register()
    {
        return 'register';
    }
}