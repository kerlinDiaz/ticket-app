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
    <header>
        <h1>Venta de Tickets de Parrillada</h1><br>
    </header>

    <section id="inicio">
        <h2>Bienvenido a nuestro evento de Parrillada</h2>
        <p>¡Sumérgete en una experiencia gastronómica inolvidable con nuestra parrillada! 
            Disfruta de jugosas carnes a la parrilla, acompañadas de sabrosas guarniciones y aderezos 
            caseros que deleitarán tu paladar.</p>
        <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/foto1.jpg" class="d-block w-100 carousel-image" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/foto2.png" class="d-block w-100 carousel-image" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/foto3.png" class="d-block w-100 carousel-image" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    </section>

    <section id="Comprar" style="display: flex; flex-direction: column; align-items: center;">
    <h2>Compra tu Ticket</h2>
    <form action="procesar_pago.php" method="post" style="display: flex; flex-direction: column; align-items: center;">
        
        <label for="nombre_cliente" style="width: 200px;">Nombre del cliente:</label>
        <input type="text" id="nombre_cliente" name="nombre_cliente" style="width: 300px;" required><br>
        
        <label for="telefono_cliente" style="width: 200px;">Teléfono:</label>
        <input type="tel" id="telefono_cliente" name="telefono_cliente" style="width: 300px;" required><br>
        
        <label for="direccion_cliente" style="width: 200px;">Dirección del cliente:</label>
        <input type="text" id="direccion_cliente" name="direccion_cliente" style="width: 300px;" required><br>
        
        <label for="entrega" style="width: 200px;">Lugar de Entrega:</label>
        <select id="entrega" name="entrega" style="width: 300px;" required>
            <option value="...">...</option>
            <option value="delivery">Delivery</option>
            <option value="lugar_parrillada">Lugar de Parrillada</option>
        </select><br>
        
        <label for="parte" style="width: 200px;">Parte de la parrillada:</label>
        <select id="parte" name="parte" style="width: 300px;" required>
            <option value="...">...</option>
            <option value="pecho">Pecho</option>
            <option value="pierna">Pierna</option>
        </select><br>
        
        <label for="cantidad_tickets" style="width: 200px;">Cantidad de Tickets:</label>
        <input type="number" id="cantidad_tickets" name="cantidad_tickets" style="width: 300px;" min="1" required><br>

        <label for="metodo_pago" style="width: 200px;">Método de pago:</label>
        <select id="metodo_pago" name="metodo_pago" style="width: 300px;" required>
            <option value="...">...</option>
            <option value="tarjeta">Tarjeta</option>
            <option value="efectivo">Efectivo</option>
            <option value="plin">Plin</option>
            <option value="yape">Yape</option>
        </select><br>
        
        <button type="submit" style="width: 150px;">Comprar ahora</button>
    </form>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
