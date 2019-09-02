<?php
/**
 * Created by PhpStorm.
 * User: Игорь
 * Date: 12.07.2019
 * Time: 15:50
 */

namespace app\models;
use yii\db\ActiveRecord;



class Category extends ActiveRecord
{
    public static function tableName()
    {
        return "categories";
    }

    public function getProducts(){
        return $this->hasMany(Product::className,['category_id'=>'id']);
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