<?php
/**
 * Created by PhpStorm.
 * User: Игорь
 * Date: 12.07.2019
 * Time: 16:01
 */
namespace app\components;
use yii\base\Widget;
use app\models\Category;

class MenuWidget extends Widget
{
    public $tpl;
    public $data;
    public $tree;
    public $menuHtml;
	public $model;

    public function init(){
        parent::init();
        if($this->tpl===null){
            $this->tpl='menu';
        }
        $this->tpl.='.php';

    }

    protected function getTree(){
        $tree=[];
        foreach($this->data as $id=>&$node){
            if(!$node['parent_id'])
                $tree[$id]=&$node;
            else
                $this->data[$node['parent_id']]['childs'][$node['id']]=&$node;
        }
        return $tree;
    }

    protected function getMenuHtml($tree,$tab=""){
        $str='';
        foreach($tree as $category){
            $str.=$this->catToTemplate($category,$tab);
        }
        return $str;
    }

    protected function catToTemplate($category,$tab){
        ob_start();
        include __DIR__.'/menu_tpl/'.$this->tpl;
        return ob_get_clean();
    }

    public function run()
    {
	   if($this->tpl=='menu.php'){
			$menu=\Yii::$app->cache->get('menu');
			if($menu) return $menu;
	   }
       $this->data=Category::find()->indexBy('id')->asArray()->all();
       $this->tree=$this->getTree();
       $this->menuHtml=$this->getMenuHtml($this->tree);
	   if($this->tpl=='menu.php'){
			\Yii::$app->cache->set('menu',$this->menuHtml,60);
	   }
       return $this->menuHtml;
    }
}