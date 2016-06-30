<?php
    
    /*$string = 'XYZ';
    if (eregi('z', $string)) {
        echo "'$string' contains a 'z' or 'Z'!";
    }
*/
    if(eregi('Fun_Eregi.php',$_SERVER['PHP_SELF'])){
        //echo $_SERVER['PHP_SELF'];
        header('Location: http://www.google.com/');
    }
        
?>