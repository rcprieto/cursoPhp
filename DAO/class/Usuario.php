<?php
class Usuario
{

    
    private $usuarioId;
    private $usuarioNome;
    private $usuarioSenha;
    private $usuarioEmail;
    private $usuarioDtCadastro;
    private $mensagemErro;

    #region --getter and setters

    public function getUsuarioId()
    {
        return $this->usuarioId;
    }

    public function setUsuarioId($usuarioId)
    {
        $this->usuarioId = $usuarioId;

    }


    public function getUsuarioNome()
    {
        return $this->usuarioNome;
    }

    public function setUsuarioNome($usuarioNome)
    {
        $this->usuarioNome = $usuarioNome;
    }

    public function getUsuarioSenha()
    {
        return $this->usuarioSenha;
    }


    public function setUsuarioSenha($usuarioSenha)
    {
        $this->usuarioSenha = $usuarioSenha;
    }

    public function getUsuarioEmail()
    {
        return $this->usuarioEmail;
    }

    public function setUsuarioEmail($usuarioEmail)
    {
        $this->usuarioEmail = $usuarioEmail;
    }


    public function getUsuarioDtCadastro()
    {
        return $this->usuarioDtCadastro;
    }

    public function setUsuarioDtCadastro($usuarioDtCadastro)
    {
        $this->usuarioDtCadastro = $usuarioDtCadastro;

    }

    public function getMensagemErro()
    {
        return $this->mensagemErro;
    }


    public function setMensagemErro($mensagemErro)
    {
        $this->mensagemErro = $mensagemErro;
        
    }
    #endregion

    #region Métodos
    public function getById($id)
    {
        $sql = new Sql();
        $valores = $sql->select("select * from tb_usuario where usuario_id = :ID", array(
            ":ID"=>$id
        ));

        if(count($valores) > 0)
        {
            $this->setData($valores[0]);
        }
    }

    //Override do tostring volta um json
    public function __toString()
    {
        return json_encode(array(
            "usuario_id"=>$this->getUsuarioId(),
            "usuario_nome"=>$this->getUsuarioNome(),
            "usuario_senha"=>$this->getUsuarioSenha(),
            "usuario_email"=>$this->getUsuarioEmail(),
            "usuario_dt_cadastro"=>$this->getUsuarioDtCadastro()->format("d/m/Y H:i:s")
        ));
    }

    public function __construct($nome = "", $email = "", $senha = "")
    {
        $this->setUsuarioNome($nome);
        $this->setUsuarioEmail($email);
        $this->setUsuarioSenha($senha);
    }

    //Como não usa a palavra this da pra ser estatico
    public static function getList()
    {
        $sql = new Sql();
        return $sql->select("select * from tb_usuario order by usuario_nome");       
    }

    public static function buscarPorEmail($email)
    {
        $sql = new Sql();
        return $sql->select("select * from tb_usuario where upper(usuario_email) like :BUSCA order by usuario_nome", 
        array(
            ":BUSCA"=>"%".strtoupper($email)."%"));

    }


    public function login($email, $pass)
    {
        $sql = new Sql();
        $valores = $sql->select("select * from tb_usuario where upper(usuario_email) = :EMAIL and usuario_senha = :SENHA", array(
            ":EMAIL"=>strtoupper($email),
            ":SENHA"=>$pass
        ));

        if(count($valores) > 0)
        {
            setData($valores[0]);
        }
        else{
            throw new Exception("Login e/ou Senha inválidos!");
        }
    }

    public function setData($data)
    {
        $this->setUsuarioId($data["usuario_id"]);
        $this->setUsuarioNome($data["usuario_nome"]);
        $this->setUsuarioEmail($data["usuario_email"]);
        $this->setUsuarioDtCadastro(new DateTime($data["usuario_dt_cadastro"]));
    }


    public function insert():bool
    {
        $sql = new Sql();

        //VIA PROCEDURE
        // $valores = $sql->select("CALL sp_usuario_insert( :NOME,
        // :SENHA,
        // :EMAIL)",
        // array(
        //     ":NOME"=>$this->getUsuarioNome(),
        //     ":SENHA"=>$this->getUsuarioSenha(),
        //     ":EMAIL"=>$this->getUsuarioEmail()
        // ));

         // if(count($valores)>0)
        // {
        //     $this->setData($valores[0]);
        // }


        //VIA QUERY 
        $retorno = $sql->queryInsert("insert into tb_usuario
        (
        usuario_nome,
        usuario_senha,
        usuario_email)
        VALUES(
        :NOME,
        :SENHA,
        :EMAIL)",
        array(
               ":NOME"=>$this->getUsuarioNome(),
              ":SENHA"=>$this->getUsuarioSenha(),
                ":EMAIL"=>$this->getUsuarioEmail()
        ));

        if(is_numeric($retorno))
        {
            $this->setMensagemErro(null);
            $this->setUsuarioId($retorno);
            return true;
        }
        else{
            $this->setMensagemErro($retorno);
            return false;
        }

    }

    public function update($id, $nome, $senha):bool
    {

        $sql = new Sql();
        $retorno = $sql->queryUpdate("update tb_usuario set 
        usuario_nome = :NOME, 
          usuario_senha = :SENHA 
          where usuario_id = :ID",  array(
            ":NOME"=>$nome,
            ":SENHA"=>$senha,
            ":ID"=>$id
        ));
        
        //SE FOR ARRAY É PORQUE TEM MENSAGEM DE ERRO
        if(!is_array($retorno))
        {
            $this->setMensagemErro(null);
            return true;
        }
        else{
            $this->setMensagemErro($retorno);
            return false;
        }
       
    }


    public function delete():bool
    {
        $sql = new Sql();
        $retorno = $sql->queryUpdate("delete from tb_usuario 
          where usuario_id = :ID",  array(
            ":ID"=>$this->getUsuarioId()
        ));
        
        //SE FOR ARRAY É PORQUE TEM MENSAGEM DE ERRO
        if(!is_array($retorno))
        {
            $this->setMensagemErro(null);
            return true;
        }
        else{
            $this->setMensagemErro($retorno);
            return false;
        }
    }


    #endregion

   
}

?>