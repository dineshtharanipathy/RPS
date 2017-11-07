<?php

namespace Ebay\Game;
use Ebay\User\User;

interface TwoPlayerInterface {

    
    /**
     * sets player 1 
     */
    public function setPlayerOne(User $user);
    
    /**
     * Gets player 1 
     */
    public function getPlayerOne();
    
    /**
     * Sets player 2 
     */
    public function setPlayerTwo(User $user);
    
    /**
     * Gets player 2 
     */
    public function getPlayerTwo();
}
