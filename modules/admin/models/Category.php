<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property int $parent_id
 * @property string $name
 * @property string $keywords
 * @property string $description
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }
	
	public function getPar()
	{
		return $this->hasOne(Category::className(),['id'=>'parent_id']);
	}

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['parent_id'], 'integer'],
            [['name', 'keywords', 'description'], 'required'],
            [['name', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ категории',
            'parent_id' => 'Родительская категория',
            'name' => 'Название',
            'keywords' => 'Ключевые слова (SEO)',
            'description' => 'Мета-описание',
        ];
    }
}