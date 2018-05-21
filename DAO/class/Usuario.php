<?php
class Usuario
{

    
    private $usuarioId;
    private $usuarioNome;
    private $usuarioSenha;
    private $usuarioEmail;
    private $usuarioDtCadastro;

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
            $linha = $valores[0];
            $this->setUsuarioId($linha["usuario_id"]);
            $this->setUsuarioNome($linha["usuario_nome"]);
            $this->setUsuarioEmail($linha["usuario_email"]);
            $this->setUsuarioSenha($linha["usuario_senha"]);
            $this->setUsuarioDtCadastro(new DateTime($linha["usuario_dt_cadastro"]));
        }
    }

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

    #endregion
}

?>