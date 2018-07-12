<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_oficiales".
 *
 * @property int $id_oficial
 * @property string $uddi
 * @property string $txt_nombre_usuario
 * @property string $txt_contrasena
 * @property string $fch_creacion
 * @property string $txt_oisa
 * @property string $txt_nombre
 * @property string $txt_apellido_paterno
 * @property string $txt_apellido_materno
 * @property string $txt_rol
 * @property string $txt_clave_tea
 * @property string $txt_curp
 * @property string $txt_rfc
 * @property int $b_habilitado
 *
 * @property TmpSesionesOficilaes $tmpSesionesOficilaes
 * @property WrkActasRetencion[] $wrkActasRetencions
 */
class EntOficiales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ent_oficiales';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uddi', 'txt_nombre_usuario', 'txt_contrasena', 'txt_oisa', 'txt_nombre', 'txt_apellido_paterno', 'txt_apellido_materno', 'txt_rol', 'txt_clave_tea', 'txt_curp', 'txt_rfc', 'b_habilitado'], 'required'],
            [['fch_creacion'], 'safe'],
            [['b_habilitado'], 'integer'],
            [['uddi'], 'string', 'max' => 100],
            [['txt_nombre_usuario', 'txt_contrasena', 'txt_oisa', 'txt_nombre', 'txt_apellido_paterno', 'txt_apellido_materno', 'txt_rol', 'txt_clave_tea', 'txt_curp', 'txt_rfc'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_oficial' => 'Id Oficial',
            'uddi' => 'Uddi',
            'txt_nombre_usuario' => 'Txt Nombre Usuario',
            'txt_contrasena' => 'Txt Contrasena',
            'fch_creacion' => 'Fch Creacion',
            'txt_oisa' => 'Txt Oisa',
            'txt_nombre' => 'Txt Nombre',
            'txt_apellido_paterno' => 'Txt Apellido Paterno',
            'txt_apellido_materno' => 'Txt Apellido Materno',
            'txt_rol' => 'Txt Rol',
            'txt_clave_tea' => 'Txt Clave Tea',
            'txt_curp' => 'Txt Curp',
            'txt_rfc' => 'Txt Rfc',
            'b_habilitado' => 'B Habilitado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTmpSesionesOficilaes()
    {
        return $this->hasOne(TmpSesionesOficilaes::className(), ['id_oficial' => 'id_oficial']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWrkActasRetencions()
    {
        return $this->hasMany(WrkActasRetencion::className(), ['id_oficial' => 'id_oficial']);
    }
}
