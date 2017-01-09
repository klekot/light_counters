<?php

use yii\db\Migration;

/**
 * Handles adding authKey to table `user`.
 */
class m170108_144245_add_authKey_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('user', 'authKey', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('user', 'authKey');
    }
}
