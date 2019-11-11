<?php

/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */
/**
/**
 * @var \yii\web\View $this
 * @var \app\models\Message $message
 * @var \yii\db\ActiveQuery $messagesQuery
 */
 
use yii\widgets\ActiveForm;
use yii\db\ActiveQuery;
use yii\helpers\Html;
use yii\bootstrap;
use app\assets\AppAsset;
use yii\helpers\Url;
use yii\widgets\Pjax;
use yii\data\ActiveDataProvider;
use yii\widgets\ListView;
use yii\models\Messages;
use yii\models\UploadForm;
use app\models\Users;

$this->title = 'Чат';

?>
<?php 
	$recipient = $message->to;
	$nick = users::find()->select('username')->where('id = :id', [':id' => $recipient])->one();
?>
<?php \yii\widgets\Pjax::begin([
    'timeout' => 2000,
    'enablePushState' => false,
    'linkSelector' => false,
    'formSelector' => false
]) ?>
<div class="post-info">
	Собеседник:  <?= $nick->username ?>
</div>
<div class="front-view-content">
	<div id='mainwindow' class="mainchat">
		
<?= $this->render('_chat', compact('messagesQuery', 'message','id')) ?>
<?php \yii\widgets\Pjax::end() ?>
<?php $this->registerJs(<<<JS
 var block = document.getElementById("mainwindow");
 block.scrollTop = block.scrollHeight;

function updateList() {
  $.pjax.reload({container: '#list-messages'});
}
setInterval(updateList, 2000);
JS
) ?>
<div class="post-footer">
    <?php $form = ActiveForm::begin(['options' => ['class' => 'pjax-form']]) ?>
		<?= $form->field($message, 'text')->textArea(array('class'=>'textbox')) ?>
		<?= Html::submitButton('', ['class' => 'mainbutton']) ?>
	<?php ActiveForm::end() ?>
</div>