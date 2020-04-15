<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "seguimiento_ua".
 *
 * @property int $id_seguimiento
 * @property int|null $id_pext
 * @property string|null $observacion_ua
 * @property string|null $nro_resol
 * @property string|null $fecha_resol
 * @property string|null $tipo_docum
 * @property int|null $nro_docum
 * @property string|null $desde
 *
 * @property IntegranteExternoPe $pext
 * @property Pextension $pext0
 */
class SeguimientoUa extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seguimiento_ua';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pext', 'nro_docum'], 'default', 'value' => null],
            [['id_pext', 'nro_docum'], 'integer'],
            [['observacion_ua'], 'string'],
            [['fecha_resol', 'desde'], 'safe'],
            [['nro_resol'], 'string', 'max' => 20],
            [['tipo_docum'], 'string', 'max' => 4],
            [['id_pext', 'tipo_docum', 'nro_docum', 'desde'], 'exist', 'skipOnError' => true, 'targetClass' => IntegranteExternoPe::className(), 'targetAttribute' => ['id_pext' => 'id_pext', 'tipo_docum' => 'tipo_docum', 'nro_docum' => 'nro_docum', 'desde' => 'desde']],
            [['id_pext'], 'exist', 'skipOnError' => true, 'targetClass' => Pextension::className(), 'targetAttribute' => ['id_pext' => 'id_pext']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_seguimiento' => Yii::t('app', 'Id Seguimiento'),
            'id_pext' => Yii::t('app', 'Id Pext'),
            'observacion_ua' => Yii::t('app', 'Observacion Ua'),
            'nro_resol' => Yii::t('app', 'Nro Resol'),
            'fecha_resol' => Yii::t('app', 'Fecha Resol'),
            'tipo_docum' => Yii::t('app', 'Tipo Docum'),
            'nro_docum' => Yii::t('app', 'Nro Docum'),
            'desde' => Yii::t('app', 'Desde'),
        ];
    }

    /**
     * Gets query for [[Pext]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPext()
    {
        return $this->hasOne(IntegranteExternoPe::className(), ['id_pext' => 'id_pext', 'tipo_docum' => 'tipo_docum', 'nro_docum' => 'nro_docum', 'desde' => 'desde']);
    }

    /**
     * Gets query for [[Pext0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPext0()
    {
        return $this->hasOne(Pextension::className(), ['id_pext' => 'id_pext']);
    }
}
