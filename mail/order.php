<?php if (!empty($session['cart'])): ?>
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
                <?php foreach($session['cart'] as $id=>$item): ?>
                <tr>
                   
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['qty']; ?></td>
                    <td><?php echo $item['price']; ?></td>
					<td><?php echo $item['qty']*$item['price']; ?></td>
                   
                </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="3">Итого количество:</td>
                    <td><?php echo $session['cart.qty']; ?></td>
                </tr>
                <tr>
                    <td colspan="3">На сумму:</td>
                    <td><?php echo $session['cart.sum']; ?></td>
                </tr>
            </tbody>
        </table>
    </div>

<?php endif; ?>
