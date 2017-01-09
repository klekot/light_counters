<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "counter".
 *
 * @property integer $id
 * @property integer $count
 * @property string $date
 */
class Counter extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'counter';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['count'], 'integer'],
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
            'count' => 'Count',
            'date' => 'Date',
        ];
    }
}
