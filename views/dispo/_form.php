<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dispo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dispo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'plage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['value' => 'Disponible', 'readonly' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
