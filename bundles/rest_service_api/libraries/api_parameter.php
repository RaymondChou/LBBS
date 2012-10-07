<?php
/**
 * Author: RaymondChou
 * Date: 12-10-6
 * File: api_parameter.php
 * Email: zhouyt.kai7@gmail.com
 */
class Api_parameter{

    public function check($rules = array())
    {
        $request = \Laravel\Input::all();
        $validation = Validator::make($request, $rules);
        if($validation->fails())
        {
            $error = $validation->errors->first();
            return Api::response(array('status' => FALSE,'error'=>'parameters lose: '.$error), 400);
        }
        else
        {
            return true;
        }
    }
}