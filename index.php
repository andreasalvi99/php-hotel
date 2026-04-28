
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
   
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

    $parking_availability = false;

    if(isset($_GET['parking']) && $_GET['parking'] === 'on') {
        $parking_availability = true;
    };

$min_vote = 0;

if(isset($_GET['vote']) && is_numeric($_GET['vote']) && $_GET['vote'] >= 0 && $_GET['vote'] <= 5 ) {
    $min_vote = (int)$_GET['vote'];
};

var_dump($min_vote);
    
?>
<div class="container">
    <form action="" method="GET" class="mt-3">
        <input type="checkbox" id="checkDefault" name="parking" class="form-check-input">
        <label class="form-check-label" for="checkDefault">
    Parcheggio
  </label>
  <input type="number" name="vote" class="form-control" min="0" max="5">
  <button class="btn btn-primary d-block my-3" type="submit">Invia</button>
    </form>
<table class="table mt-3">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrizione</th>
            <th>Parcheggio</th>
            <th>Voto</th>
            <th>Distanza dal centro</th>
        </tr>
    </thead>
    <tbody>
        <?php

        foreach($hotels as $hotel) {

            var_dump($hotel);
            
            if($parking_availability) {
                
                if(!$hotel['parking']) {
                    continue;
                    }
            };
                    
        ?>
        <tr>
            <td><?php echo $hotel['name'] ?></td>
            <td><?php echo $hotel['description'] ?></td>
            <td><?php echo $hotel['parking'] === true ? 'Si' : 'No' ?></td>
            <td><?php echo $hotel['vote'] ?></td>
            <td><?php echo $hotel['distance_to_center'] . ' km'?></td>
        </tr>

        <?php
       } 
       ?>
    </tbody>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>