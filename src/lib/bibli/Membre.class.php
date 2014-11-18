<?php
class Membre{
    //Attributs
    protected $id;
    protected $login;
    protected $pass;
    protected $email;

    //Getters
    public function id(){return $this->id;}
    public function login(){return $this->login;}
    public function pass(){return $this->pass;}
    public function email(){return $this->email;}

    //Setters

    public function setId($id)
    {
        $id = (int) $id;
        if($id>0)
            $this->id = $id;
    }
    public function setLogin($login)
    {
        if (is_string($login))
            $this->login = $login;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    //Constructeur
    public function __construct(array $membre)
    {
        $this->hydrate($membre);
        $this->type = strtolower(get_class($this));
    }
    //Méthode d'instanciation
    public function hydrate(array $membre)
    {
        foreach($membre as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
    //Méthodes générales


}
