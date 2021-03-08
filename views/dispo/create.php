<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dispo */

$this->title = Yii::t('app', 'Create Dispo');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Dispos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dispo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
