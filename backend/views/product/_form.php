<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\components\MenuWidgetss;
use mihaildev\ckeditor\CKEditor;
use mihaildev\elfinder\ElFinder;


mihaildev\elfinder\Assets::noConflict($this);

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <div class="form-group field-product-category_id has-success">
        <label class="control-label" for="product-category_id">Родительская категория</label>
        <select id="product-category_id" class="form-control" name="Product[category_id]">
            <?= MenuWidgetss::widget(['tpl' => 'select_product', 'model' => $model])?>
        </select>
    </div>


    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6])->widget(CKEditor::className(), [
    'editorOptions' => ElFinder::ckeditorOptions('elfinder',[/* Some CKEditor Options */]),
    ]); ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <?= $form->field($model, 'hit')->dropDownList([ '0' => 'Нет', '1' => 'Да', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'new')->dropDownList([ '0' => 'Нет', '1' => 'Да', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sale')->dropDownList([ '0' => 'Нет', '1' => 'Да', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
