<?php
namespace Ebay\User;


interface MachineInterface {

    
    public function setAllowedValues(array $allowedValue);
    
    /**
     * Get the vlaue the computer has chosen 
     */
    public function getUserValue();
    
    /**
     * get the allowed values
     *  
     */
    public function getAllowedValues();
}
