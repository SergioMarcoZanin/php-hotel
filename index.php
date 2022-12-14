<?php

    $hotels = [

        [
            'name' => 'Hotel Torino',
            'description' => 'Hotel Torino Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 5.4
        ],
        [
            'name' => 'Hotel Continental',
            'description' => 'Hotel Continental Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Liguria',
            'description' => 'Hotel Liguria Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 0.7
        ],
        [
            'name' => 'Hotel Roma',
            'description' => 'Hotel Roma Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 1.5
        ],
        [
            'name' => 'Hotel Piccolo',
            'description' => 'Hotel Piccolo Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 25
        ],

    ];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PhP Hotel</title>
</head>
<body>
    <div class="container pt-5">
        <table class="table table-striped-columns table-white text-center mt-5">
            <thead>
                <tr class="fs-5">
                    <th scope="col">Nome</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Parcheggio</th>
                    <th scope="col">Voto</th>
                    <th scope="col">Distanza dal centro (Km)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($hotels as $hotel){?>
                    <tr>
                        <?php   foreach($hotel as $key => $info){
                                    if($key==="name"){
                                        echo "<th scope=\"row\">$info</th>";
                                    }elseif($key==="parking"){
                                        if($info){
                                            echo "<td><i class=\"fa-solid fa-check\"></i></td>";
                                        }else{
                                            echo "<td><i class=\"fa-solid fa-xmark\"></i></td>";
                                        }
                                    }elseif($key==="vote"){
                        ?>
                                        <td>  
                                            <?php
                                            for($i=0;$i<5;$i++){
                                                if($i<$info){
                                                    echo "<i class=\"fa-solid fa-star\"></i>";
                                                }else{
                                                    echo "<i class=\"fa-regular fa-star\"></i>";
                                                }
                                            }
                                            ?>
                                        </td>
                            <?php
                                    }else{
                                        echo "<td>$info</td>";
                                    }
                                }
                            ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>