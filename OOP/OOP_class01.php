<?php
    /* Create Class Human 
     * add method showNickName have role Display text 'Hello Human'
     */
    class Human{
        function sayHello(){
            echo 'Hello Human';
        }
    }
    // Create Object name is myClass01 from Class Human
    $myClass01 = new Human();
    // GetMethod satHello from object myClass01
    $myClass01->sayHello();

?>