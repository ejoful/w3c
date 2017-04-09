<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Opensource */

$this->title = Yii::t('app', 'Create Opensource');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Opensources'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="opensource-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
