<?php
/**
 * Created by PhpStorm.
 * User: Игорь
 * Date: 12.07.2019
 * Time: 15:50
 */

namespace app\models;
use yii\db\ActiveRecord;



class Product extends ActiveRecord
{
    public static function tableName()
    {
        return "products";
    }

    public function getProducts(){
        return $this->hasOne(Category::className,['id'=>'category_id']);
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