<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%currencies}}".
 *
 * @property int $id
 * @property string|null $name
 * @property float|null $rate
 */
class Currencies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%currencies}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rate'], 'number'],
            [['name'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'rate' => 'Rate',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \common\models\query\CurrenciesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\CurrenciesQuery(get_called_class());
    }
}
