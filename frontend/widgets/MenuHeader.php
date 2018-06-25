<?php
namespace frontend\widgets;

use app\models\Category;
use yii\base\Widget;



class MenuHeader extends Widget
{

    public function init()
    {
        parent::init();

    }

    public  function run()
    {

        $items = Category::getAll();

        return$this->render('menuheader', [
            'items' => $items,
        ]);
    }
}