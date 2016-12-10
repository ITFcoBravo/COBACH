<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Inmuebles".
 *
 * @property integer $inmueble_id
 * @property integer $ubicacion_id
 * @property string $nombre
 * @property integer $Activo
 * @property string $descripcion
 * @property string $numero_control
 * @property string $marca
 * @property string $numero_serie
 * @property string $modelo
 * @property integer $cantidad_inventario
 * @property double $costo
 * @property string $digito
 * @property string $fecha_adquisicion
 * @property string $fotografia_uno
 * @property string $fotografia_dos
 * @property string $fotografia_detalle
 */
class Inmuebles extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Inmuebles';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ubicacion_id', 'Activo', 'cantidad_inventario'], 'integer'],
            [['nombre', 'descripcion', 'numero_control', 'marca', 'numero_serie', 'modelo', 'cantidad_inventario', 'digito', 'fotografia_uno'], 'required'],
            [['costo'], 'number'],
            [['fecha_adquisicion'], 'safe'],
            [['nombre', 'descripcion', 'numero_control', 'marca', 'numero_serie', 'modelo', 'digito', 'fotografia_uno', 'fotografia_dos', 'fotografia_detalle'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'inmueble_id' => Yii::t('app', 'Inmueble ID'),
            'ubicacion_id' => Yii::t('app', 'Ubicacion ID'),
            'nombre' => Yii::t('app', 'Nombre'),
            'Activo' => Yii::t('app', 'Activo'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'numero_control' => Yii::t('app', 'Numero Control'),
            'marca' => Yii::t('app', 'Marca'),
            'numero_serie' => Yii::t('app', 'Numero Serie'),
            'modelo' => Yii::t('app', 'Modelo'),
            'cantidad_inventario' => Yii::t('app', 'Cantidad Inventario'),
            'costo' => Yii::t('app', 'Costo'),
            'digito' => Yii::t('app', 'Digito'),
            'fecha_adquisicion' => Yii::t('app', 'Fecha Adquisicion'),
            'fotografia_uno' => Yii::t('app', 'Fotografia Uno'),
            'fotografia_dos' => Yii::t('app', 'Fotografia Dos'),
            'fotografia_detalle' => Yii::t('app', 'Fotografia Detalle'),
        ];
    }
    public  function beforeSave($insert) {
        parent::beforeSave($insert);
        if($insert)
            $this->Activo=1;
        return true;
    }
}
