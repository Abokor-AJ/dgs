<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dispo */

$this->title = Yii::t('app', 'Update Dispo: Ip Disponible');

$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dispos'), 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="dispo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
