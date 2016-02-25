<?php
    $posts = [
                [ 
                  "profile" => "http://cdn.devilsworkshop.org/files/2013/01/enlarged-facebook-profile-picture.jpg",
                  "name" => "Theressa.W", 
                  "place" => "East River Park",
                    "city" => "Brooklyn, NY",
                    "placepic" => "https://upload.wikimedia.org/wikipedia/commons/e/ef/East_River_Park_in_Fall_2008_number_3.jpg"
                ],
        
                [
                    "profile" => "https://www.engineering.cornell.edu/engineering2/customcf/iws_ai_faculty_display/ai_images/caa238-profile.jpg",
                    "name" => "Nina M.",
                  "place" => "Rubirosa",
                    "city" => "New York, NY"
                ],
        [ 
             "profile" => "https://www.engineering.cornell.edu/engineering2/customcf/iws_ai_faculty_display/ai_images/caa238-profile.jpg",
            "name" => "Sean B.",
                  "place" => "Blue Bottle Coffee",
                    "city" => "South of Market, San Fransisco"
                ],
               [ 
                    "profile" => "https://www.engineering.cornell.edu/engineering2/customcf/iws_ai_faculty_display/ai_images/caa238-profile.jpg",
                   "name" => "Mika A.",
                  "place" => "Land's Workout",
                    "city" => "San Fransisco"
                ]
             ];
    
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<link href="../css/reset.css" style="text/css" link rel="stylesheet">
<link href="../css/taak1.css" style="text/css" link rel="stylesheet">
<body>
    <header><?php include_once("header.inc.php") ?></header>
    <section class="timeline">
        <?php foreach( $posts as $post ): ?>
        <article>
            <div>
                <img src="<?php echo $post['profile'] ?>" alt="<?php echo $post['name'] ?>">
            </div>
            
            <div>
                <h3><?php echo $post['name'] ?></h3>
                <div id="place"><?php echo $post['place'] ?></div>
                <div><?php echo $post['city'] ?></div>
                <?php if(!empty ($post['placepic'])){
                    echo '<img src="'.$post['placepic'].'">';
                } ?>
                
            </div>
        </article>
        <?php endforeach; ?>
    </section>
    <footer><?php include_once("footer.inc.php") ?></footer>
   
</body>
</html>