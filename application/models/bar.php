<?php

class Bar extends Eloquent {

    public static $timestamps = true;

	public function categories()
	{
		return $this->belongs_to('Category','category_id');
	}
}
