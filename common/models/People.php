<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "peoples".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $comment
 * @property string $created_at
 * @property-read array $getAll
 */
class People extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'peoples';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'email', 'comment'], 'required'],
            [['comment'], 'string'],
            [['email'], 'email'],
            [['created_at'], 'safe'],
            [['name', 'email'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'email' => 'E-Mail',
            'comment' => 'Комментарий',
            'created_at' => 'Created At',
        ];
    }

    /**
     * Получение всех записей
     * @return array|ActiveRecord[]
     */
    public static function getAll()
    {
        return self::find()
            ->orderBy('id asc')
            ->all();
    }
}
