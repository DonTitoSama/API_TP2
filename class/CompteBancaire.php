<?php
class CompteBancaire {
    private $nom;
    private $solde;

    public function __construct($nom = "Dupont", $solde = 1000) {
        $this->nom = $nom;
        $this->solde = $solde;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getSolde() {
        return $this->solde;
    }

    public function retrait($montant) {
        if ($montant > 0 && $montant <= $this->solde) {
            $this->solde -= $montant;
        } else {
            echo "Solde insuffisant";
        }
    }

    public function depot($montant) {
        if ($montant > 0) {
            $this->solde += $montant;
        }
    }

    public function affiche() {
        echo "Le solde du compte bancaire de " . $this->nom . ' est de ' . $this->solde . '€<br>';
    }

}
?>
