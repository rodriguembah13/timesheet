<?php

namespace Ballack\TimeSheetBundle\Util;
use DateInterval;
class Util{
    function to_seconds($diff) {
        return  ($diff->y * 365 * 24 * 60 * 60) +
        ($diff->m * 30 * 24 * 60 * 60) +
        ($diff->d * 24 * 60 * 60) +
        ($diff->h * 60 * 60) +
        $diff->s;
    }
    function NbJours($debut, $fin)
    {//Nombre de jour entre 2 date
        $nbreJours= $this->to_seconds($fin->diff($debut));
        return ($nbreJours/3600)*24;
    }
    function NbJoursNonOuvrable($debut,$fin){
        $nb=0;
    while($debut<$fin){
        $temp=date('D',$debut->getTimestamp());
        if($temp=="Sat"||$temp=="Sun"){
            $nb+=1;
          $debut= $this->incrementerDate($debut);

        }else{;
            $nb+=0;
            $debut= $this->incrementerDate($debut);
        }
    }
        return $nb;
    }
   function incrementerDate($date) {
       $interval = new DateInterval('P1D');
       return date_add($date,$interval);
   }

}