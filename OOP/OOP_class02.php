<?php
    /* Create Class Human 
    * add properties nickname
    * add method showNickName have role return properties nickname 
    */
    class Human{
        var $nickname = 'ruk' ;
        function showNickName(){
            return $this->nickname;
        }
    }
    // Create object name wisit
    $wisit = new Human();
    // Update Properties nickname
    $wisit->nickname = 'RUK';
    // Display NickName 
    echo 'NickName is ' . $wisit->showNickName();

?>