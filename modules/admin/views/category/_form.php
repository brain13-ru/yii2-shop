<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>
	
	<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

	<? //=$form->field($model, 'parent_id')->dropDownList(ArrayHelper::map(\app\models\Category::find()->all(),'id','name'))  ?>

    <div class="form-group field-category-parent_id">
	<label class="control-label" for="category-parent_id">Родительская категория</label>
	<select id="category-parent_id" class="form-control" name="Category[parent_id]">
		<?= \app\components\MenuWidget::widget(['tpl'=>'select','model' =>$model]); ?>
	</select>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
