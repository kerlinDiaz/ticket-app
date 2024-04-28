<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.blade.css">
    <title>TICKET</title>
</head>
<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="./img/logo.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
        Tickets Parrillada
      </a>
    </div>
  </nav>
      <section id="imgprincipal">
        <h2>Bienvenido a nuestro evento de Parrillada</h2>
        <p>¡Sumérgete en una experiencia gastronómica inolvidable con nuestra parrillada! </p>
        <em><p> Disfruta de jugosas carnes a la parrilla, acompañadas de sabrosas guarniciones y aderezos 
          caseros que deleitarán tu paladar.</p></em>
          <td>
            <ul>Organizador: Robert Tapara Donayre</ul>
            <ul>Lugar: Senati</ul>
            <ul>Fecha: 27/05/24</ul>
            <ul>Hora: 02:00</ul>
          </td>
      </section>
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/img1.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/img2.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="img/img3.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
      <section id="imgprincipal">
        <h2>Compra tu Ticket</h2>
        <form action="{{route('compra.store')}}" style="display: flex; flex-direction: column; align-items: center;" method="post">@csrf 
            
            <label for="nombre" style="width: 200px;">Nombre del cliente:</label>
            <input type="text" id="nombre" name="nombre" style="width: 300px;" required><br>
            
            <label for="telefono" style="width: 200px;">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" style="width: 300px;" required><br>
            
            <label for="direccion" style="width: 200px;">Dirección del cliente:</label>
            <input type="text" id="direccion" name="direccion" style="width: 300px;" required><br>
            
            <label for="parte" style="width: 200px;">Parte de parrillada:</label>
            <select id="parte" name="parte" style="width: 300px;" required>
                <option value="...">...</option>
                <option value="pecho">Pecho</option>
                <option value="pierna">Pierna</option>
            </select><br>
            
            <label for="ticket" style="width: 200px;">Cantidad de Tickets:</label>
            <input type="number" id="ticket" name="ticket" style="width: 300px;" min="1" required><br>
    
            <label for="pago" style="width: 200px;">Método de pago:</label>
            <select id="pago" name="pago" style="width: 300px;" required>
                <option value="...">...</option>
                <option value="efectivo">Efectivo</option>
                <option value="plin">Plin</option>
                <option value="yape">Yape</option>
            </select><br>
            
            <button type="submit" style="width: 150px;">Procesar pedido</button>
        </form>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <footer>
      <div id="pie">
        <div class="contacto:">
          <br><strong>Contácto:</strong>
          <br><img src="img/llamada.png" alt="" width="15px"> +51952827364
          <br><img src="img/correo.png" alt="" width="15px"> parrilladagrupo3@gmail.com
          <br><img src="img/ubicacion.png" alt="" width="15px"> Av. Guardia Civil N° 1752 | Iquitos - Perú
      </div>
          <div>
            <br><strong>Acerca del sitio web:</strong>
            <p>Este sitio web fue creado con la intención de facilitar al cliente hacer su pedido de forma segura.</p>
            <p>Copyright © 2024 Grupo 3. Todos los derechos reservados.</p>
          </div>
      </div>
  </footer>
</body>
</html>
