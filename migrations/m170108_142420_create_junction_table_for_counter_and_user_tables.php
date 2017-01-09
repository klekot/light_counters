<?php

use yii\db\Migration;

/**
 * Handles the creation of table `counter_user`.
 * Has foreign keys to the tables:
 *
 * - `counter`
 * - `user`
 */
class m170108_142420_create_junction_table_for_counter_and_user_tables extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('counter_user', [
            'counter_id' => $this->integer(),
            'user_id' => $this->integer(),
            'PRIMARY KEY(counter_id, user_id)',
        ]);

        // creates index for column `counter_id`
        $this->createIndex(
            'idx-counter_user-counter_id',
            'counter_user',
            'counter_id'
        );

        // add foreign key for table `counter`
        $this->addForeignKey(
            'fk-counter_user-counter_id',
            'counter_user',
            'counter_id',
            'counter',
            'id',
            'CASCADE'
        );

        // creates index for column `user_id`
        $this->createIndex(
            'idx-counter_user-user_id',
            'counter_user',
            'user_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-counter_user-user_id',
            'counter_user',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        // drops foreign key for table `counter`
        $this->dropForeignKey(
            'fk-counter_user-counter_id',
            'counter_user'
        );

        // drops index for column `counter_id`
        $this->dropIndex(
            'idx-counter_user-counter_id',
            'counter_user'
        );

        // drops foreign key for table `user`
        $this->dropForeignKey(
            'fk-counter_user-user_id',
            'counter_user'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            'idx-counter_user-user_id',
            'counter_user'
        );

        $this->dropTable('counter_user');
    }
}
