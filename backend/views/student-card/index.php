<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use common\widgets\StudentCardSearchWidget;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Cards';
$this->params['breadcrumbs'][] = $this->title;
?>
<? Modal::begin([
    'header' => '<h2>Поиск карточек студентов по полям</h2>',
    'toggleButton' => [
        'label' => 'Search',
        'tag' => 'button',
        'class' => 'btn btn-success',
    ],
    'footer' => 'Низ окна',
]); ?>
<?= StudentCardSearchWidget::widget() ?>
<? Modal::end() ?>

<div class="student-card-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Student Card', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',
            'middlename',
            'lastname',
            'city',
            'university',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
