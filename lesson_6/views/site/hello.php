<?php

/* @var $this yii\web\View */


use yii\helpers\Html;

$this->title = 'Hello page';
$this->params['breadcrumbs'][]= $this->title;
?>
<div class="site-hello">
	<h1><?php  Html::encode($this->title) ?></h1>
	
	<p>
	   Привет, это решение к 1 заданию по курсу Yii2.
	</p>
	
</div>