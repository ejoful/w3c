<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TutorialDocMenu */

$this->title = Yii::t('app', 'Create Tutorial Doc Menu');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tutorial Doc Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutorial-doc-menu-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
