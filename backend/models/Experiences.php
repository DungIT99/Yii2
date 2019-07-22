<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "experiences".
 *
 * @property int $id
 * @property int $userId
 * @property string $start_at
 * @property string $end_at
 * @property string $namecompany
 * @property string $aboutjob
 */
class Experiences extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'experiences';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'start_at', 'end_at', 'namecompany', 'aboutjob'], 'required'],
            [['userId'], 'integer'],
            [['start_at', 'end_at', 'namecompany', 'aboutjob'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userId' => 'User ID',
            'start_at' => 'Start At',
            'end_at' => 'End At',
            'namecompany' => 'Namecompany',
            'aboutjob' => 'Aboutjob',
        ];
    }
}
