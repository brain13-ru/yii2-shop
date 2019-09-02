<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $title
 * @property string $content
 * @property string $date
 * @property string $keywords
 * @property string $description
 * @property string $published
 */
class Article extends \yii\db\ActiveRecord
{
	public $image;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }
	
	public function behaviors()
    {
        return [
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'content', 'date', 'keywords', 'description', 'published'], 'required'],
            [['content', 'published'], 'string'],
            [['date'], 'safe'],
			[['image'], 'file', 'extensions' => 'png, jpg'],
            [['title', 'keywords', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ статьи',
            'title' => 'Название',
            'content' => 'Содержание',
            'date' => 'Дата',
            'keywords' => 'Ключевые слова',
            'description' => 'Мета-описание',
            'published' => 'Опубликована',
			'image' => 'Изображение',
        ];
    }
	
	public function upload(){
        if($this->validate()){
            $path = 'upload/store/' . $this->image->baseName . '.' . $this->image->extension;	        
            $this->image->saveAs($path);
			$this->attachImage($path,true);
			@unlink($path);
            return true;
        }
		else
		{
            return false;
        }
    }
}
