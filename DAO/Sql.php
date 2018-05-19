<?php

class Sql extends PDO{

    private $conn;
    protected $server = "mysql785.umbler.com:41890";
    protected $user = "cursophp";
    protected $pass = "rcp924822";
    protected $database = "cursophp";

    public function __construct()
    {
        $this->conn = new PDO("mysql:dbname=$this->database;host=$this->server", $this->user, $this->pass);
    }

    //Recebe a lista de parametros para setar e fazer o bind
    private function setParams($statment, $parameters = array())
    {
        foreach ($parameters as $key => $value) {
            setParam($key, $value);
        }
    }

    //Seta cada parametro
    private function setParam($statment, $key, $value)
    {
        $statment->bindParam($key, $value);
    }

    //Metodo para construir a query e setar os parametros
    public function query($rawQuery, $params = array())
    {
        $sql = $this->conn->prepare($rawQuery);
        $this->setParams($rawQuery, $params);
        $sql->execute();
        return $sql;

    }


    //Metodo para rodar Selects, retorna um array
    public function select($rawQuery, $params = array()):?array
    {
        $sql = $this->query($rawQuery, $params);

        return $sql->fetchAll(PDO::FETCH_ASSOC);

    }

}

?>