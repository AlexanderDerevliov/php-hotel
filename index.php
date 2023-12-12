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



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />
    <title>Hotels</title>
</head>

<body>
    <div class="container my_container ">
        <!-- title -->
        <h1 class="text-center text-white">HOTELS</h1>

        <!-- table -->
        <table class="table mt-4">
            <!-- head of table with description -->
            <thead class="my_thead">
                <tr>
                    <th class="col">Nome</th>
                    <th class="col">Descrizione</th>
                    <th class="col">Parcheggio</th>
                    <th class="col">Voto</th>
                    <th class="col">Distanza dal centro</th>

                </tr>
            </thead>
            <tbody class="text-center">

                <!-- for each to show and run the array -->

                <?php foreach ($hotels as $hotel) { ?>

                    <!-- row -->
                    <tr class="my_trow">
                        <!-- table head -->
                        <th class="text-center"> <?php echo $hotel['name'] ?></th>

                        <!-- data and specifics of the hotel -->
                        <td> <?php echo $hotel['description'] ?></td>
                        <td> <?php echo $hotel['parking'] ? 'Si' : 'No' ?></td>
                        <td> <?php echo $hotel['vote'] ?></td>
                        <td> <?php echo $hotel['distance_to_center'] ?></td>
                    </tr>
            </tbody>
                 <?php } ?>
        </table>


    </div>
    </div>



</body>

</html>