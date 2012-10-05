<?php
/**
 * Author: zhouyt
 * Date: 12-10-4
 * Time: 下午2:06
 * zhouyt.kai7@gmail.com
 */
class User_Home_Controller extends Base_Controller{
    public $restful = true;

    public function get_register()
    {
        return View::make('user.register',array('title' => '注册'));
    }

    public function post_register()
    {
        $this->before('csrf');
        $rules = array(
            'username'              => 'required|max:16|unique:users',
            'password'              => 'required|between:6,16|alpha_dash|confirmed',
            'password_confirmation' => 'required|between:6,16|alpha_dash',
            'fullname'              => 'required|between:2,16|alpha_dash',
            'email'                 => 'required|email',
        );
        $validation = Validator::make(\Laravel\Input::get(), $rules);
        if($validation->fails())
        {
            Messages::add('error',$validation->errors->all());
            return Redirect::to('register')->with_input();
        }
        else
        {
            Input::merge(array(
                'registration_ip' => \Laravel\Request::ip()
            ));
            $user = new User;
            $user->username = Input::get('username');
            $user->password = Input::get('password');
            $user->fullname = Input::get('fullname');
            $user->email = Input::get('email');
            $user->registration_ip = Input::get('registration_ip');
            $user->save();

            Messages::add('success','注册成功,请登陆');
            return Redirect::to('login')->with_input('only', array('username'));
        }
    }
}