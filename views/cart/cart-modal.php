<?php if (!empty($session['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наименование</th>
                    <th>Количество</th>
                    <th>Цена</th>
                    <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($session['cart'] as $id=>$item): ?>
                <tr>
                    <td><img src="<?php echo $item['img']; ?>" height="50"></td>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['qty']; ?></td>
                    <td><?php echo $item['price']; ?></td>
                    <td><span class="glyphicon glyphicon-remove text-danger del-item" data-id =
                        "<?php echo $id; ?>" style="cursor: pointer;" aria-hidden="true"></span></td>
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4">Итого количество:</td>
                    <td><?php echo $session['cart.qty']; ?></td>
                </tr>
                <tr>
                    <td colspan="4">На сумму:</td>
                    <td><?php echo $session['cart.sum']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif; ?>
