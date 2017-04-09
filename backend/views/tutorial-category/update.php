<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TutorialCategory */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tutorial Category',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tutorial Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tutorial-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
