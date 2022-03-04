<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\CategoryItem;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CategoryItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Category Items';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-item-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Category Item', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'parent_category',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, CategoryItem $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
