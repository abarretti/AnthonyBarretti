<!DOCTYPE html>
<html lang="en">
<?php

require 'class/modelClass.php';
require 'class/headClass.php';
require 'class/headerClass.php';
require 'class/mainClass.php';
require 'class/footerClass.php';
require 'class/controllerClass.php';

$model = new Model();
$headView = new HeadView($model);
$headerView = new HeaderView($model);
$mainView= new MainView($model);
$footerView = new FooterView($model);
$controller= new Controller($model);

if (isset($_GET['action']))
{
	$controller->{$_GET['action']}();
}

echo $headView->output();
echo $headerView->output();
echo $mainView->output($model->page);
echo $footerView->output();

?>
</html>

<!-- Desktop/PHP/AnthonyBarrettiSiteMVC/index.php -->