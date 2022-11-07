<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TopicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Topics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topic-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],
            //'id',
            //'name_topic',
            [
            'attribute' => 'name_topic',
            'format' => 'raw',
            'value'=>function ($data) {
                return Html::a($data->name_topic,'test',
                [
                    'class'=>'classname',
                    'data'=>[
                        'method'=>'post',
                        //'confirm'=>'Are you sure? OK to continue Retract..',
                        'params'=>[
                            'param1'=>$data->name_topic,
                            'param2'=>$data->id,
                        ],
                    ]
                ]);
              },
            ],
            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
