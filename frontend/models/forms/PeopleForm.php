<?php

namespace frontend\models\forms;

use backend\models\Apple;
use frontend\models\People;
use yii\base\Model;
use yii\db\StaleObjectException;

/**
 * Class PeopleForm
 * @package backend\models\forms
 *
 * @property-read int $id
 * @property-read float $size
 */
class PeopleForm extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $comment;

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['name', 'email', 'comment'], 'required'],
            [['name', 'email'], 'string', 'max' => 50],
            [['email'], 'email'],
            [['comment'], 'string'],
        ];
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'E-Mail',
            'comment' => 'Комментарий',
        ];
    }

    /**
     * Добавление записи в базу данных
     * @return bool
     */
    public function save()
    {
        $model = new People([
            'name' => $this->name,
            'email' => $this->email,
            'comment' => $this->comment,
        ]);

        return $model->save();
    }
}
