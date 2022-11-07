<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Word */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="word-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'topic_id')->textInput() ?>

    <?= $form->field($model, 'russian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'english')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
