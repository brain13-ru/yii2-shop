<?php
	use yii\helpers\Html;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
?>
<div class="page-section section mt-80 mt-lg-60 mt-md-60 mt-sm-60 mt-xs-40 mb-80 mb-lg-60 mb-md-60 mb-sm-60 mb-xs-40">
    <div class="container">
        <h3>Корзина</h3>

		<?php if( Yii::$app->session->hasFlash('success') ): ?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?php echo Yii::$app->session->getFlash('success'); ?>
			</div>
		<?php endif;?>
		
		<?php if( Yii::$app->session->hasFlash('error') ): ?>
			<div class="alert alert-success alert-dismissible" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<?php echo Yii::$app->session->getFlash('error'); ?>
			</div>
		<?php endif;?>
		
        <?php if (!empty($session['cart'])): ?>
            <div class="table-responsive">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Фото</th>
                        <th>Наименование</th>
                        <th>Количество</th>
                        <th>Цена</th>
						<th>Сумма</th>
                        <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($session['cart'] as $id=>$item): ?>
                        <tr>
                            <td><img src="<?php echo $item['img']; ?>" height="100"></td>
                            <td><a href="/catalog/product/<?php echo $id;?>"><?php echo $item['name']; ?></a></td>
                            <td><?php echo $item['qty']; ?></td>
                            <td><?php echo $item['price']; ?></td>
                            
							<td><?php echo $item['qty']*$item['price']; ?></td>	
							<td><span class="glyphicon glyphicon-remove text-danger del-item" data-id =
                                "<?php echo $id; ?>" style="cursor: pointer;" aria-hidden="true"></span></td>
                        </tr>
                    <?php endforeach; ?>
                    <tr>
                        <td colspan="5">Итого количество:</td>
                        <td><?php echo $session['cart.qty']; ?></td>
                    </tr>
                    <tr>
                        <td colspan="5">На сумму:</td>
                        <td><?php echo $session['cart.sum']; ?></td>
                    </tr>
                    </tbody>
                </table>
            </div>
			<?php $form=ActiveForm::begin(); ?>
				<?php echo $form->field($order,'name'); ?>
				<?php echo $form->field($order,'email'); ?>
				<?php echo $form->field($order,'phone'); ?>
				<?php echo $form->field($order,'address'); ?>
				<?php echo Html::submitButton('Заказать', ['class'=>'btn btn-success']); ?>
			<?php ActiveForm::end(); ?>
        <?php else: ?>
            <h3>Корзина пуста</h3>
        <?php endif; ?>
    </div>
</div>
