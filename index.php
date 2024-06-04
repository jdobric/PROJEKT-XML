<?php

// ucitaj users.xml
$xml = simplexml_load_file('home.xml');

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KNJIŽNICA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <style>
        .card{margin-bottom:20px;}
        .card img{
          
            object-fit:cover;
        }
    </style>
    
</head>
  <body>
  <main style="background-color: #C8B8DB;">
    <h1 class="d-flex justify-content-center align-items-center"style="font-size:75px; color: #593E7A; " >KNJIŽNICA</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <div class="container">
    <div class="row">



<?php foreach ($xml->knjiga as $knjiga): ?>
    
            <div class="col-md-6">
              <div class="card  bg-light" >
                <img class="card-img-top" src="<?php echo $knjiga->slika; ?>" class="card-img-top" alt="Slika knjige">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $knjiga->naslov; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo $knjiga->autor; ?></h6>
                  <p class="card-text"><strong>Godina izdavanja:</strong> <?php echo $knjiga->godina_izdavanja; ?></p>
                  <p class="card-text"><?php echo $knjiga->opis; ?></p>
                  <a href="<?php echo $knjiga->link; ?>" class="btn btn-primary" style="background-color:#634488;border-color:#634488;"target="_blank">Više informacija</a>
                </div>
              </div>
            </div>
    
          <?php endforeach; ?>
          </div>
</div>
<footer class="py-5; text-light mt-0" style="background-color:#634488;">
        <div class="container">
            <p class="float-end mb-1 btn btn-primary" style="background-color: #C8B8DB;border-color:#C8B8DB;text-color:#634488; margin-top:20px;">
                <a href="#">Vrati se na vrh</a>
            </p>
            <p class="mb-1">Studentica: Jovana Dobrić</p>
            <p class="mb-1">JMBAG:0246111648 </p>
            <p class="mb-1">Kolegij: XML programiranje</p>
            <p class="mb-1">Akademska godina 2023./2024.</p>
        </div>
    </footer>
</body>
</html>