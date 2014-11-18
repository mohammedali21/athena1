<?php
class MembreManager{
    //Déclaration des attributs
    private $db;
    //Constructeur
    public function __construct(PDO $db)
    {
        $this->db = $db;
    }


    //Méthode de connexion du membre
    public function connexion($login, $mdp)
    {
        //On prépare la requête
        $q = $this->db->prepare('SELECT * FROM membre WHERE LOWER(login)=:login');
        //On remplace les valeurs
        $q->bindValue('login', strtolower($login), PDO::PARAM_STR);
        //execution de la requête
        $q->execute();
        $membre = $q->fetch(PDO::FETCH_ASSOC);
        //Si les mots de passe ne correspondent pas
        if ($membre['pass'] != $mdp)
            return false;
        else
        {//sinon
            //On sélectionne le type d'user
            return new Membre($membre);
        }
    }
    //Méthode de mise à jour du membre
    public function updateMembre($membre)
    {
        //On écrit la requête
        $q = $this->db->prepare('UPDATE membre
						   SET login=:login, pass=:pass, email=:email, sexe=:sexe, loca=:loca, type=:type, urlPhoto=:urlPhoto, description=:description, dateN=:dateN, dateCo=:dateCo, newsletter=:newsletter, notification=:notification
						   WHERE id=:id');
        //On attribue les valeurs
        $q->bindValue('login', $membre->login(), PDO::PARAM_STR);
        $q->bindValue('pass', $membre->pass());
        $q->bindValue('email', $membre->email(), PDO::PARAM_STR);

        //On exécute la requête
        $result = $q->execute();

        return $result;

    }
    //Récupère la liste des membres
    public function getList()
    {
        $membres = array();
        $q = $this->db->prepare('SELECT * FROM membre ORDER BY login');
        $q->execute();
        while($infos = $q->fetch(PDO::FETCH_ASSOC))
        {
            switch($infos['type'])
            {
                case 'utilisateur': $membres[] = new Utilisateur($infos); break;
                case 'moderateur': $membres[] = new Moderateur($infos); break;
                case 'administrateur': $membres[]= new Administrateur($infos); break;
                case 'superadmin' : $membres[] = new SuperAdmin($infos); break;

            }
        }
        return $membres;
    }
    //Récupère le membre dont l'id vaut $id
    public function getId($id)
    {
        $id = (int) $id;
        if (is_int($id))
        {
            $q = $this->db->prepare('SELECT * FROM membre WHERE id=:id');
            $q->bindValue('id', $id, PDO::PARAM_INT);
            $q->execute();
            $membre = $q->fetch(PDO::FETCH_ASSOC);
            switch($membre['type'])
            {
                case 'utilisateur': return new Utilisateur($membre);break;
                case 'moderateur' : return new Moderateur($membre);break;
                case 'administrateur':return new Administrateur($membre);break;
                case 'superadmin':return new SuperAdmin($membre);break;
                default: return null;
            }
        }
    }
    //Compte le nombre de membre dont l'id correspond à $id
    public function countId($id)
    {
        if (is_int($id))
        {
            $q = $this->db->prepare('SELECT COUNT(id) FROM membre WHERE id=:id');
            $q->bindValue('id', $id, PDO::PARAM_INT);
            $q->execute();

            return $q->fetchColumn();
        }

    }
    //Compte le nombre de membre
    public function countMembre()
    {
        $q = $this->db->query('SELECT COUNT(*) FROM membre');
        return $q->fetchColumn();
    }

    //Sélectionne un pseudo en fonction de sa conversion en md5
    public function getLogin($login)
    {
        $q = $this->db->query('SELECT id FROM membre WHERE md5(login)="'.$login.'"');
        $login = $q->fetch(PDO::FETCH_ASSOC);
        $id = $login['id'];
        return $id;
    }


}
