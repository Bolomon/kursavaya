<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div aria-live="polite" aria-atomic="true" style="position: relative; height: 500px;">
    <div style="height: 100px; width: 100%">
<!--        <div class="toast" style="position: absolute; top: 0; right: 0; border-color: #8699a4">-->
<!--            <div class="toast-header">-->
<!--                <img src="../web/images/user.png" class="rounded mr-2" alt="..." id = "user_icon" style="height: 20px; width: 20px;">-->
<!--                <strong class="mr-auto">User_name</strong>-->
<!--                <small>11 mins ago</small>-->
<!---->
<!--            </div>-->
<!--            <div class="toast-body">-->
<!--                Hello, world! This is a toast message.-->
<!--            </div>-->
            <?php

            ?>
        </div>

    </div>

    <div style="margin-top: 100px;">
        <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
        <?= $form->field($model, 'message')->textInput(['class' => 'form-control', 'id' => 'exampleInputMassage', 'placeholder' => 'Enter message']); ?>
        <div class="form-group">
            <?= Html::submitButton('Message', ['class' => 'btn btn-primary', 'name' => 'message-button']); ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>



</div>
