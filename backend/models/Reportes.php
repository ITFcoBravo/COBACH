<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Reportes".
 *
 * @property integer $reporte_id
 * @property integer $personal_id
 * @property integer $inmueble_id
 * @property string $nombre_reporte
 * @property string $descripcion
 * @property string $fecha
 * @property integer $Activo
 */
class Reportes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Reportes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['personal_id', 'inmueble_id', 'Activo'], 'integer'],
            [['fecha'], 'required' ,'message' =>'Campo requerido'],
            [['fecha'], 'safe'],
            [['fecha'], 'date', 'format' => 'dd-MM-yyyy'],
            [['nombre_reporte', 'descripcion'], 'string', 'max' => 200],
            [['nombre_reporte'], 'unique'],
            [['descripcion'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'reporte_id' => Yii::t('app', 'Reporte ID'),
            'personal_id' => Yii::t('app', 'Personal ID'),
            'inmueble_id' => Yii::t('app', 'Inmueble ID'),
            'nombre_reporte' => Yii::t('app', 'Nombre Reporte'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'fecha' => Yii::t('app', 'Fecha'),
            'Activo' => Yii::t('app', 'Activo'),
        ];
    }
    public  function beforeSave($insert) {
        $this->fecha = date_format(date_create_from_format('d-m-Y', $this->fecha), 'Y-m-d');
                
                
        parent::beforeSave($insert);
        if($insert)
            $this->Activo=1;
        return true;
    }
    
}