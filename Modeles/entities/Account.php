<?php

declare(strict_types=1);
  class Account{
                        protected $id;
                        protected $name;
                        protected $olde;



public function __construct(array $data){

$this->hydrate($data);


  }

    /**
     * @param array $data
     */
    public function hydrate(array $data)
    {

  foreach ($data as $key => $value)
      {

        $method = 'set' . ucfirst($key);
        if (method_exists($this, $method))

        {
          $this->$method($value);

        }

      }
    }



// fonction pour ajouter de l'argent

public function addMoney($money){
  $this->money += $money;
}

    /**
     * Get the value of Id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of Id
     *
     * @param mixed id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of Name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of Name
     *
     * @param mixed name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of Solde
     *
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of Solde
     *
     * @param mixed solde
     *
     * @return self
     */
    public function setSOlde($solde)
    {
      $solde = (int) $solde;

        $this->solde = $solde;

        return $this;
    }

}
