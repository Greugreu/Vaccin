<?php

namespace PdoDB;

class PdoDB extends \PDO
{
    private $db = 'vaccin';
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $con; //
    private $select;
    private $execute;

    private function __construct()
    {
        try
        {
            $this->con = parent::__construct($this->getDns(), $this->user, $this->pwd);
            // pour mysql on active le cache de requête
            if($this->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql')
                $this->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
            return $this->connec;
        }
        catch(PDOException $e) {
            //On indique par email qu'on n'a plus de connection disponible
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

    public function check($reqCheck)
    {
        $reqCheck = "SELECT COUNT(*) FROM vaccin.user WHERE usermail='" . $mail . "'";
        $result = parent::prepare($reqCheck);
        $result->execute();
        $resultat = $result->fetchColumn();
        return $resultat;
    }

    public function insert($reqInsert)
    {
        $reqInsert = "INSERT INTO vaccin.user
                    (usermail, userpass) 
                    VALUES ('" . $mail . "', '" . $mdp . "')";
        $result = parent::prepare($reqInsert);
        $result->execute();
    }
}
