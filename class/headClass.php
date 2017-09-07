<?php
class HeadView
{
	private $model;
	
	public function __construct(Model $model)
	{
		$this->model= $model;
	}

	public function output()
	{
		return '<head>
				<meta charset="UTF-8">
				<title>Anthony Barretti - '.$this->model->page.'</title>
				<link rel="icon" type="image/png" href="imgs/sphereBlue.png">
				<link rel="stylesheet" href="css/stylesheet.css">
				</head>
				<body>';
	}
}



?>