<?php
/**
 * @var \yii\web\View $this
 * @var \yii\db\ActiveQuery $messagesQuery
 */
?>
<?= \yii\widgets\ListView::widget([
    'itemView' => '_row',
    'layout' => '{items}',
    'dataProvider' => new \yii\data\ActiveDataProvider([
        'query' => $messagesQuery,
        'pagination' => false
    ])
]) ?>