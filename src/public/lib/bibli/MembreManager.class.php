<?php

class MembreManager
{
    /**
     * Déclaration des attributs
     */
    private $db;

    /**
     * Constructeur
     */
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    /**
     * Méthode de vérification de l'existence du mail
     */
    public function verify_exist($email)
    {
        //On prépare la requête
        $q = $this->db->prepare('SELECT COUNT(user_login)
								 FROM user
								 WHERE LOWER(user_login)=:user_login');
        // On attribut la valeur
        $q->bindValue('user_login', strtolower($email), PDO::PARAM_STR);
        //On exécute la requête
        $q->execute();
        //On retourne la valeur
        return $q->fetchColumn();

    }

    /**
     * Méthode de connexion du membre
     */
    public function connexion($email, $mdp)
    {

        //On prépare la requête
        $q = $this->db->prepare('SELECT * FROM user WHERE LOWER(user_login)=:user_login');
        //On remplace les valeurs
        $q->bindValue('user_login', strtolower($email), PDO::PARAM_STR);
        //execution de la requête
        $q->execute();
        $membre = $q->fetch(PDO::FETCH_ASSOC);
        //Si les mots de passe ne correspondent pas
        if ($membre['user_password'] != $mdp)
            return false;
        else { //sinon
            //On renvoi la class membre
            return $membre = new Membre($membre);

        }


    }


}