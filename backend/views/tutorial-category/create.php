<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TutorialCategory */

$this->title = Yii::t('app', 'Create Tutorial Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tutorial Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutorial-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
