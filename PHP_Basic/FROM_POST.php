<!DOCTYPE html>
<html lang="th">
<head>
    <title>FROM POST</title>
<head>
<body>

    <form action='#' method='POST'>
                <input type='text' name='textbox01'  />
    </form>
    <p>
        <?php
            if(empty($_POST['textbox01'])){
                echo 'Please Input Data' ; 
            }else{
                echo $_POST['textbox01'];
            }           
        ?>
     </p>   
     
</body>
</html>