<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tutorial */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Tutorial',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tutorials'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="tutorial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
