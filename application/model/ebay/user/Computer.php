<?php

namespace Ebay\User;
use Ebay\User\User;
use Ebay\User\MachineInterface;


class Computer extends User implements MachineInterface {
    
    protected $allowedValues;
    protected $userValue;
    
    
    public function setAllowedValues(array $allowedValue)
    {
        $this->allowedValues = $allowedValue;
    }
    
    
    public function getUserValue()
    {
        if(!$this->userValue){
            $randomKey = array_rand($this->getAllowedValues());
            $this->userValue = $this->allowedValues[$randomKey];
        }
        
        return $this->userValue;
    }
    
    /**
     * gets the allowed values
     * 
     * @return array
     */
    public function getAllowedValues() {
        return $this->allowedValues;
    }


}