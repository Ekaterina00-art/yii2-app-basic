<?php
 
use yii\helpers\Html;
 
/* @var $this yii\web\View */
/* @var $model \app\modules\user\models\User */
 
$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-default-index">
    <h1><?= Html::encode($this->title) ?></h1>
 
    <p>
        <?= Html::a(Yii::t('app', 'Users'), ['users/index'], ['class' => 'btn btn-primary']) ?>
    </p>
</div>