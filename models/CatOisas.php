<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cat_oisas".
 *
 * @property string $id_oisas
 * @property string $txt_nombre
 * @property string $txt_email
 * @property string $txt_telefono
 * @property string $txt_extension
 * @property string $txt_descripcion
 * @property int $b_habilitado
 *
 * @property ModUsuariosEntUsuarios[] $modUsuariosEntUsuarios
 */
class CatOisas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cat_oisas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txt_nombre', 'txt_email', 'txt_telefono', 'txt_descripcion'], 'required'],
            [['txt_descripcion'], 'string'],
            [['b_habilitado'], 'integer'],
            [['txt_nombre', 'txt_email'], 'string', 'max' => 100],
            [['txt_telefono', 'txt_extension'], 'string', 'max' => 10],
            [ 
                'txt_email',
                'trim' 
            ],
            ['txt_email', 'email', 'message'=>'Debe agregar un email válido'],
            // ['txt_email','validateBlocked'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_oisas' => 'Id Oisas',
            'txt_nombre' => 'Nombre',
            'txt_email' => 'Email',
            'txt_telefono' => 'Teléfono',
            'txt_extension' => 'Extensión',
            'txt_descripcion' => 'Descripción',
            'b_habilitado' => 'B Habilitado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModUsuariosEntUsuarios()
    {
        return $this->hasMany(ModUsuariosEntUsuarios::className(), ['id_oisa' => 'id_oisas']);
    }
}
