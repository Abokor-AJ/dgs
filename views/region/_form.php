<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Region */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="region-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'block')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plage')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subnet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interface')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'number_of_ip')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['value' => 'Utilise', 'readonly' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
