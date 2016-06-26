<!DOCTYPE html>
<html lang="th">
<head>
    <title>FROM GET</title>
<head>
<body>

    <form action='#' method='GET'>
        <input type='text' name='textbox01[]' /> <br/>
        <input type='text' name='textbox01[]' />
        <input type='submit' value='Click Me!' />
    </form>
    <p>
        <?php
            if(empty($_GET['textbox01'])){
                echo 'Please Input Data' ; 
            }else{
                /*echo $_GET['textbox01'][0];
                echo '<hr/>' ;
                echo $_GET['textbox01'][1];*/
                foreach ($_GET['textbox01'] as $textbox01){
                    echo $textbox01.'<hr>';
                }
            }           
        ?>
     </p>   
     
</body>
</html>