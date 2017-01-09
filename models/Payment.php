<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property integer $id
 * @property string $amount
 * @property string $payment_date
 * @property string $period_start
 * @property string $period_end
 * @property string $picture
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['amount'], 'number'],
            [['payment_date', 'period_start', 'period_end'], 'safe'],
            [['picture'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'amount' => 'Amount',
            'payment_date' => 'Payment Date',
            'period_start' => 'Period Start',
            'period_end' => 'Period End',
            'picture' => 'Picture',
        ];
    }
}
