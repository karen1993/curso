<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "seguimiento_central".
 *
 * @property int $id_seguimiento
 * @property string|null $observacion_avance
 * @property string|null $observacion_final
 * @property string|null $num_acta_avance
 * @property string|null $num_acta_final
 * @property string|null $resolucion_pago
 * @property string|null $fecha_inf_avance
 * @property string|null $fecha_evaluacion_avance
 * @property string|null $dictamen
 * @property string|null $fecha_inf_final
 * @property string|null $fecha_evaluacion_final
 * @property string|null $informe_avance
 * @property string|null $informe_final
 * @property string|null $rendicion
 * @property string|null $estado_rendicion
 * @property string|null $num_acta
 * @property string|null $num_acta_prorroga
 * @property bool|null $prorrogar
 * @property string|null $estado_prorroga
 * @property string|null $observacion_prorroga
 * @property int $id_pext
 * @property string|null $res_rect
 * @property string|null $nro_ord_cs
 * @property string|null $codigo
 * @property string|null $estado_informe_a
 * @property string|null $estado_informe_f
 * @property float|null $rendicion_monto
 * @property string|null $fecha_rendicion
 * @property string|null $fecha_prorroga1
 * @property string|null $fecha_prorroga2
 * @property string|null $res_desig
 * @property string|null $informe_becario
 * @property string|null $nro_expediente_pago
 * @property string|null $fecha_informe_becario
 * @property string|null $nro_acta_informe_becario
 * @property string|null $estado_becario
 *
 * @property Pextension $pext
 */
class SeguimientoCentral extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'seguimiento_central';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['observacion_avance', 'observacion_final', 'dictamen', 'informe_avance', 'informe_final', 'rendicion', 'observacion_prorroga', 'codigo', 'informe_becario'], 'string'],
            [['fecha_inf_avance', 'fecha_evaluacion_avance', 'fecha_inf_final', 'fecha_evaluacion_final', 'fecha_rendicion', 'fecha_prorroga1', 'fecha_prorroga2', 'fecha_informe_becario'], 'safe'],
            [['prorrogar'], 'boolean'],
            [['id_pext'], 'required'],
            [['id_pext'], 'default', 'value' => null],
            [['id_pext'], 'integer'],
            [['rendicion_monto'], 'number'],
            [['num_acta_avance', 'num_acta_final', 'resolucion_pago', 'num_acta', 'num_acta_prorroga', 'res_rect', 'nro_ord_cs', 'res_desig', 'nro_expediente_pago', 'nro_acta_informe_becario'], 'string', 'max' => 20],
            [['estado_rendicion', 'estado_prorroga', 'estado_informe_a', 'estado_informe_f', 'estado_becario'], 'string', 'max' => 1],
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
            'observacion_avance' => Yii::t('app', 'Observacion Avance'),
            'observacion_final' => Yii::t('app', 'Observacion Final'),
            'num_acta_avance' => Yii::t('app', 'Num Acta Avance'),
            'num_acta_final' => Yii::t('app', 'Num Acta Final'),
            'resolucion_pago' => Yii::t('app', 'Resolucion Pago'),
            'fecha_inf_avance' => Yii::t('app', 'Fecha Inf Avance'),
            'fecha_evaluacion_avance' => Yii::t('app', 'Fecha Evaluacion Avance'),
            'dictamen' => Yii::t('app', 'Dictamen'),
            'fecha_inf_final' => Yii::t('app', 'Fecha Inf Final'),
            'fecha_evaluacion_final' => Yii::t('app', 'Fecha Evaluacion Final'),
            'informe_avance' => Yii::t('app', 'Informe Avance'),
            'informe_final' => Yii::t('app', 'Informe Final'),
            'rendicion' => Yii::t('app', 'Rendicion'),
            'estado_rendicion' => Yii::t('app', 'Estado Rendicion'),
            'num_acta' => Yii::t('app', 'Num Acta'),
            'num_acta_prorroga' => Yii::t('app', 'Num Acta Prorroga'),
            'prorrogar' => Yii::t('app', 'Prorrogar'),
            'estado_prorroga' => Yii::t('app', 'Estado Prorroga'),
            'observacion_prorroga' => Yii::t('app', 'Observacion Prorroga'),
            'id_pext' => Yii::t('app', 'Id Pext'),
            'res_rect' => Yii::t('app', 'Res Rect'),
            'nro_ord_cs' => Yii::t('app', 'Nro Ord Cs'),
            'codigo' => Yii::t('app', 'Codigo'),
            'estado_informe_a' => Yii::t('app', 'Estado Informe A'),
            'estado_informe_f' => Yii::t('app', 'Estado Informe F'),
            'rendicion_monto' => Yii::t('app', 'Rendicion Monto'),
            'fecha_rendicion' => Yii::t('app', 'Fecha Rendicion'),
            'fecha_prorroga1' => Yii::t('app', 'Fecha Prorroga1'),
            'fecha_prorroga2' => Yii::t('app', 'Fecha Prorroga2'),
            'res_desig' => Yii::t('app', 'Res Desig'),
            'informe_becario' => Yii::t('app', 'Informe Becario'),
            'nro_expediente_pago' => Yii::t('app', 'Nro Expediente Pago'),
            'fecha_informe_becario' => Yii::t('app', 'Fecha Informe Becario'),
            'nro_acta_informe_becario' => Yii::t('app', 'Nro Acta Informe Becario'),
            'estado_becario' => Yii::t('app', 'Estado Becario'),
        ];
    }

    /**
     * Gets query for [[Pext]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPext()
    {
        return $this->hasOne(Pextension::className(), ['id_pext' => 'id_pext']);
    }
}
