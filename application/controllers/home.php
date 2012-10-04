<?php

class Home_Controller extends Base_Controller {

    public $restful = true;

	public function action_index()
	{
		return View::make('home.index');
	}

    public function get_bar()
    {
        return print_r(Bar::find(1)->categories);
    }

}