<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\OpensourceCategory */

$this->title = Yii::t('app', 'Create Opensource Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Opensource Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="opensource-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
