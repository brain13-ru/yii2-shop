<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Новый товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
			'name',
            //'category_id',
            [
				'attribute' => 'category_id',
				'value' => function($data){
					return $data->category['name']?$data->category['name']:"";
				}
			],
            //'content:ntext',
            'price',
            //'keywords',
            //'description',
            //'img',
            //'hit',
			[
				'attribute' => 'hit',
				'value' => function($data){
					return ($data->hit==1)?"Да":"Нет";
				}
			],
            //'new',
			[
				'attribute' => 'new',
				'value' => function($data){
					return ($data['new']==1)?"Да":"Нет";
				}
			],
            //'sail',
            [
				'attribute' => 'sail',
				'value' => function($data){
					return ($data->sail==1)?"Да":"Нет";
				}
			], 
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
