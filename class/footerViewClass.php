<?php

class footerView
{
	private $model;

	public function __construct(Model $model)
	{
		$this->model= $model;
	}

	public function output()
	{
		date_default_timezone_set("America/New_York");
		return '<footer>&copy; Anthony Barretti '.date("Y").'</footer></body>';
	}
}
?>