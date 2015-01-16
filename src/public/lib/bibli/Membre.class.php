<?php

class Membre
{

    /**
     * Définition des attributs de la class membre
     */
    protected $id;
    protected $login;
    protected $email;
    protected $pass;

    /**
     * Définitions des getters
     */
    public function id()
    {
        return $this->id;
    }

    public function login()
    {
        return $this->login;
    }

    public function pass()
    {
        return $this->pass;
    }

    public function email()
    {
        return $this->email;
    }

    /**
     * Définitions des setters
     */
    public function setId($id)
    {
        $id = (int)$id;
        if ($id > 0)
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

    /**
     * Constructeur
     */
    public function __construct(array $membre)
    {
        $this->hydrate($membre);
    }

    /**
     * Méthode d'instanciation
     */
    public function hydrate(array $membre)
    {
        foreach ($membre as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * Méthodes générales
     */

}
