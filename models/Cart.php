<?php
/**
 * Created by PhpStorm.
 * User: Игорь
 * Date: 17.07.2019
 * Time: 15:35
 */

namespace app\models;
use yii\db\ActiveRecord;

class Cart extends ActiveRecord
{
    public function addToCart($product, $qty=1){
        if(isset($_SESSION['cart'][$product->id])){
            $_SESSION['cart'][$product->id]['qty']+=$qty;
        }
        else{
		    $mainImg=$product->getImage();
            $_SESSION['cart'][$product->id]['qty']=$qty;
            $_SESSION['cart'][$product->id]['name']=$product->name;
            $_SESSION['cart'][$product->id]['price']=$product->price;
            //$_SESSION['cart'][$product->id]['img']=$product->img;
			$_SESSION['cart'][$product->id]['img']=$mainImg->getUrl('x100');
        }

		$_SESSION['cart.qty']=isset($_SESSION['cart.qty'])?$_SESSION['cart.qty']+$qty:$qty;
        $_SESSION['cart.sum']=isset($_SESSION['cart.sum'])?$_SESSION['cart.sum']+$qty*$product->price:$qty*$product->price;
    }

    public function recalc($id){
        if(!isset($_SESSION['cart'][$id])) return false;
        $qtyMinus=$_SESSION['cart'][$id]['qty'];
        $sumMinus=$_SESSION['cart'][$id]['qty']*$_SESSION['cart'][$id]['price'];
        $_SESSION['cart.qty']-=$qtyMinus;
        $_SESSION['cart.sum']-=$sumMinus;
        unset($_SESSION['cart'][$id]);
    }
	
	public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }
}