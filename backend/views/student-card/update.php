<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudentCard */

$this->title = 'Update Student Card: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Student Cards', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="student-card-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
