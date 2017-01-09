<?php

use yii\db\Migration;

/**
 * Handles the creation of table `kilowatt`.
 */
class m170108_140558_create_kilowatt_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('kilowatt', [
            'id' => $this->primaryKey(),
            'price' => $this->decimal(),
            'date' => $this->date(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('kilowatt');
    }
}
