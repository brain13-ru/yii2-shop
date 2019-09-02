<?php

namespace app\controllers;

use app\models\Article;

use Yii;
use yii\data\Pagination;

class ArticleController extends AppController
{
   
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $query=Article::find();
        $pages=new Pagination(['totalCount'=>$query->count(),'pageSize'=>9,'forcePageParam'=>false, 'pageSizeParam'=>false]);
        $articles=$query->offset($pages->offset)->limit(9)->all();
        $this->setMeta("kids-shop.ru | Статьи и новости");
        return $this->render('index',compact('articles','pages'));
    }

   
    public function actionShow($id){
       
	  
        $article=Article::find()->where(['id'=>$id])->one();
		$articles=Article::find()->where(['<>','id',$id])->limit(3)->all();
		if(empty($article)){
			throw new \yii\web\HttpException(404,"Такой статьи нет");
	   }
	
		$this->setMeta("kids-shop.ru | ".$article['title'],$article['keywords'],$article['description']);
        return $this->render('view',compact('article','articles'));
    }

   
}
