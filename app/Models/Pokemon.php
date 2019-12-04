<?php

class Pokemon {
    private $id;
    private $nom;
    private $pv;
    private $attaque;
    private $defense;
    private $attaqueSpe;
    private $defenseSpe;
    private $vitesse;
    private $numero;

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of pv
     */ 
    public function getPv()
    {
        return $this->pv;
    }

    /**
     * Set the value of pv
     *
     * @return  self
     */ 
    public function setPv($pv)
    {
        $this->pv = $pv;

        return $this;
    }

    /**
     * Get the value of attaque
     */ 
    public function getAttaque()
    {
        return $this->attaque;
    }

    /**
     * Set the value of attaque
     *
     * @return  self
     */ 
    public function setAttaque($attaque)
    {
        $this->attaque = $attaque;

        return $this;
    }

    /**
     * Get the value of defense
     */ 
    public function getDefense()
    {
        return $this->defense;
    }

    /**
     * Set the value of defense
     *
     * @return  self
     */ 
    public function setDefense($defense)
    {
        $this->defense = $defense;

        return $this;
    }

    /**
     * Get the value of attaqueSpe
     */ 
    public function getAttaqueSpe()
    {
        return $this->attaqueSpe;
    }

    /**
     * Set the value of attaqueSpe
     *
     * @return  self
     */ 
    public function setAttaqueSpe($attaqueSpe)
    {
        $this->attaqueSpe = $attaqueSpe;

        return $this;
    }

    /**
     * Get the value of defenseSpe
     */ 
    public function getDefenseSpe()
    {
        return $this->defenseSpe;
    }

    /**
     * Set the value of defenseSpe
     *
     * @return  self
     */ 
    public function setDefenseSpe($defenseSpe)
    {
        $this->defenseSpe = $defenseSpe;

        return $this;
    }

    /**
     * Get the value of vitesse
     */ 
    public function getVitesse()
    {
        return $this->vitesse;
    }

    /**
     * Set the value of vitesse
     *
     * @return  self
     */ 
    public function setVitesse($vitesse)
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }
}