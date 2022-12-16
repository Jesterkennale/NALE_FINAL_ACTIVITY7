<?php

    include_once("config.php");
    echo"<font color='blue'> The added value is : ".$_POST['author'].'<br>';
    echo"<font color='blue'> The added value is : ".$_POST['quote'].'<br>';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Add Script</title>
    <link href='css/styles.css' type='text/css' rel='stylesheet'/>
</head>
<body>
<?php 
   if( isset($_POST['Submit']))
   {
        $author = mysqli_real_escape_string($mysqli, $_POST['author']);
        $quote = mysqli_real_escape_string($mysqli, $_POST['quote']);
        

        if( empty($author) || empty($quote)) 
        {
            if(empty($author))
            {
                echo "<font color='red'> Author field is empty. </font> <br>";
            }

            if(empty($quote))
            {   
                echo "<font color='red'> Quote field is empty. </font> <br>";
            } 

            echo "<br><a href ='javascript:self.history.back();'>Go Back </a>";
        }
        else
        {
            $result = mysqli_query($mysqli, "INSERT INTO fam_quotes(author, quote) VALUES ('$author', '$quote')");
            echo "<font color=green'> Data Added Successfully.";
            echo "<br> <a href='index.php'> Show Result </a>"; 
        
        }
   }
?> 
</body>
</html>