<?php

namespace classes;

use PDO;

class PdoDb extends PDO
{
    private $db = 'vaccin';
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = 'root';
    private $con; //
    public $resultat;
    private $select;
    private $execute;

    public function __construct()
    {
        try
        {
            $this->con = parent::__construct($this->getDns(), $this->user, $this->pwd);
            // pour mysql on active le cache de requête
            if($this->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql')
                $this->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
            return $this->con;
        }
        catch(PDOException $e) {
            error_log(date('D/m/y').' à '.date("H:i:s").' : '.$e->getMessage(), 1, $this->email);
            $message= new Message();
            $message->outPut('Erreur 500', 'Serveur de BDD indisponible, nous nous excusons de la gêne occasionnée');
        }
    }

    public function select($reqSelect)
    {
        try
        {
            $this->con = parent::beginTransaction();
            //$result= parent::query($reqSelect);
            $result = parent::prepare($reqSelect);
            $result->execute();
            $this->con = parent::commit();
            // ou
            // $this->con = parent::rollBack();
            return $result;
        }
        catch (Exception $e)
        {
            //On indique par email que la requête n'a pas fonctionné.
            error_log(date('D/m/y').' à '.date("H:i:s").' : '.$e->getMessage(), 1, 'artotal@gmail.com');
            $this->con =parent::rollBack();
            $message= new Message();
            $message->outPut('Erreur dans la requêtte', 'Votre requête a été abandonné');
        }
    }

    public function selectTableau($reqSelect)
    {
        $result = parent::prepare($reqSelect);
        $result->execute();
        /* Récupération de toutes les lignes d'un jeu de résultats "équivalent à mysql_num_row() " */
        $resultat = $result->fetchAll();
        return $resultat;
    }

    public function getDns()
    {
        return 'mysql:dbname='.$this->db.';host='.$this->host;
    }

    public function check($mail)
    {
        $reqCheck = "SELECT COUNT(*) FROM vaccin.user WHERE usermail= $mail ";
        $result = parent::prepare($reqCheck);
        $result->execute();
        $this->resultat = $result->fetchColumn();
    }

    public function insert($mail, $mdp)
    {
        $reqInsert = "INSERT INTO user VALUES ('', :mail, :mdp)";
        $query= $this->prepare($reqInsert);
        $query->bindValue('mail', $mail, self::PARAM_STR);
        $query->bindValue('mdp', $mdp);
        $query->execute();
    }

    public function updateInfo($nom, $prenom, $adresse, $naissance, $medecin, $id)
    {
        $reqUpdate = "UPDATE vaccin.userinfo 
                    SET usernom=:nom, userprenom=:prenom, useradress=:adress, usernaissance=:naissance, usermedecin=:medecin
                    WHERE id=$id";
        $query = $this->prepare($reqUpdate);
        $query->bindValue(':nom', $nom, self::PARAM_STR);
        $query->bindValue(':prenom', $prenom, self::PARAM_STR);
        $query->bindValue(':adress', $adresse);
        $query->bindValue(':naissance', $naissance);
        $query->bindValue(':medecin', $medecin, self::PARAM_STR);
        $query->execute();

    }

    public function fetch(){
        $this->fetch();
    }
}
