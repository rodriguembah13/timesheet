<?php

namespace Ballack\TimeSheetBundle\Util;

class DictionaryProjet {
   private $projet;
    private $nbreHeureTravaille;
    private $allNbreHeureTravaille;
    public function getProjet() {
        return $this->projet;
    }

    public function setProjet($projet) {
        $this->projet = $projet;

        return $this;
    }

    public function getNbreHeureTravaille() {
        return $this->nbreHeureTravaille;
    }

    public function setNbreHeureTravaille($nbreHeureTravaille) {
        $this->nbreHeureTravaille = $nbreHeureTravaille;

        return $this;
    }

    public function getAllNbreHeureTravaille() {
        return $this->allNbreHeureTravaille;
    }

    public function setAllNbreHeureTravaille($allNbreHeureTravaille) {
        $this->allNbreHeureTravaille = $allNbreHeureTravaille;

        return $this;
    }
}