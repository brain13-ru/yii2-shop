<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>

<!-- Page Banner Section Start -->
 <?php use app\components\MenuWidget; ?>
<div class="page-banner-section section" style="background-image: url(/images/hero/hero-1.jpg)">
	<div class="container">
		<div class="row">
			<div class="page-banner-content col">

				<h1>Контакты</h1>
				<ul class="page-breadcrumb">
					<li><a href="/">Главная</a></li>
					<li><a href="/site/contact">Контакты</a></li>
				</ul>

			</div>
		</div>
	</div>
</div><!-- Page Banner Section End -->

<div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-40 mb-lg-20 mb-md-20 mb-sm-20 mb-xs-0">
	<div class="site-contact container">

		<h1><?= Html::encode($this->title) ?></h1>

		<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

			<div class="alert alert-success">
		
				Спасибо, что связались с нами. Мы ответим вам так скоро, как это юудет возможно.
			</div>

			<p>
				Note that if you turn on the Yii debugger, you should be able
				to view the mail message on the mail panel of the debugger.
				<?php if (Yii::$app->mailer->useFileTransport): ?>
					Because the application is in development mode, the email is not sent but saved as
					a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
					Please configure the <code>useFileTransport</code> property of the <code>mail</code>
					application component to be false to enable email sending.
				<?php endif; ?>
			</p>

		<?php else: ?>

			<p>
			 
				Если у вас есть какие-либо вопросы и пожелания, пожалуйста, заполните нижеследующую форму, чтобы связаться с нами. Спасибо.
			</p>

			<div class="row">
				<div class="col-lg-5">

					<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

						<?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

						<?= $form->field($model, 'email') ?>

						<?= $form->field($model, 'subject') ?>

						<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

						<?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
							'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
						]) ?>

						<div class="form-group">
							<?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
						</div>

					<?php ActiveForm::end(); ?>

				</div>
			</div>

		<?php endif; ?>
	</div>
</div>
