<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
    <div class="container">
		<div class="site-error">

			<h1><?php 
				if($exception->statusCode==404) echo "Ошибка 404: страница не найдена" ;
				else echo Html::encode($this->title);
				?>
			</h1>
            <br/>
			<div class="alert alert-danger">
				<h3><?= nl2br(Html::encode($message)) ?></h3>
			</div>

		</div>
	</div>
</div>
