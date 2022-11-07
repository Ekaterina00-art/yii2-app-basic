<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="story-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
    <?php
    $arr = [
        'январь','февраль','март',
        'апрель','май','июнь','июль',
        'август','сентябрь','октябрь',
        'ноябрь','декабрь'
      ];
    $arraydate = array(); $arraykolvo = array();
    $id = Yii::$app->user->id;
    $answ = "";
    foreach($story as $st){
        if($id === $st->user_id){
        $date = strtotime($st->data);
        $month = date('n', $date)-1;
        $arraydate[] = date('d', $date)." ".$arr[$month].' '.date('Y', $date);
        $arraykolvo[] = $st->kolvo;
        }
        else $answ = "Ваш журнал пуст!";
    }
    echo "<p>$answ</p></br>";
    ?></p>

<div class="panel-default">
    <h1><?php Yii::$app->user->identity->username?></h1>
    <?php $count = count($arraydate);
    for($i=0; $i<$count; $i++){?>
        <div class="panel-heading">
        <p class="panel-title"><?= $answ?></p>
        <p class="panel-title"><?= $r = $arraydate[$i]." - вы выучили ".$arraykolvo[$i]." слов";?></p>
        </div>
    <?php } ?>
</div>


</div>
