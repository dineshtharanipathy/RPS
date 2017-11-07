<?php

namespace Ebay\Game;


interface GameInterface {
    
    
    static public function getAllowedValues();
    
    /**
     * Should return the human readable rules for the game 
     */
    public function rules();
    
    /**
     * Should start playing the game 
     */
    public function play();
    
    /**
     *Should return the result of the played game 
     */
    public function result();
}
