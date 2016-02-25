<?php 
    $todos = [
        ["taak" => "Tuinhuis", "tijd" => 6, "categorie" => "Thuis"],
        ["taak" => "Wiskunde", "tijd" => 2,"categorie" => "School"],
        ["taak" => "Koken", "tijd" => 1,"categorie" => "Thuis"],
        ["taak" => "Inkopen doen", "tijd" => 1,"categorie" => "Thuis"],
        ["taak" => "Chemie", "tijd" => 0,"categorie" => "School"]
    ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="../css/reset.css" style="text/css" link rel="stylesheet">
    <link href="../css/taak3.css" style="text/css" link rel="stylesheet">

</head>
<body>
    <section>
        <?php foreach( $todos as $todo ):
        
        if($todo['tijd'] < 1){
            $color = "#2ba42b";
        }
        else if($todo['tijd'] > 1 && $todo['tijd'] < 5 )
        {
            $color = "#e74b26";
        }
        else if ($todo['tijd'] > 5){
            $color = "#e42a23";
        }
        ?>
        <li style="background-color:<?php echo $color ?>"><?php echo $todo['taak'];?></li>
        <?php endforeach;?>
   </section>       
</body>
</html>