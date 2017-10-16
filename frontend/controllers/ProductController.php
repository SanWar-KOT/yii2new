<?php
/**
 * Created by PhpStorm.
 * User: SanWar
 * Date: 24.09.17
 * Time: 20:11
 */

namespace frontend\controllers;
use app\models\Category;
use app\models\Product;
use Yii;

class ProductController extends AppController
{
    public function actionView($id){
        $products = Product::findOne($id);
        $hits = Product::find()->where(['hit' => '1'])->limit(6)->all();
        $this->setMeta('E-SHOPPER | ' . $products->name, $products->keywords, $products->description);
        return $this->render('view', ['products' => $products,'hits' => $hits ]);
    }
}