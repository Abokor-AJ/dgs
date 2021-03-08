<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dispo".
 *
 * @property int $id
 * @property string $plage
 * @property string $status
 * @property string $updated_date
 * @property string $created_date
 */
class Dispo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dispo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['plage', 'status'], 'required'],
            [['updated_date', 'created_date'], 'safe'],
            [['plage'], 'string', 'max' => 101],
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
            'plage' => Yii::t('app', 'Plage'),
            'status' => Yii::t('app', 'Status'),
            'updated_date' => Yii::t('app', 'Updated Date'),
            'created_date' => Yii::t('app', 'Created Date'),
        ];
    }
}
