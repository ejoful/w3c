<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\OpensourceDoc */

$this->title = Yii::t('app', 'Create Opensource Doc');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Opensource Docs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="opensource-doc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
