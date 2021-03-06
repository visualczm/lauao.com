<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 2017/9/12
 * Time: 上午12:12
 */
namespace restful\models;


use Yii;
use common\models\ActivityAdvert;
use common\models\ApplyRecord;
use common\models\ActivityBase;
use common\models\RelateActivityApply;

class ApplyUserService extends ApplyRecord
{
    public function getUserApplyList($pageSize=10)
    {
        $query = self::find();
        $query->select('ar.id,ar.apply_name,ar.self_desc,ar.self_picture,ar.self_media,ar.updated_at,raa.votes');
        $query->from(['ar'=>ApplyRecord::tableName()]);
        $query->leftJoin(['ab'=>ActivityBase::tableName()],'ar.activity_id=ab.id');
        $query->leftJoin(['raa'=>RelateActivityApply::tableName()],'raa.apply_id=ar.id');
        $query->where(['ar.status'=>2]);
        $query->andWhere(['ab.status'=>2]);
        $query->orderBy(['raa.votes'=>SORT_DESC,'ar.id'=>SORT_ASC]);
        $query->groupBy('ar.id');

        $curr_page   = Yii::$app->request->get('page') ? Yii::$app->request->get('page') : 1;

        $data['allPage']  = ceil($query->count() / $pageSize);
        $data['currPage'] = $curr_page;
        $data['list'] =  $query->offset(($curr_page-1)*$pageSize)
            ->limit($pageSize)
            ->asArray()
            ->all();

        return $data;
    }

    public function getApplyUserInfo($ApplyId)
    {
        $query = self::find();
        $query->select('ar.id,ar.apply_name,ar.self_desc,ar.self_picture,ar.self_media,raa.votes');
        $query->from(['ar'=>ApplyRecord::tableName()]);
        $query->leftJoin(['ab'=>ActivityBase::tableName()],'ar.activity_id=ab.id');
        $query->leftJoin(['raa'=>RelateActivityApply::tableName()],'raa.apply_id=ar.id');
        $query->where(['ar.status'=>2]);
        $query->andWhere(['ab.status'=>2]);
        $query->andWhere(['ar.id'=>$ApplyId]);
        return $query->asArray()->one();
    }


    public static function getAdvertList($postion=1)
    {
        $query = ActivityAdvert::find();
        $query->select('aa.*');
        $query->from(['aa'=>ActivityAdvert::find()]);
        $query->leftJoin(['ab'=>ActivityBase::tableName()],'aa.activity_id=ab.id');
        $query->where(['aa.status'=>2]);
        $query->andWhere(['ab.status'=>2]);
        if ($postion==1){
            $query->andWhere(['aa.type'=>1]);
            $query->andWhere(['aa.position'=>1]);
        }else{
            $query->andWhere(['aa.type'=>2]);
            $query->andWhere(['aa.position'=>2]);
        }
        return $query->asArray()->all();
    }

    public static function getActivityInfo($activity)
    {
        $query = self::find();
        $tempQuery = clone $query;
        $tmpQuery  = clone $query;
        $query->select('ar.id,ar.apply_name,ar.self_desc,ar.self_picture,ar.self_media,raa.votes');
        $query->from(['ar'=>ApplyRecord::tableName()]);
        $query->leftJoin(['ab'=>ActivityBase::tableName()],'ar.activity_id=ab.id');
        $query->leftJoin(['raa'=>RelateActivityApply::tableName()],'raa.apply_id=ar.id');
        $query->where(['ar.status'=>2]);
        $query->andWhere(['ab.status'=>2]);
        $query->andWhere(['ab.id'=>$activity['id']]);
        $query->orderBy(['raa.votes'=>SORT_DESC]);
        $query->limit(3);
        $result['TopThree'] = $query->asArray()->all();

        $tempQuery->select('ar.id');
        $tempQuery->from(['ar'=>ApplyRecord::tableName()]);
        $tempQuery->leftJoin(['ab'=>ActivityBase::tableName()],'ar.activity_id=ab.id');
        $tempQuery->leftJoin(['raa'=>RelateActivityApply::tableName()],'raa.apply_id=ar.id');
        $tempQuery->where(['ar.status'=>2]);
        $tempQuery->andWhere(['ab.status'=>2]);
        $tempQuery->andWhere(['ab.id'=>$activity['id']]);
        $result['countApply'] = $tempQuery->count();

        $tmpQuery->select('sum(raa.votes) as count_votes');
        $tmpQuery->from(['raa'=>RelateActivityApply::tableName()]);
        $tmpQuery->leftJoin(['ar'=>ApplyRecord::tableName()],'raa.apply_id=ar.id');
        $tmpQuery->leftJoin(['ab'=>ActivityBase::tableName()],'raa.activity_id=ab.id');
        $tmpQuery->where(['ar.status'=>2]);
        $tmpQuery->andWhere(['ab.status'=>2]);
        $tmpQuery->andWhere(['ab.id'=>$activity['id']]);

        $result['countVotes'] = $tmpQuery->asArray()->one();

        return $result;
    }
}