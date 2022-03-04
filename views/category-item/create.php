<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CategoryItem */

$this->title = 'Create Category Item';
$this->params['breadcrumbs'][] = ['label' => 'Category Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
