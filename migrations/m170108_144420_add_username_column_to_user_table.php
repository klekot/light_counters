<?php

use yii\db\Migration;

/**
 * Handles adding username to table `user`.
 */
class m170108_144420_add_username_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('user', 'username', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('user', 'username');
    }
}
