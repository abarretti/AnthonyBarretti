<?php

class HeaderView
{
	private $model;

	public function __construct(Model $model)
	{
		$this->model= $model;
	}

	public function output()
	{
		if ($this->model->page=="cv")
		{
			return '<header id="top">
			<h1>Anthony Barretti</h1>
			<h2>Data Science - Business Intelligence - Software Engineering</h2>
			<nav>
				<div><a href="index.php?action=home">Home</a></div>
				<div><a href="index.php?action=about">About</a></div>
				<div class="dropdown">
					<a href="index.php?action=cv" class="active">CV</a> 
					<div class="dropdown-content">
					<a href="#education">Education</a>
					<a href="#skills">Skills</a>
					<a href="#experience">Experience</a>
					<a href="#leadership">Leadership</a>
					<a href="#coursework">Coursework</a>
					</div>
				</div>
				<div><a href="index.php?action=contact">Contact</a></div>
				<div><a href="https://www.linkedin.com/in/anthony-barretti-95a57687/" class="image" target="_blank"><img src="imgs/linkedIn.png"
				width= "75px"
				alt= "LinkedIn Logo"/></a></div>
			</nav>
			</header>';
		}

		else
		{
		return '<header>
		<h1>Anthony Barretti</h1>
		<h2>Data Science - Business Intelligence - Software Engineering</h2>
		<nav>
			<div><a href="index.php?action=home" '.($this->model->page=="home"? 'class="active"':'').'>Home</a></div>
			<div><a href="index.php?action=about" '.($this->model->page=="about"? 'class="active"':'').'>About</a></div>
			<div><a href="index.php?action=cv" '.($this->model->page=="cv"? 'class="active"':'').'>CV</a></div>
			<div><a href="index.php?action=contact" '.($this->model->page=="contact"? 'class="active"':'').'>Contact</a></div>
			<div><a href="https://www.linkedin.com/in/anthony-barretti-95a57687/" class="image" target="_blank"><img src="imgs/linkedIn.png"
			width="75px"
			alt= "LinkedIn Logo"/></a></div>
		</nav>
		</header>';
		}
	}

}

?>