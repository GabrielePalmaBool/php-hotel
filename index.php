<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Link css Bootstrap-->
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    
     <!-- Link css style-->
    <link rel="stylesheet" href="css\style.css">
 
    <title>php-hotel</title>
</head>
<body class="container" >
<?php

$hotels = [

	[
		'name' => 'Hotel Belvedere',
		'description' => 'Hotel Belvedere Descrizione',
		'parking' => true,
		'vote' => 4,
		'distance_to_center' => 10.4
	],
	[
		'name' => 'Hotel Futuro',
		'description' => 'Hotel Futuro Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 2
	],
	[
		'name' => 'Hotel Rivamare',
		'description' => 'Hotel Rivamare Descrizione',
		'parking' => false,
		'vote' => 1,
		'distance_to_center' => 1
	],
	[
		'name' => 'Hotel Bellavista',
		'description' => 'Hotel Bellavista Descrizione',
		'parking' => false,
		'vote' => 5,
		'distance_to_center' => 5.5
	],
	[
		'name' => 'Hotel Milano',
		'description' => 'Hotel Milano Descrizione',
		'parking' => true,
		'vote' => 2,
		'distance_to_center' => 50
	],

];

?>
<ul class="row">
    <li>
        <?php 
            foreach ($hotels as $key => $value) {
                
                // Stampo in pagina le informazioni senza curarmi del layout
                echo '<br >Nome: '.$value["name"].'<br>'.'Descrizione: '.$value["description"].'<br>'.'Parcheggio: '.$value["parking"].'<br>'.'Voto: '.$value["vote"].'<br>'.'Distanza dal centro: '.$value["distance_to_center"].'<br>';
            
                echo '<br>----------------------------------------------------------------<br>';
            }
                    
        ?>
    </li>
</ul>


</body>
</html>