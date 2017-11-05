<?php namespace ABS\Classes;

class FooterViewClass
{
	private $model;

	public function __construct(ModelClass $model)
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