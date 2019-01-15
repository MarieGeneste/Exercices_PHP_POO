<?php

class Personne
{
  private $nom;

  public function getNom()
  {
    return $this->nom;
  }
  public function setNom($paraNom)
  {
    $this->nom = $paraNom;
  }
}
