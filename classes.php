<?php
class Habitation
{
    public $pays = 'France';
    public $ville = "hirson";
    public $codepostal = '02500';
    public $chambres ='2';
    public $pieces = '5';

    /**
     * @return string
     */
    public function getPays(): string
    {
        return $this->pays;
    }

    /**
     * @return string
     */
    public function getVille(): string
    {
        return $this->ville;
    }

    /**
     * @return string
     */
    public function getCodepostal(): string
    {
        return $this->codepostal;
    }

    /**
     * @return string
     */
    public function getChambres(): string
    {
        return $this->chambres;
    }

    /**
     * @return string
     */
    public function getPieces(): string
    {
        return $this->pieces;
    }

    /**
     * @param string $pays
     */
    public function setPays(string $pays): void
    {
        $this->pays = $pays;
    }

    /**
     * @param string $ville
     */
    public function setVille(string $ville): void
    {
        $this->ville = $ville;
    }

    /**
     * @param string $codepostal
     */
    public function setCodepostal(string $codepostal): void
    {
        $this->codepostal = $codepostal;
    }

    /**
     * @param string $chambres
     */
    public function setChambres(string $chambres): void
    {
        $this->chambres = $chambres;
    }

    /**
     * @param string $pieces
     */
    public function setPieces(string $pieces): void
    {
        $this->pieces = $pieces;
    }

}

class Maison extends Habitation
{
    public $jardin = true;
    public $etages = 2;
    public $garage = true;

    /**
     * @return bool
     */
    public function isJardin(): bool
    {
        return $this->jardin;
    }

    /**
     * @return int
     */
    public function getEtages(): int
    {
        return $this->etages;
    }

    /**
     * @return bool
     */
    public function isGarage(): bool
    {
        return $this->garage;
    }

    /**
     * @param bool $jardin
     */
    public function setJardin(bool $jardin): void
    {
        $this->jardin = $jardin;
    }

    /**
     * @param int $etages
     */
    public function setEtages(int $etages): void
    {
        $this->etages = $etages;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }

}

class Appartement extends Habitation
{
   public $garage = false;

    /**
     * @return bool
     */
    public function isGarage(): bool
    {
        return $this->garage;
    }

    /**
     * @param bool $garage
     */
    public function setGarage(bool $garage): void
    {
        $this->garage = $garage;
    }


}