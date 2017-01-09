<?php

use yii\db\Migration;

/**
 * Handles the creation of table `counter`.
 */
class m170108_135547_create_counter_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('counter', [
            'id' => $this->primaryKey(),
            'count' => $this->integer(),
            'date' => $this->date(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('counter');
    }
}
