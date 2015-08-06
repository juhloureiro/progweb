<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id
 * @property string $login
 * @property string $senha
 * @property string $nome
 * @property string $email
 * @property string $pagina
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id','login','senha','nome','email'], 'required', 'message'=>'Campo obrigatório.'],
            [['id'], 'integer', 'message'=>'ID só pode conter números.'],
            [['login'], 'string', 'max' => 20],
            [['senha'], 'string', 'max' => 128],
            
            [['nome'],'match','pattern'=>'/^[A-Za-z]+$/u','message'=> 'Nome só pode conter letras.'],
            [['nome', 'pagina'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 100],
            [['email'],'email','message'=>'Email incorreto.'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'senha' => 'Senha',
            'nome' => 'Nome',
            'email' => 'Email',
            'pagina' => 'Página',
        ];
    }
    
public function beforeDelete(){
    if($this->is_required=='no'){
         $this->Session->setFlash('dkdkd');
        return true;
    }
    return false;
}
    
    
}
