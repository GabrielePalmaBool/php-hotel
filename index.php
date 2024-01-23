<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Link css Bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
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
		'parking' => true,
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
		'parking' => false,
		'vote' => 2,
		'distance_to_center' => 50
	],

];

?>
<h1>Lista Hotels</h1>

<!-- Primo bonus: ricerca parcheggio -->
<form>
  <label for="parking">Scelta parcheggio:</label>
  <select name="park" id="cars">
    <option value="">scegli</option>
    <option value="yes">si</option>
    <option value="no">no</option>
  </select>
  <br><br>

  <label for="quantity">Voto (tra 1 e 5):</label>
  <input type="number" id="quantity" name="vote" min="1" max="5">
  <input type="submit" value="Seleziona">
</form>


<br><br>




    <ul>
        <li>
            <?php 

                // Recupera i valori di $_GET['park'] e $_GET['vote'] 
                $park = $_GET['park'] ?? 'nobody';
                $vote = $_GET['vote'] ?? 'nobody';
            

                //se non c'è alcun valore
                if($park == 'nobody' && $vote == 'nobody' || $park == '' && $vote == '' ){

                    foreach ($hotels as $key => $value) {
                        
                        // Stampo in pagina le informazioni senza curarmi del layout
                        echo '<br >Nome: '.$value["name"].'<br>'.'Descrizione: '.$value["description"].'<br>'.'Parcheggio: '.$value["parking"].'<br>'.'Voto: '.$value["vote"].'<br>'.'Distanza dal centro: '.$value["distance_to_center"].'<br>';
                    
                        echo '<br>----------------------------------------------------------------<br>';
                    }
                }

                // in tutti gli altri casi avvia questa parte
                else{
                   
                    // primo caso
                    if($park !== '' && $vote == ''){

                        if($park == 'yes' ) echo '<h2> con parcheggio</h2>';
                        else if($park == 'no' )  echo '<h2> senza parcheggio</h2>';
                        
                        foreach ($hotels as $key => $value) {
    
                            if($value["parking"] == true && $park == 'yes' ){
        
                                // Stampo in pagina le informazioni senza curarmi del layout
                                echo '<br >Nome: '.$value["name"].'<br>'.'Descrizione: '.$value["description"].'<br>'.'Parcheggio:si <br>'.'Voto: '.$value["vote"].'<br>'.'Distanza dal centro: '.$value["distance_to_center"].'<br>';
                        
                                echo '<br>----------------------------------------------------------------<br>';
    
                            }
                            else if($value["parking"] == false && $park == 'no' ) {
                                // Stampo in pagina le informazioni senza curarmi del layout
                                echo '<br >Nome: '.$value["name"].'<br>'.'Descrizione: '.$value["description"].'<br>'.'Parcheggio:no <br>'.'Voto: '.$value["vote"].'<br>'.'Distanza dal centro: '.$value["distance_to_center"].'<br>';
                        
                                echo '<br>----------------------------------------------------------------<br>';
                            }
    
                        }
                    }
                    // Secondo caso
                    else if($park == '' && $vote !== ''){

                        echo '<h2> con: '.$vote.' stelle</h2>';

                        foreach ($hotels as $key => $value) {
    
                            if( $value["vote"] == $vote  && $value["parking"] == true){
        
                                // Stampo in pagina le informazioni senza curarmi del layout
                                echo '<br >Nome: '.$value["name"].'<br>'.'Descrizione: '.$value["description"].'<br>'.'Parcheggio:si <br>'.'Voto: '.$value["vote"].'<br>'.'Distanza dal centro: '.$value["distance_to_center"].'<br>';
                        
                                echo '<br>----------------------------------------------------------------<br>';
    
                            }
                            else if ($value["vote"] == $vote  && $value["parking"] == false) {
                                  // Stampo in pagina le informazioni senza curarmi del layout
                                  echo '<br >Nome: '.$value["name"].'<br>'.'Descrizione: '.$value["description"].'<br>'.'Parcheggio:no <br>'.'Voto: '.$value["vote"].'<br>'.'Distanza dal centro: '.$value["distance_to_center"].'<br>';
                        
                                  echo '<br>----------------------------------------------------------------<br>';
      
                            }

                        }
                    }

                    // terzo caso
                    else if($park !== '' && $vote !== 'nobody'){

                        if($park == 'yes' ) echo '<h2> con parcheggio e con un voto di: '.$vote.'</h2><br>';
                        else if($park == 'no' )  echo '<h2> senza parcheggio e con un voto di: '.$vote.'</h2><br>';
               
                        foreach ($hotels as $key => $value) {
    
                            if($park === 'yes'){
                               
                                if( $value["parking"] == true && $value["vote"] == $vote ){
        
                                    // Stampo in pagina le informazioni senza curarmi del layout
                                    echo '<br >Nome: '.$value["name"].'<br>'.'Descrizione: '.$value["description"].'<br>'.'Parcheggio:si <br>'.'Voto: '.$value["vote"].'<br>'.'Distanza dal centro: '.$value["distance_to_center"].'<br>';
                            
                                    echo '<br>----------------------------------------------------------------<br>';
        
                                }
                                
    
                            }
    
                            else if($park === 'no'){
            
                                if( $value["parking"] == false && $value["vote"] == $vote ){
        
                                    // Stampo in pagina le informazioni senza curarmi del layout
                                    echo '<br >Nome: '.$value["name"].'<br>'.'Descrizione: '.$value["description"].'<br>'.'Parcheggio:no <br>'.'Voto: '.$value["vote"].'<br>'.'Distanza dal centro: '.$value["distance_to_center"].'<br>';
                            
                                    echo '<br>----------------------------------------------------------------<br>';
        
                                }
                            }


    
                        }
                    }

                }
                        
            ?>
        </li>
    </ul>




</body>
</html>