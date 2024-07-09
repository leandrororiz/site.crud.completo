<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BANK</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    h1 {
      font-size: 30px;
      color: white;
      padding: 30px;
      padding-left: 200px;
      background-color: rgb(0, 138, 236);
    }

    #bc {
      margin-left: 418px;
      margin-bottom: -10px;
      color: blue;
    }

    #lr {
   
      font-size: 30px;
    
      color: blue;
    }

    .carousel-item {
      height: auto; 
      width: 100%;
      justify-content: center; 
    }

    .carousel-item img {
   
      max-width: 100%;
      height: auto; 
    }

    #s1 {
      display: flex;
      flex-direction: row;
      margin-left: 418px;
      margin-top: -10px;
    }

   #b1{
      margin-left: 300px;
      margin-bottom: 15px;

    }

    #s2{
      display: flex;
      flex-direction: row;
      justify-content: space-around;
    }


   

   
  </style>
</head>

<body>

  <h1><a target="_blank" href="cad.php"><button type="button" class="btn btn-light"><strong>Investimentos</strong></button></a></h1>
  <p id="bc">Banco </p>
  <section id="s1">
  <p id="lr"><strong>LR</strong></p>
  
  <div class="dropdown">
    <button id="b1" class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      <strong>Produtos e serviços</strong>
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">LR Investimentos</a></li>
      <li><a class="dropdown-item" href="#">Contas</a></li>
      
    </ul>
  </div>
  
  <div class="dropdown">
    <button class="btn btn-white dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
  <strong>Atendimento</strong>
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">(61): 3365-5864</a></li>
      <li><a class="dropdown-item" href="#">(61): 3354-8976</a></li>
      
    </ul>
  </div>
  </section>
  
  
  
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="Banner-Site-3-1.png" class="d-block" alt="First slide">
        </div>
        <div class="carousel-item">
          <img src="Banner-Site-5.png" class="d-block" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img src="Banner-Site-3.png" class="d-block" alt="Third slide">
        </div>  
      </div>
    </div>
    <br><br>

    <section id="s2">
    <div class="card" style="width: 18rem;">
  <img src="rene.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Renegociação de dívida</h5>
    <p class="card-text">Condições especiais para resolver sua vida financeira.</p>
   
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="brb.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Crédito Imobiliário</h5>
    <p class="card-text">As melhores taxas e condições para você se sentir em casa. Temos o crédito descomplicado para você.</p>
   
  </div>
</div>

<div class="card" style="width: 18rem;">
  <img src="ag.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">LR Investimentos</h5>
    <p class="card-text">Soluções completas de investimento aliadas à tradição, solidez e segurança do Banco BRB.</p>
   
  </div>
</div>
</section>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
  
  
</body>

</html>