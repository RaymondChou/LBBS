<?php
/**
 * Author: RaymondChou
 * Date: 12-10-6
 * File: user.php
 * Email: zhouyt.kai7@gmail.com
 */
class Api_User_Controller extends Api_Controller{

    public function get_test()
    {
        $rules = array(
            'username'              => 'required|max:16|unique:users',
            'password'              => 'required|between:6,16|alpha_dash',
        );
        $par = Api::parameters_check($rules);
        if(is_string($par))
        {
            //here can make some logs
            return Api::parameters_error($par);
        }
        else
        {
            print_r($par);
            //here is your code
        }
    }

    public function get_test2()
    {
        $par = Api::parameters_check();

        print_r($par);
        //here is your code
    }
}