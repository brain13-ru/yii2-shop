<?php
/**
 * Created by PhpStorm.
 * User: Игорь
 * Date: 17.07.2019
 * Time: 15:33
 */

namespace app\controllers;

use app\models\Product;
use app\models\Cart;
use app\models\Order;
use app\models\OrderItems;
use Yii;



class CartController extends AppController
{
    public function actionAdd(){
        $id=Yii::$app->request->get('id');
        $qty=(int)Yii::$app->request->get('qty');
        $qty=(!$qty)?1:$qty;
        $product=Product::findOne($id);
        if(empty($product)) return false;
        $session=Yii::$app->session;
        $session->open();
        $cart=new Cart();
        $cart->addToCart($product,$qty);
        $this->layout=false;
        return $this->render('cart-modal',compact('session'));
    }

    public function actionClear(){
        $session=Yii::$app->session;
        $session->open();
        $session->remove('cart');
        $session->remove('cart.qty');
        $session->remove('cart.sum');
        $this->layout=false;
        return $this->render('cart-modal',compact('session'));


    }

    public function actionDelItem(){
        $id=Yii::$app->request->get('id');

        $session=Yii::$app->session;
        $session->open();
        $cart=new Cart();
        $cart->recalc($id);
        $this->layout=false;
        return $this->render('cart-modal',compact('session'));
    }

    public function actionShow(){

        $session=Yii::$app->session;
        $session->open();

        $this->layout=false;
        return $this->render('cart-modal',compact('session'));
    }
	
	protected function saveOrderItems($items,$order_id){
		foreach($items as $id=>$item){
			$order_item = new OrderItems();
			$order_item->order_id=$order_id;
			$order_item->product_id=$id;
			$order_item->name=$item['name'];
			$order_item->price=$item['price'];
			$order_item->qty_item=$item['qty'];
			$order_item->sum_item=$item['price']*$item['qty'];
			$order_item->save();
		}
	}

    public function actionView(){
        $session=Yii::$app->session;
        $session->open();
		$this->setMeta("Корзина");
		$order=new Order();
		if($order->load(Yii::$app->request->post())){
			$order->qty=$session['cart.qty'];
			$order->sum=$session['cart.sum'];
			if($order->save()){
				$this->saveOrderItems($session['cart'],$order['id']);
				Yii::$app->session->setFlash('success','Ваш заказ успешно отправлен! В ближайшее время менеджер обязательно свяжется с вами.');
				Yii::$app->mailer->compose('order',['session'=>$session])
								 ->setFrom(['brain13@list.ru'=>'Интернет-магазин детских игрушек'])
								 ->setTo($order->email)
								 ->setSubject('Заказ')
								 ->send();
				Yii::$app->mailer->compose('order',['session'=>$session])
								 ->setFrom(['brain13@list.ru'=>'Интернет-магазин детских игрушек'])
								 ->setTo(Yii::$app->params['adminEmail'])
								 ->setSubject('Заказ')
								 ->send();				 
				$session->remove('cart');
				$session->remove('cart.qty');
				$session->remove('cart.sum');
				return $this->refresh();
			}
			else{
				Yii::$app->session->setFlash('error','Введены неполные или некорректные данные. Заказ не удалось обработать.');
				return $this->refresh();
			}
			
		}
        return $this->render('view',compact('session','order'));
    }

}