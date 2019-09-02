<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = "Просмотр заказа № ".$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'created_at',
            'updated_at',
            'qty',
            'sum',
            //'status',
			[
				'attribute'=>'status',
				'value'=>function($data){
					return (!$data->status)?"<span class='text-danger'>Не обработан</span>":"<span class='text-success'>Обработан</span>";
				},
				'format'=>'html'
			],
            'name',
            'email:email',
            'phone',
            'address',
        ],
    ]) ?>
	<?php $items=$model->orderItems; ?>
	<h2>Состав заказа:</h2>	
	<div class="table-responsive">
		<table class="table table-hover table-striped">
			<thead>
			<tr>
				
				<th>Наименование</th>
				<th>Количество</th>
				<th>Цена</th>
				<th>Сумма</th>
				
			</tr>
			</thead>
			<tbody>
			<?php foreach($items as $item): ?>
				<tr>
				
					<td><a href="/catalog/product/<?php echo $item['product_id']; ?>" target="_blank"><?php echo $item['name']; ?></a></td>
					<td><?php echo $item['qty_item']; ?></td>
					<td><?php echo $item['price']; ?></td>
					
					<td><?php echo $item['sum_item']; ?></td>	
					
				</tr>
			<?php endforeach; ?>
			
			</tbody>
		</table>
	</div>
</div>
