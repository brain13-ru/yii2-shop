<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены, что хотите удалить эту статью?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
	
	<?php $img = $model->getImage();?>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            //'content:ntext',
			[
				'attribute' =>'content',
				'value' => $model->content,
				'format' => 'html',
			],
			[
				'attribute' =>'image',
				'value' => "<img src='{$img->getUrl()}' width='400'>",
				'format' => 'html',
			],
            'date',
            'keywords',
            'description',
			[
				'attribute'=>'published',
				'value'=> function($data){
					return !$data->published?"<span class='text-danger'>Не опубликована</span>":"<span class='text-success'>Опубликована</span>";
				},
				'format'=>'html'
			],
        ],
    ]) ?>

</div>
