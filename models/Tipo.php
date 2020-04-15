<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo".
 *
 * @property int $nro_tabla
 * @property string $desc_abrev
 * @property string|null $desc_item
 *
 * @property Persona[] $personas
 */
class Tipo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nro_tabla', 'desc_abrev'], 'required'],
            [['nro_tabla'], 'default', 'value' => null],
            [['nro_tabla'], 'integer'],
            [['desc_abrev'], 'string', 'max' => 4],
            [['desc_item'], 'string', 'max' => 30],
            [['nro_tabla', 'desc_abrev'], 'unique', 'targetAttribute' => ['nro_tabla', 'desc_abrev']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nro_tabla' => Yii::t('app', 'Nro Tabla'),
            'desc_abrev' => Yii::t('app', 'Desc Abrev'),
            'desc_item' => Yii::t('app', 'Desc Item'),
        ];
    }

    /**
     * Gets query for [[Personas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPersonas()
    {
        return $this->hasMany(Persona::className(), ['nro_tabla' => 'nro_tabla', 'tipo_docum' => 'desc_abrev']);
    }
}
