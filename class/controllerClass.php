<?php

class Controller 
{
	private $model;

	public function __construct(Model $model)
	{
		$this->model= $model;
	}

	public function home()
	{
		$this->model->page = "home";
	}

	public function about()
	{
		$this->model->page = "about";
	}

	public function cv()
	{
		$this->model->page = "cv";
	}

	public function contact()
	{
		$this->model->page = "contact";
	}
}

?>