<?php

use yii\db\Migration;

/**
 * Handles the creation of table `payment`.
 */
class m170108_141240_create_payment_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('payment', [
            'id' => $this->primaryKey(),
            'amount' => $this->decimal(),
            'payment_date' => $this->date(),
            'period_start' => $this->date(),
            'period_end' => $this->date(),
            'picture' => $this->string(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('payment');
    }
}
