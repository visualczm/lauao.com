<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\modules\admin\components\Helper;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\admin\models\searchs\User */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $model \backend\modules\admin\models\User */

$this->title = Yii::t('rbac-admin', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col-xs-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
                <div class="box-tools">
                    <?= Html::a(Yii::t('rbac-admin', 'Create'), ['signup'], ['class' => 'btn btn-info']) ?>
                </div>
            </div>
            <div class="box-body">
                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'layout'       => "{items}{pager}{summary}",
                    'summary'      => "<span class='dataTables_info'>当前共有{totalCount}条数据,分为{pageCount}页,当前为第{page}页</span>",
                    'options'      => [
                        'class' => 'col-sm-12 no-padding'
                    ],
                    'pager' => [
                        'options'=>[
                            'class' => 'pagination pull-right no-margin',
                        ]
                    ],
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        [
                            'label' => '姓名',
                            'attribute'=>'userExtend.real_name',
                            'format' => 'raw',
                            'value'  => 'userExtend.real_name',
                            "headerOptions" => [
                                "width" => "80"
                            ],
                        ],
                        [
                            'label' => '用户名',
                            'attribute'=>'username',
                            'format' => 'raw',
                            'value'=>function ($model) {
                                return $model->username;
                            },
                            "headerOptions" => [
                                "width" => "80"
                            ],
                        ],
                        [
                            'label' => '部门',
                            'attribute'=>'section',
                            'format' => 'html',
                            'value'  => function($model){
                                return $model->userExtend['section'];
                            },
                            "headerOptions" => [
                                "width" => "80"
                            ],
                        ],
                        [
                            'label' => '邮件',
                            'attribute'=>'email',
                            'format' => 'raw',
                            'value'=>function ($model) {
                                return $model->email;
                            },
                            "headerOptions" => [
                                "width" => "150"
                            ],
                        ],
                        [
                            'label' => '创建时间',
                            'attribute'=>'created_at',
                            'format' => ['date', 'php:Y-m-d'],
                            "headerOptions" => [
                                "width" => "100"
                            ],
                        ],
                        [
                            'label' => '状态',
                            'attribute' => 'status',
                            'format' => 'html',
                            'value' => function($model) {
                                $string = $model->status==1 ? '禁用' : '启用';
                                $class  = $model->status==1 ? 'danger' : 'success';
                                $html   ='<span class="label label-'.$class.'">'.$string.'</span>';
                                return $html;
                            },
                            'filter' => [
                                0 => '禁用',
                                10 => '启用'
                            ],
                            "headerOptions" => [
                                "width" => "50"
                            ],
                        ],
                        [
                            'label' => '上次登录IP',
                            'attribute'=>'last_login_ip',
                            'format' => 'html',
                            'value'  => function($model){
                                return long2ip($model->userExtend['last_login_ip']);
                            },
                            "headerOptions" => [
                                "width" => "100"
                            ],
                        ],
                        [
                            'label' => '上次登录时间',
                            'attribute'=>'last_login_time',
                            'format' => 'html',
                            'value'  => function($model){
                                return date('Y-m-d H:i:s',$model->userExtend['last_login_time']);
                            },
                            "headerOptions" => [
                                "width" => "150"
                            ],
                        ],
                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template' => Helper::filterActionColumn(['view','update', 'activate', 'delete']),
                            'buttonOptions' => [
                                'class' => 'btn btn-sm bg-olive margin-r-5'
                            ],
                            'buttons' => [
                                'activate' => function($url, $model) {
                                    if ($model->status == 10) {
                                        return '';
                                    }
                                    $options = [
                                        'title' => Yii::t('rbac-admin', 'Activate'),
                                        'aria-label' => Yii::t('rbac-admin', 'Activate'),
                                        'data-confirm' => Yii::t('rbac-admin', 'Are you sure you want to activate this user?'),
                                        'data-method' => 'post',
                                        'data-pjax' => '0',
                                    ];
                                    return Html::a('<span class="glyphicon glyphicon-ok"></span>', $url, $options);
                                }
                                ]
                            ],
                        ],
                    ]);
                ?>
            </div>
        </div>
    </div>
</div>
