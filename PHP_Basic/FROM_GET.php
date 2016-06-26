<!DOCTYPE html>
<html lang="th">
<head>
    <title>FROM GET</title>
<head>
<body>

    <form action='#' method='GET'>
        <input type='text' name='textbox01'  />
    </form>
    <p>     
        <?php
            if(empty($_GET['textbox01'])){
                echo 'Please Input Data' ; 
            }else{
                echo $_GET['textbox01'];
            }           
        ?>
    </p>

</body>
</html>