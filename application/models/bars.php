<?php

class Bars extends Eloquent {

    public static $timestamps = true;

	public function topics()
	{
		return $this->has_many('Topic');
	}

}
