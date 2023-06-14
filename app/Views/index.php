<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    `<?php
  // Aquí se puede utilizar lógica PHP para determinar la URL del archivo CSS
  $cssFile = 'estilo.css'
  ?>
<link rel="stylesheet" href="<?= base_url("/public/estilo.css")?>">
    <script defer src="<?= base_url("/public/app.js")?>" async></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title> Zarpale la lata </title>
</head>
    <body>
        <h1>Tienda de zapas</h1>
         <div class="login-container">
          <a href="<?= base_url("/inicio")?>"
          >Iniciar sesión</a>
        </div>
        <div class="login-container">
          <a href="<?= base_url("/agregarproductos")?>"
          >agregar productos</a>
          <? if( adadad ) :
    
    
        else : 
    
    
    endif; ?>

        </div></body>
</head>
<body>
    <section class="contenedor">
<div class="contenedor-items">
            <div class="item">
                
            </div>
            <div class="item">
                <span class="titulo-item">zz </span>
                <img src="" alt="" class="img-item">
                <span class="precio-item">$25.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item"> h</span>
                <img src="" alt="" class="img-item">
                <span class="precio-item">$35.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">d </span>
                <img src=" " alt="" class="img-item">
                <span class="precio-item">$18.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item"> f</span>
                <img src="" alt="" class="img-item">
                <span class="precio-item">$32.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item"> Jordan Retro 3</span>
                <span class="precio-item">$18.000</span>
                <button class="boton-item">Agregar al Carrito</button>
                <img src="https://nikearprod.vtexassets.com/arquivos/ids/498318-1400-1400?v=1767817476" alt="" class="img-item">
            </div>
            <div class="item">
                <span class="titulo-item"> nike huarache </span>
                <span class="precio-item">$54.000</span>
                <button class="boton-item">Agregar al Carrito</button>
                <img src="https://nikearprod.vtexassets.com/arquivos/ids/155455-1400-1400?v=1767820838" alt="" class="img-item">
            </div>
            <div class="item">
                <span class="titulo-item"> air max  </span>
                <span class="precio-item">$32.000</span>
                <button class="boton-item">Agregar al Carrito</button>
                <img src="https://nikearprod.vtexassets.com/arquivos/ids/407537-1400-1400?v=1767739111" alt="" class="img-item">
            </div>
            <div class="item">
                <span class="titulo-item">air max 97 </span>
                <span class="precio-item">$42.800</span>
                <button class="boton-item">Agregar al Carrito</button>
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://nikearprod.vtexassets.com/arquivos/ids/422576-800-800?v=638143978359470000" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://nikearprod.vtexassets.com/arquivos/ids/490106-800-800?v=638150954006800000" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="https://nikearprod.vtexassets.com/arquivos/ids/454562-800-800?v=638149311544530000" class="d-block w-100" alt="...">
        </div>
        </div>
                  </div>
</div>
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</html>