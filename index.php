<!DOCTYPE html>
<html lang="en">
<?php

use ABS\Classes\ModelClass as ModelClass;
use ABS\Classes\ControllerClass as ControllerClass;
use ABS\Classes\FooterViewClass as FooterViewClass;
use ABS\Classes\HeaderViewClass as HeaderViewClass;
use ABS\Classes\HeadViewClass as HeadViewClass;
use ABS\Classes\MainViewClass as MainViewClass;

require_once __DIR__.'/app/start.php';

$model = new ModelClass();
$headView = new HeadViewClass($model);
$headerView = new HeaderViewClass($model);
$mainView= new MainViewClass($model);
$footerView = new FooterViewClass($model);
$controller= new ControllerClass($model);

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

<!-- php Desktop/PHP/AnthonyBarrettiSiteSILEX/index.php -->