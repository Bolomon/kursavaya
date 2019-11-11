<?php
/**
 * @var \yii\web\View $this
 * @var \app\models\Messages $chat
 * @var \app\models\Users $chat
 * @var \app\models\Profile $chat
 */
use app\models\Users;
use app\models\Profile;
use app\models\Messages;
?>
<?php 
	$recipient = $model->to;
	$sender = $model->from;
	$nick = users::find()->select('username')->where('id = :id', [':id' => $sender])->one();
	//debug($avatar->image);
 ?>

<?php 
if ((($recipient == $_GET['id'])&&($sender == Yii::$app->user->id))||($recipient == Yii::$app->user->id)&&($sender == $_GET['id'])){
	if($recipient == $_GET['id']){ 
		echo 
			'<div class="mymess">
				<div class="myname">'. Yii::$app->user->identity["username"].'</div> 
			    <div class="text-mess">'. $model->text.'</div>
			    <div class="date">'.$model->date_text.'</div>
			</div>';
	} else {
		echo 
			'<div class="mess">
				<div class="name">'. $nick->username .'</div>
				<div class="text-mess">'. $model->text .'</div>
				<div class="date">'.$model->date_text.'</div>
			</div>';
	}
	//debug($model);
}
//debug($sender);
?>