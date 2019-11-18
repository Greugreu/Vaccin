<?php
namespace PdoDB;

class PdoDB {
    private $login;
    private $pass;
    private $connec;

    public function __construct($db, $login='root', $pass='')
{
    $this->login = $login;
    $this->pass = $pass;
    $this->db = $db;
    $this->connexion();
}

private function connexion() {
        try {
            $bdd = new PdoDB('mysql:host=localhost;dbname=vaccin'.$this->db, $this->login, $this->pass);
            $bdd->setAttribute(PdoDB::ATTR_ERRMODE, PdoDB::ERRMODE_WARNING);
            $bdd->setAttribute(PdoDB::ATTR_DEFAULT_FETCH_MODE, PdoDB::FETCH_OBJ);
            $this->connec = $bdd;
        }

        catch (PDOException $e){
            $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L ' . $e->getLine() . ' : ' . $e->getMessage();
            die($msg);
        }
}

public function q($sql, array $cond = null)
{
    $stmt = $this->connec->prepare($sql);

    if($cond) {
        foreach ($cond as $v) {
            $stmt->bindParam($v[0], $v[1], $v[2]);
        }
    }

    $stmt->execute();

    return $stmt->fetchAll();
    $stmt->closeCursor();
    $stmt=NULL;
}

}
