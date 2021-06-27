<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="article-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <p class="text-muted">
        <small>
            Created At: <b><?php echo Yii::$app->formatter->asDatetime($model->created_at); ?></b>
            <br>
            By: <b><?php echo $model->createdBy->username; ?></b>
        </small>
    </p>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div>
        <?php echo $model->getEncodedBody(); ?>
    </div>
</div>