<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AuxiliairedevieRepository")
 */
class Auxiliairedevie
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom;

    /**
     * @ORM\Column(type="text")
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $employeur;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Employeur", mappedBy="auxiliaires")
     */
    private $employeurs;

    public function __construct()
    {
        $this->employeurs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getEmployeur(): ?string
    {
        return $this->employeur;
    }

    public function setEmployeur(string $employeur): self
    {
        $this->employeur = $employeur;

        return $this;
    }

    /**
     * @return Collection|Employeur[]
     */
    public function getEmployeurs(): Collection
    {
        return $this->employeurs;
    }

    public function addEmployeur(Employeur $employeur): self
    {
        if (!$this->employeurs->contains($employeur)) {
            $this->employeurs[] = $employeur;
            $employeur->addAuxiliaire($this);
        }

        return $this;
    }

    public function removeEmployeur(Employeur $employeur): self
    {
        if ($this->employeurs->contains($employeur)) {
            $this->employeurs->removeElement($employeur);
            $employeur->removeAuxiliaire($this);
        }

        return $this;
    }
}
