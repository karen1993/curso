<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "destinatarios".
 *
 * @property int $id_destinatario
 * @property string|null $domicilio
 * @property string|null $telefono
 * @property string|null $email
 * @property string|null $contacto
 * @property int|null $id_pext
 * @property string|null $descripcion
 * @property resource|null $aval
 * @property string|null $id_pais
 * @property int|null $id_provincia
 * @property int|null $id_localidad
 * @property int|null $cantidad
 *
 * @property Pextension $pext
 */
class Destinatarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'destinatarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['domicilio', 'telefono', 'email', 'contacto', 'descripcion', 'aval'], 'string'],
            [['id_pext', 'id_provincia', 'id_localidad', 'cantidad'], 'default', 'value' => null],
            [['id_pext', 'id_provincia', 'id_localidad', 'cantidad'], 'integer'],
            [['id_pais'], 'string', 'max' => 2],
            [['id_pext'], 'exist', 'skipOnError' => true, 'targetClass' => Pextension::className(), 'targetAttribute' => ['id_pext' => 'id_pext']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_destinatario' => Yii::t('app', 'Id Destinatario'),
            'domicilio' => Yii::t('app', 'Domicilio'),
            'telefono' => Yii::t('app', 'Telefono'),
            'email' => Yii::t('app', 'Email'),
            'contacto' => Yii::t('app', 'Contacto'),
            'id_pext' => Yii::t('app', 'Id Pext'),
            'descripcion' => Yii::t('app', 'Descripcion'),
            'aval' => Yii::t('app', 'Aval'),
            'id_pais' => Yii::t('app', 'Id Pais'),
            'id_provincia' => Yii::t('app', 'Id Provincia'),
            'id_localidad' => Yii::t('app', 'Id Localidad'),
            'cantidad' => Yii::t('app', 'Cantidad'),
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
