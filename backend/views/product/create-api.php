<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Product */

$this->title = '添加Api对接产品';
$this->params['breadcrumbs'][] = ['label' => '产品列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mk-product-create">

    <?= $this->render('_form-api', [
    'model' => $model,
    ]) ?>

</div>