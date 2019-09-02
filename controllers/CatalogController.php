<?php

namespace app\controllers;

use app\models\Product;
use app\models\Category;
use Yii;
use yii\data\Pagination;

class CatalogController extends AppController
{
   
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $query=Product::find();
        $pages=new Pagination(['totalCount'=>$query->count(),'pageSize'=>9,'forcePageParam'=>false, 'pageSizeParam'=>false]);
        $products=$query->offset($pages->offset)->limit(9)->all();
		$hits=Product::find()->where(['hit'=>'1'])->limit(3)->all();
        $this->setMeta("kids-shop.fun | Детские игрушки");
        return $this->render('index',compact('products','pages','hits'));
    }

    public function actionCategory($id){
       
	   $category=Category::find()->where(['id'=>$id])->one();
	   if(empty($category)){
			throw new \yii\web\HttpException(404,"Такой категории товаров нет");
	   }
       $query=Product::find()->where(['category_id'=>$id]);
       $pages=new Pagination(['totalCount'=>$query->count(),'pageSize'=>8,'forcePageParam'=>false, 'pageSizeParam'=>false]);
       $products=$query->offset($pages->offset)->limit(8)->all();
       
       $category_name=$category['name'];
       $this->setMeta("kids-shop.fun | ".$category_name,$category['keywords'],$category['description']);

       return $this->render('category',compact('products','category_name','pages'));
    }
	
	public function actionSearch(){
       
	   $q=Yii::$app->request->get('q');
       $query=Product::find()->where(['like','name',$q]);
       $pages=new Pagination(['totalCount'=>$query->count(),'pageSize'=>8,'forcePageParam'=>false, 'pageSizeParam'=>false]);
       $products=$query->offset($pages->offset)->limit(8)->all();
       
       $this->setMeta("kids-shop.fun | Результаты поиска по строке '".$q."'");
	   $title="kids-shop.fun | Результаты поиска по строке '".$q."'";

       return $this->render('search',compact('products','title','pages','q'));
    }

    public function actionProduct($id){
       
        $product=Product::find()->where(['id'=>$id])->one();
		if(empty($product)){
			throw new \yii\web\HttpException(404,"Такого товара нет");
	   }
		$similar_products=Product::find()->where('category_id=:cat_id',[':cat_id'=>$product->category_id])->andWhere('id<>:prod_id',[':prod_id'=>$product->id])->limit(8)->all();
		$this->setMeta("kids-shop.ru | ".$product['name'],$product['keywords'],$product['description']);
        return $this->render('product',compact('product','similar_products'));
    }

   
}
