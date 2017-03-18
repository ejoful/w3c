<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TutorialDoc */

$this->title = Yii::t('backend', 'Create Tutorial Doc');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Tutorial Docs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutorial-doc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
