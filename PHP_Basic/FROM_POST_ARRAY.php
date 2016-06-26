<!DOCTYPE html>
<html lang="th">
<head>
    <title>FROM POST</title>
<head>
<body>

    <form action='#' method='POST'>
        <input type='text' name='textbox01[]' /> <br/>
        <input type='text' name='textbox01[]' />
        <button type='submit'>Click Me!</button>
    </form>
    <p>
        <?php
            if(empty($_POST['textbox01'])){
                echo 'Please Input Data' ; 
            }else{
                /*echo $_POST['textbox01'][0];
                echo '<hr/>' ;
                echo $_POST['textbox01'][1];*/
                foreach ($_POST['textbox01'] as $textbox01){
                    echo $textbox01.'<hr>';
                }
            }           
        ?>
     </p>   
     
</body>
</html>