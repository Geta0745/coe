<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "capacity_type".
 *
 * @property int $capacity_type_id ID
 * @property string $full_name ชื่อเต็มของชนิดเก็บ
 * @property string $init ชื่อย่อ
 * @property string|null $description รายละเอียด
 */
class CapacityType extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'capacity_type';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'init'], 'required'],
            [['full_name'], 'string', 'max' => 50],
            [['init'], 'string', 'max' => 5],
            [['description'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'capacity_type_id' => 'Log LD',
            'full_name' => 'ชื่อเต็มชนิดข้อมูล',
            'init' => 'ตัวย่อ',
            'description' => 'รายละเอียด',
        ];
    }

    public function metricConvert($model){
        
    }
}
