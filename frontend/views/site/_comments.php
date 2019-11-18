<?php
/** @var $people People */


use frontend\models\People;
use yii\widgets\Pjax;

Pjax::begin([
    'id' => 'comments_box'
]);
?>
    <div class="title">Выводим комментарии</div>
    <div class="comments">
        <?php
        foreach ($peoples as $people) {
            ?>
            <div class="col-xs-12 col-sm-4 col-md-3 comment_wrapper">
                <div class="comment_block">
                    <div class="comment_title"><?php echo $people->name ?></div>
                    <div class="comment_email"><?php echo $people->email ?></div>
                    <div class="comment_text"><?php echo $people->comment ?></div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
<?php
Pjax::end();