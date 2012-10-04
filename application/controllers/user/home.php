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
        return \Laravel\View::make('user.register');
    }

    public function post_register()
    {
        $input = \Laravel\Input::all();
        $rules = array(
            'username'    => 'required|max:16|unique:users',
            'password'    => 'required|alpha_dash|confirmed',
            'password_confirmation' => 'required|alpha_dash',
            'fullname'    => 'required|alpha_dash',
            'email'       => 'required|email',
        );
        $validation = Validator::make($input, $rules);
        if($validation->fails())
        {
            Messages::add('error',$validation->errors->all());
            return Redirect::to('register')->with_input();
        }
        else
        {
            return 'success';
        }
    }
}