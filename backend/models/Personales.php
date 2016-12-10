<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Personales".
 *
 * @property integer $personal_id
 * @property string $nombre
 * @property string $referencia_resguardo
 * @property string $grado
 * @property string $telefono
 * @property string $email
 * @property string $direccion
 * @property integer $Activo
 */
class Personales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Personales';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'referencia_resguardo', 'email'], 'required'],
            [['grado'], 'string'],
            [['Activo'], 'integer'],
            [['nombre', 'referencia_resguardo', 'telefono', 'direccion'], 'string', 'max' => 250],
            [['email'], 'string', 'max' => 255],
            [['email'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'personal_id' => Yii::t('app', 'Personal ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'referencia_resguardo' => Yii::t('app', 'Referencia Resguardo'),
            'grado' => Yii::t('app', 'Grado'),
            'telefono' => Yii::t('app', 'Telefono'),
            'email' => Yii::t('app', 'Email'),
            'direccion' => Yii::t('app', 'Direccion'),
            'Activo' => Yii::t('app', 'Activo'),
        ];
    }
    public  function beforeSave($insert) {
        parent::beforeSave($insert);
        if($insert)
            $this->Activo=1;
        return true;
    }
}
