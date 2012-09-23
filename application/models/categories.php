<?php

class Categories extends Eloquent {

    public static $timestamps = true;

	public function bars()
	{
		return $this->has_many('Bar');
	}

}
