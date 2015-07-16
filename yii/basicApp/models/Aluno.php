<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aluno".
 *
 * @property integer $id
 * @property integer $matricula
 * @property string $nome
 * @property string $sexo
 * @property integer $id_curso
 * @property integer $ano_ingresso
 *
 * @property Curso $idCurso
 */
class Aluno extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aluno';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['matricula', 'id_curso', 'ano_ingresso'], 'integer','message'=>'Este campo só pode contar números.'],
            [['matricula'], 'unique','message'=>'Esta matrícula já existe'],
            [['nome'], 'string', 'max' => 200],
            [['nome'],'match','pattern'=>'/^[A-Za-z]+$/u','message'=> 'Este campo só pode conter letras.'],
            [['sexo'], 'string', 'max' => 1],
            [['matricula', 'id_curso', 'ano_ingresso','nome', 'sexo'],'required','message'=>'Este campo é obrigatório'],
            
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'matricula' => 'Matricula',
            'nome' => 'Nome',
            'sexo' => 'Sexo',
            'id_curso' => 'Id Curso',
            'ano_ingresso' => 'Ano Ingresso',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCurso()
    {
        return $this->hasOne(Curso::className(), ['id' => 'id_curso']);
    }
}
