<?php

use yii\db\Migration;

/**
 * Handles dropping name from table `user`.
 */
class m170108_144528_drop_name_column_from_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->dropColumn('user', 'name');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->addColumn('user', 'name', $this->string());
    }
}
