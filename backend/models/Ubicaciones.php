<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Ubicaciones".
 *
 * @property integer $ubicacion_id
 * @property string $nombre_ubicacion
 * @property string $plantel
 * @property integer $Activo
 */
class Ubicaciones extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Ubicaciones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_ubicacion'], 'required'],
            [['Activo'], 'integer'],
            [['nombre_ubicacion', 'plantel'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ubicacion_id' => Yii::t('app', 'Ubicacion ID'),
            'nombre_ubicacion' => Yii::t('app', 'Nombre Ubicacion'),
            'plantel' => Yii::t('app', 'Plantel'),
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