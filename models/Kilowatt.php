<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kilowatt".
 *
 * @property integer $id
 * @property string $price
 * @property string $date
 */
class Kilowatt extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kilowatt';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'price' => 'Price',
            'date' => 'Date',
        ];
    }
}
