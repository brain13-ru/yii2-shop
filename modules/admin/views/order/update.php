<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = "Редактирование заказа № ".$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="order-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

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
