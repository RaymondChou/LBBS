<?php

class Category extends Eloquent {

    public static $timestamps = true;

	public function bars()
	{
		return $this->has_many('Bar');
	}

    public function get_true_bars()
    {
        return true;
    }

}
