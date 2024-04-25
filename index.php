<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>


  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">

  <a class="navbar-brand" href="#"> <i class="fas fa-utensils"></i> Restaunt-Bar </a>

<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
aria-controls="navbarNav" aria-expanded="false" aria-label="toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="nav navbar-nav ml-auto">
         
     <li class="nav-item">
         <a class="nav-link" href="#Inicio">Inicio</a>
        </li>
        
        <li class="nav-item">
 <a class="nav-link" href="#Menu">Menu</a>
</li>
<li class="nav-item">
 <a class="nav-link" href="#Contactos">Contactos</a>
</li>
<li class="nav-item">
 <a class="nav-link" href="nuestromenu.php">Nuestro Menu</a>
</li>
        
    </ul>
    </div>
    </div>
</nav>


<section id="banner" class="container-fluid p=0">
<div class="banner-img" style="position:relative; background:url('imagenes/fondo1.jpg') center/cover no-repeat; height:500px; ">
    <div class="banner-text" style="position:absolute; top:50%; left:50%; transform: translate(-50%, -50%); text-align:center; color:#fff;" >

    <h1> Resturant-Bar El extraordinario</h1>
    <p>Te da la Bienvenida</p>
    <a href="#Menu" class="btn btn-primary">Ver Menu</a>
    </div>



</div>

</section>

<section id="id" class="container mt-4 text-center">

    <div class="jumbotron bg-dark text-white">
        <br/>
        
            <h2>Hola! Gracias por visitarnos</h2>
            <p> Vive la experiencia de comer y brindar en familia con nuestro menu y entorno especialmente diseñados para ti</p>  
            <br/>

        </div>
</section>



<section class="container mt-4">
<h2 class="text-center"> Nuestro Menu </h2>
<br/>
<h2 class="text-center"> Entradas </h2>
    <div class="row row-cols-1 row-cols-md-4 g-4">

        <div class="cold d-flex">
        <div class="card">
            <img src="imagenes/comida/pizza.jpg" class="card-img-top" alt="Pizza Champiñon"/>
            <div class="card-body">
<h5 class="card-title">Pizza de Champiñon</h5>
<p class="card-text"><strong>Precio:</strong> $150</p>

<button class="btn btn-primary add-to-cart" data-id="1" data-name="Pizza de Champiñon" data-price="150">Agregar al Carrito</button>
<!-- En la página de producto -->
<form action="add_to_cart.php" method="POST">
    <input type="hidden" name="product_id" value="1">  <!-- ID del producto -->
    <input type="number" name="quantity" value="1" min="1">  <!-- Cantidad -->
    
</form>
 


</div>
</div>

</div>



        <div class="cold d-flex">
        <div class="card h-100">
            <img src="imagenes/comida/alitas.jpg" class="card-img-top" alt="Alitas BBQ"/>
            <div class="card-body">
                <h5 class="card-title">Alitas BBQ</h5>
                <p class="card-text"><strong>Precio:</strong> $150</p>
                <button class="btn btn-primary add-to-cart" data-id="1" data-name="Alitas BBQ" data-price="150">Agregar al Carrito</button>
            </div>
        </div>

        </div>



<div class="cold d-flex">
        <div class="card h-100">
            <img src="imagenes/comida/hamburguesa.jpg" class="card-img-top" alt="Hamburguesa Jumbo"/>
            <div class="card-body">
                <h5 class="card-title">Hamburguesa Jumbo</h5>
                <p class="card-text"><strong>Precio:</strong> $150</p>
                <button class="btn btn-primary add-to-cart" data-id="1" data-name="Hamburguesa Jumbo" data-price="150">Agregar al Carrito</button>
            </div>
        </div>
        </section>

<section class="container mt-4">
<h2 class="text-center"> Bebidas </h2>
<br/>
    <div class="row row-cols-1 row-cols-md-4 g-4">

        <div class="cold d-flex">
        <div class="card">
            <img src="imagenes/bebidas/cubetazo.png" class="card-img-top" alt="Cubetazo XX"/>
            <div class="card-body">
<h5 class="card-title">Cubetazo dos equis</h5>
<p class="card-text"><strong>Precio:</strong> $200</p>
<button class="btn btn-primary add-to-cart" data-id="1" data-name="Cubetazo XX" data-price="200">Agregar al Carrito</button>
</div>
</div>

</div>


<div class="cold d-flex">
        <div class="card">
            <img src="imagenes/bebidas/xx.jpg" class="card-img-top" alt="Cuartitas"/>
            <div class="card-body">
<h5 class="card-title">Cuartitas dos equis</h5>
<p class="card-text"><strong>Precio:</strong> $50</p>
<button class="btn btn-primary add-to-cart" data-id="1" data-name="Cuartitas" data-price="50">Agregar al Carrito</button>
</div>
</div>

</div>


<div class="cold d-flex">
        <div class="card">
            <img src="imagenes/bebidas/michelada.jpg" class="card-img-top" alt="Michelada clasica"/>
            <div class="card-body">
<h5 class="card-title">Michelada</h5>
<p class="card-text"><strong>Precio:</strong> $35</p>
<button class="btn btn-primary add-to-cart" data-id="1" data-name="Michelada Clasica" data-price="35">Agregar al Carrito</button>
</div>
</div>

</div>

</section>



<section class="container mt-4">
<h2 class="text-center"> Refrescos </h2>
<br/>

    <div class="row row-cols-1 row-cols-md-4 g-4">

        <div class="cold d-flex">
        <div class="card">
            <img src="imagenes/refrescos/coca.jpg" class="card-img-top" alt="Coca Cola"/>
            <div class="card-body">
<h5 class="card-title">Coca Cola 600ml</h5>
<p class="card-text"><strong>Precio:</strong> $20</p>
<button class="btn btn-primary add-to-cart" data-id="1" data-name="Coca Cola" data-price="20">Agregar al Carrito</button>
</div>
</div>

</div>


<div class="cold d-flex">
        <div class="card">
            <img src="imagenes/refrescos/agua.webp" class="card-img-top" alt="Agua Cristal"/>
            <div class="card-body">
<h5 class="card-title">Agua 500ml</h5>
<p class="card-text"><strong>Precio:</strong> $20</p>
<button class="btn btn-primary add-to-cart" data-id="1" data-name="Agua Cristal" data-price="20">Agregar al Carrito</button>
</div>
</div>

</div>


<div class="cold d-flex">
        <div class="card">
            <img src="imagenes/refrescos/jamaica.webp" class="card-img-top" alt="jamaica"/>
            <div class="card-body">
<h5 class="card-title">Tarro de jamaica</h5>
<p class="card-text"><strong>Precio:</strong> $50</p>
<button class="btn btn-primary add-to-cart" data-id="1" data-name="jamaica" data-price="50">Agregar al Carrito</button>
</div>
</div>

</div>
</section>
<br/>
<br/>

<section class="container mt-4">
    <h2>Contacto </h2>
    <p> Estamos aqui para servirle,</p>

        <form action="?" method="post">
            <label for="name">Nombre</label><br />
            <input type="text" id="name" name="nombre" placeholder="Escribe tu nombre..." require> 


        </form>
</section>


        <header>
            <!-- place navbar here -->
        </header>
        <main>

       



        </main>
        <footer class="bg-dark text-light text-center ">
            <!-- place footer here -->
            <p> &copy; 2024 Restaurant-Bar El extraordinario, todos los derechos reservados.

            </p>
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
