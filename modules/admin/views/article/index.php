<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости и статьи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="article-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать статью', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            //'content:ntext',
            'date',
            //'keywords',
            //'description',
            //'published',
			[
				'attribute'=>'published',
				'value'=>function($data){
					return !$data->published?"<span class='text-danger'>Не опубликована</span>":"<span class='text-success'>Опубликована</span>";
				},
				'format'=>'html'
			],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
