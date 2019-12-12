<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudentCard */

$this->title = 'Create Student Card';
$this->params['breadcrumbs'][] = ['label' => 'Student Cards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-card-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
