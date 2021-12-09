<?php

class Operation{
    
    private $nbr1;
    private $nbr2;
    private $choix;

    
    public function __construct(float $nbr1, float $nbr2, string $choix)
    {
        $this->nbr1 = $nbr1;
        $this->nbr2 = $nbr2;
        $this->choix = $choix;
    }

    public function addition():float{
        
        return $result = $this->nbr1 + $this->nbr2;    
    }

    public function soustraction():float {
        
        return $result = $this->nbr1 - $this->nbr2;    
    }
    
    public function division():float{
        
        return $result = $this->nbr1 / $this->nbr2;
    }

    public function multiplication():float{
        
        return $result = $this->nbr1 * $this->nbr2;
    }

    public function getErrors(): bool{

        if($this->choix == 'div' && $this->nbr2 == 0){
            return true;
        }else{
            return false;
        }
    }
}

