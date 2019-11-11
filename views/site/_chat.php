<?php
/**
 * @var \yii\web\View $this
 * @var \app\models\Messages $message
 * @var \yii\db\ActiveQuery $messagesQuery
 */
?>
<?php \yii\widgets\Pjax::begin([
    'id' => 'list-messages',
    'enablePushState' => false,
    'formSelector' => false,
    'linkSelector' => false
]) ?>
<?= $this->render('_list', compact('messagesQuery','id','sender')) ?>
<?php \yii\widgets\Pjax::end() ?>