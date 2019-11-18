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
            CREATE TABLE peoples (
                id INT(11) NOT NULL AUTO_INCREMENT,
                name VARCHAR(50) NOT NULL,
                email VARCHAR(50) NOT NULL,
                comment TEXT NOT NULL,
                created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
                PRIMARY KEY (id)
            )
            ENGINE = INNODB;
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
