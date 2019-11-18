<?php

use yii\db\Migration;

/**
 * Class m191112_130737_start
 */
class m191112_130737_start extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->execute("

        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m191112_130737_start cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m191112_130737_start cannot be reverted.\n";

        return false;
    }
    */
}
