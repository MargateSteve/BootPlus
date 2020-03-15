<?php

    include('inc/settings.php');
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootplus.css">

    <title class="text-primary">Hello, world!</title>
  </head>
  <body>
    <h1 class="bg-indigo">Hello, world!</h1>

    <?php

    function examples ($color, $weight=null, $bg_class=null) {

        if($weight) {$weight='-'.$weight;}

        echo "<div class='col-3'>
                <div class='col-12 bg-$color$weight'>.bg-$color$weight</div>
                <div class='col-12 text-$color$weight'><span>.text-$color$weight</span></div>
                <div class='col-12'> <a href='#' class='bg-$color$weight'>a.bg-$color$weight</a></div>
            </div>
            <div class='col-3'>
                <div class='col-12'><a href='#' class='bg-$color$weight'>.bg-$color$weight</a></div>
                <div class='col-12'><a href='#' class='text-$color$weight'>a.text-$color$weight</a></div>
            </div>

            <div class='col-3'>
                <div class='col-12'><a href='#' class='btn btn-$color$weight'>a.btn-$color$weight</a></div>
                <div class='col-12'><a href='#' class='btn btn-outline-$color$weight'>a.btn-outline-$color$weight</a></div>
            </div>

            <div class='col-3'>
                <div class='col-12'><span class='badge badge-$color$weight'>badge badge-$color$weight</span></div>
                <div class='col-12'><span class='badge badge-pill badge-$color$weight'>badge badge-pill badge-$color$weight</span></div>
            </div>


        <hr class='col-12 mb-1'></hr>";
    }



    echo "<div class='row'>";
    echo "<div class='col-12'><h4>Base Colors</h4></div>";
    echo "</div>";
    foreach ($base_colors as $key => $cutoff_weight) {
        echo "<div class='row mb-2'>";
        echo "<div class='col-12'><h5>$key</h5></div>";
        examples ($key);
        for ($i=100; $i < 1000; $i+=100) {
            $bg_class = ($i<$cutoff_weight) ? ' bg-gray-200': '';
            examples ($key, $i, $bg_class);

        }

        echo "</div>";
    }

    echo "<div class='row'>";
    echo "<div class='col-12'><h4>Extra Colors</h4></div>";
    echo "</div>";
    foreach ($extra_colors as $key => $cutoff_weight) {
        echo "<div class='row mb-2'>";
        echo "<div class='col-12'><h5>$key</h5></div>";
        examples ($key);
        for ($i=100; $i < 1000; $i+=100) {
            $bg_class = ($i<$cutoff_weight) ? ' bg-gray-200': '';
            examples ($key, $i, $bg_class);

        }

        echo "</div>";
    }

    echo "<div class='row'>";
    echo "<div class='col-12'><h4>Grays</h4></div>";


    for ($i=100; $i < 1000; $i+=100) {
        examples ('gray', $i);
    }

echo "</div>";



    ?>


    <a href="#" class="bg-gray-200">a.bg-gray-200</a>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
