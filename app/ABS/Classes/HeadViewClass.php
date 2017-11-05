<?php namespace ABS\Classes;

class HeadViewClass
{
	private $model;
	
	public function __construct(ModelClass $model)
	{
		$this->model= $model;
	}

	public function output()
	{
		return '<head>
				<meta charset="UTF-8">
				<title>Anthony Barretti - '.($this->model->page=="cv"? 'CV':ucwords($this->model->page)).'</title>
				<link rel="icon" type="image/png" href="imgs/sphereBlue.png">
				<link rel="stylesheet" href="css/stylesheet.css">
				</head>
				<body>';
	}
}



?>