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
            [['matricula', 'id_curso', 'ano_ingresso'], 'integer','message'=>'Este campo só pode conter números.'],
            [['matricula'], 'unique','message'=>'Esta matrícula já existe'],
            [['nome'], 'string', 'max' => 200],
            [['nome'],'match','pattern'=>'/^([+]?[A-Za-z ]+)$/u','message'=> 'Este campo só pode conter letras.'],
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
            'matricula' => 'Matrícula',
            'nome' => 'Nome',
            'sexo' => 'Sexo',
            'id_curso' => 'Curso de Graduação',
            'ano_ingresso' => 'Ano de Ingresso',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdCurso()
    {
        return $this->hasOne(Curso::className(), ['id' => 'id_curso']);
    }
    
    public function afterFind() {
        
        $this->nome = ucwords(strtolower($this->nome));
        
        $Curso = Curso::findOne(Aluno::getIdCurso()->primaryModel->id_curso);
        
        if($Curso != NULL){
            $this->id_curso = $Curso->nome;
        }
       
        if($this->sexo == 'F'){
            $this->sexo = 'Feminino';
        }
        else if($this->sexo == 'M'){
            $this->sexo = 'Masculino';
            
        }
     
    
        parent::afterFind();
    }
    
    public function afterSave($insert, $changedAttribute)
    {
        Yii::$app->session->setFlash('meuflash','Aluno inserido com sucesso.');
        if (parent::afterSave($insert,$changedAttribute)) {

            return true;
        } else {
            return false;
        }
    }
    
}
