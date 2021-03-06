<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\VideoMember */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '成员列表', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="video-member-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('更新', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('删除', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '确定删除此项?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'avatar_url:image',
            'name',
            'desc',
            'sort',
            'created_at',
        ],
    ]) ?>

</div>
