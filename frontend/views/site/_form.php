<?php

use common\widgets\Alert;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

Pjax::begin([
    'id' => 'form_box'
]);

$form = ActiveForm::begin([
    'action' => ['site/create'],
    'validationUrl' => ['site/validate'],
    'options' => ['id' => 'people_form'],
    'enableClientValidation' => true,
    'enableAjaxValidation' => true,
    'validateOnChange' => false,
    'validateOnBlur' => false,
    'validateOnType' => false,
    'validateOnSubmit' => true,
]);
?>
    <div class="form black">
        <div class="row">
            <div class="col-12 col-sm-6 left">
                <?php
                print $form->field($model, 'name')->textInput();
                print $form->field($model, 'email')->textInput();
                ?>
            </div>
            <div class="col-12 col-sm-6 right">
                <?php
                print $form->field($model, 'comment')->textarea();
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <?php
                print Html::submitButton('Записать', ['class' => 'submit-button']);
                ?>
            </div>
        </div>
    </div>
<?php
$form->end();
$this->registerJs("peopleForm.init()", View::POS_READY);
Pjax::end();
