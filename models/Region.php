<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "region".
 *
 * @property int $id
 * @property string $name
 * @property string $block
 * @property string $plage
 * @property string $subnet
 * @property string $interface
 * @property int $number_of_ip
 * @property string $status
 * @property string $updated_date
 * @property string $created_date
 */
class Region extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'region';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'block', 'plage', 'subnet', 'interface', 'number_of_ip', 'status'], 'required'],
            [['number_of_ip'], 'integer'],
            [['updated_date', 'created_date'], 'safe'],
            [['name'], 'string', 'max' => 35],
            [['block', 'plage', 'subnet'], 'string', 'max' => 101],
            [['interface'], 'string', 'max' => 105],
            [['status'], 'string', 'max' => 15],
            [['plage'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'block' => Yii::t('app', 'Block'),
            'plage' => Yii::t('app', 'Plage'),
            'subnet' => Yii::t('app', 'Subnet'),
            'interface' => Yii::t('app', 'Interface'),
            'number_of_ip' => Yii::t('app', 'Number Of Ip'),
            'status' => Yii::t('app', 'Status'),
            'updated_date' => Yii::t('app', 'Updated Date'),
            'created_date' => Yii::t('app', 'Created Date'),
        ];
    }
}
