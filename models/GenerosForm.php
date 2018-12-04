<?php

namespace app\models;

use Yii;
use yii\base\Model;

class GenerosForm extends Model
{
    public $genero;

    public function rules()
    {
        return [
            [['genero'], 'required'],
            [['genero'], 'string', 'max' => 255],
            [['genero'], function ($attribute, $params, $validator) {
                $fila = Yii::$app->db
                    ->createCommand('SELECT id
                                    FROM generos
                                    WHERE genero = :genero', [':genero' => $this->$attribute])
                    ->queryOne();
                if (!empty($fila) && $fila['id'] != Yii::$app->request->get('id')) {
                    $this->addError($attribute, 'Este genero ya existe');
                }
            }],
        ];
    }

    public function attributeLabels()
    {
        return [
            'genero' => 'Género',
        ];
    }
}
