<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * @property int $id
 * @property string $first_name
 * @property string $surname
 * @property string $last_name
 */
class Author extends ActiveRecord
{
    public static function tableName(): string
    {
        return '{{%author}}';
    }

    public function behaviors(): array
    {
        return [
          TimestampBehavior::class
        ];
    }

    public function rules(): array
    {
        return [
            [['first_name', 'last_name', 'surname'], 'string', 'max' => 255],
            [['first_name', 'last_name', 'surname'], 'trim'],
            [['first_name', 'last_name'], 'required'],
        ];
    }

    public function attributeLabels(): array
    {
        return [
            'first_name' => 'Имя',
            'surname' => 'Отчество',
            'last_name' => 'Фамилия',
        ];
    }
}