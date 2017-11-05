<?php namespace ABS\Classes;

class HeaderViewClass
{
	private $model;

	public function __construct(ModelClass $model)
	{
		$this->model= $model;
	}

	public function output()
	{
		return '<header>
		<h1>Anthony Barretti</h1>
		<h2>Data Science - Business Intelligence - Software Engineering</h2>
		<nav>
			<div><a href="index.php?action=home" '.($this->model->page=="home"? 'class="active"':'').'>Home</a></div>
			<div><a href="index.php?action=about" '.($this->model->page=="about"? 'class="active"':'').'>About</a></div>'.($this->model->page=="cv"? '<div class="dropdown">
					<a href="index.php?action=cv" class="active">CV</a> 
					<div class="dropdown-content">
					<a href="#education">Education</a>
					<a href="#skills">Skills</a>
					<a href="#experience">Experience</a>
					<a href="#leadership">Leadership</a>
					<a href="#coursework">Coursework</a>
					</div></div>':'<div><a href="index.php?action=cv">CV</a></div>').
			'<div><a href="index.php?action=contact" '.($this->model->page=="contact"? 'class="active"':'').'>Contact</a></div>
			<div><a href="https://www.linkedin.com/in/anthony-barretti-95a57687/" class="image" target="_blank"><img src="imgs/linkedIn.png"
			width="75px"
			alt= "LinkedIn Logo"/></a></div>
			<div><a href="https://github.com/abarretti/" class="image" target="_blank"><img src="imgs/github.png"
			width= "75px"
			alt= "Github Logo"/></a></div>
		</nav>
		</header>';
	}

}//class end

?>