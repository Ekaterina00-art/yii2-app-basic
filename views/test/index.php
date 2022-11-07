<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use app\assets\AppAsset;
use yii\widgets\Pjax;
//AppAsset::register($this);
/* @var $this yii\web\View */
/* @var $searchModel app\models\WordSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->registerCssFile("@web/css/tteest.css");
$this->registerJsFile(
    '@web/js/jsbtn.js',
    ['depends' => [\yii\web\JqueryAsset::class]]
);

/*if(isset($_POST['check'])){
    $nn = $_POST['check'];
}*/

$this->title = 'Тест';
$this->title = $model->id;
$this->params['breadcrumbs'][] = $this->title;
?>
<p><?= $name = "";
    if(isset($_POST['param1'])){
        $name = $_POST['param1'];
        $num = $_POST['param2'];
        //echo "Имя: $name, номер: $num <br>";
        }

    ?>
</p>
<div class="word-index">
    <?php $arrayengl = array(); $arrayrus = array(); $arrayimg = array();$w = true;
    foreach($model as $post): if(($num == $post->topic_id)) {
        $imma=$post->img;
        $arrayengl[] = $post->english;
        $arrayrus[] = $post->russian;
        $arrayimg[] = $post->img;
    }
    else{
        $w = false;
    }
    endforeach;
    if($w==false){
    echo "<p>Нет слов по этой теме!</p><br>";
    }
    ?>
    <?php $i = 1;?>
    <?php $count = count($arrayengl);
    $numbers = range(1, $count-1);
    shuffle($numbers);
    //echo "Количество английский слов = $count, i = $i";
    ?>
    <div class="panel-default">
        <div class="panel-heading">
        <h2 class="panel-title" style="height:100px; line-height:100px; width:500px; text-align:center;"><?= $arrayengl[$i]?></h2>
        </div><br>
        <div class="btn-group">
        <button name='submit' id='f' class="btn" onClick="clickMe()"><?php echo $arrayrus[$numbers[0]];?></button>
        <button name='submit' id='s' class="btn"><?php echo $arrayrus[$numbers[1]]?></button>
    </div>
    <div class="btn-group2">
        <button  name='submit' id='1' class="btn"><?php echo $arrayrus[$i];?></button>
        <button  name='submit' id='2' class="btn"><?php echo $arrayrus[$numbers[4]]?></button>
    </div>
    </div><br>
<?php 
/*foreach ($numbers as $number) {
    echo "$number ";
}
echo $id = Yii::$app->user->id;
if($id===`Null`) echo "Null!";
else echo " Id = $id";*/
?>
</div>
