<?php

    /*class human {
        var name;
        var sex;
        var birthday;
        function setName(){

        }
        function setSex(){

        }
        function setBirthDay(){

        }
    }
    */

    /* Create Class Human 
     * add method showNickName have role Display text 'Hello Human'
     */
    class Human{
        function sayHello(){
            echo 'Hello Human';
        }
    }
    // Create Object name is myClass01 from Class Human
    new Human()->sayHello();

?>