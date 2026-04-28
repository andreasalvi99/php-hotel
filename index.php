
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

    // foreach($hotels as $hotel) {

    //     foreach($hotel as $key => $value) {

    //         echo "$key : $value   ";

    //     };

    //     echo "<br>";

    // };

    echo '<div class="container my-4">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrizione</th>
      <th scope="col">Parcheggio</th>
      <th scope="col">Voto</th>
      <th scope="col">Distanza dal centro</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>'. $hotels[0]['name'] .'</td>
      <td>'. $hotels[0]['description'] .'</td>
      <td>'. ($hotels[0]['parking'] === true ? 'Si' : 'No') .'</td>
      <td>'. $hotels[0]['vote'] .'</td>
      <td>'. $hotels[0]['distance_to_center'] . ' km' . '</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>'. $hotels[1]['name'] .'</td>
      <td>'. $hotels[1]['description'] .'</td>
      <td>'. ($hotels[1]['parking'] === true ? 'Si' : 'No') .'</td>
      <td>'. $hotels[1]['vote'] .'</td>
      <td>'. $hotels[1]['distance_to_center'] . ' km' . '</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>'. $hotels[2]['name'] .'</td>
      <td>'. $hotels[2]['description'] .'</td>
      <td>'. ($hotels[2]['parking'] === true ? 'Si' : 'No') .'</td>
      <td>'. $hotels[2]['vote'] .'</td>
      <td>'. $hotels[2]['distance_to_center'] . ' km' . '</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>'. $hotels[3]['name'] .'</td>
      <td>'. $hotels[3]['description'] .'</td>
      <td>'. ($hotels[3]['parking'] === true ? 'Si' : 'No') .'</td>
      <td>'. $hotels[3]['vote'] .'</td>
      <td>'. $hotels[3]['distance_to_center'] . ' km' . '</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>'. $hotels[4]['name'] .'</td>
      <td>'. $hotels[4]['description'] .'</td>
      <td>'. ($hotels[4]['parking'] === true ? 'Si' : 'No' ).'</td>
      <td>'. $hotels[4]['vote'] .'</td>
      <td>'. $hotels[4]['distance_to_center'] . ' km' . '</td>
    </tr>
  </tbody>
</table>
</div>';


?>

</body>
</html>