<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "zhelev".
 *
 * @property string|null $Name
 * @property string $Fename
 * @property int $Age
 * @property int $Weight
 * @property int $Growth
 * @property string $Time
 */
class Zhelev extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'zhelev';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Name', 'Fename'], 'string'],
            [['Fename', 'Age', 'Weight', 'Growth', 'Time'], 'required'],
            [['Age', 'Weight', 'Growth'], 'integer'],
            [['Time'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Name' => 'Name',
            'Fename' => 'Fename',
            'Age' => 'Age',
            'Weight' => 'Weight',
            'Growth' => 'Growth',
            'Time' => 'Time',
        ];
    }
}
