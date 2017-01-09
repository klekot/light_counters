<?php

use yii\db\Migration;

/**
 * Handles adding accessToken to table `user`.
 */
class m170108_144321_add_accessToken_column_to_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('user', 'accessToken', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('user', 'accessToken');
    }
}
