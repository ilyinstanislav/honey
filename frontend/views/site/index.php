<?php

/* @var $this yii\web\View */

$this->title = 'Список записей';
?>
    <div class="col-12 black contact_icon">
        <img src="/images/contact_icon.png">
    </div>
<?php

echo $this->render('_form', compact('model'));
echo $this->render('_comments', compact('peoples'));

