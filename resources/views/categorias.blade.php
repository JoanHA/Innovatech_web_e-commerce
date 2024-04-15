<style>
    /* Estilos para la barra vertical */
    nav {
        background-color: white;
        width: 200px;
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        padding: 20px;
        border: 2px solid red;
        border-radius: 12px;
    }
    
    ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    
    li {
        margin-bottom: 10px;
    }
    
    h2 {
        border: 2px solid red;
        border-radius: 12px;
        width: 150px;
        text-align: center;
    }

    .precio {
        border: 2px solid;
        border-radius: 12px;
        height: 30px;
    }

    .marca {
        border: 2px solid;
        border-radius: 12px;
        height: 30px;
    }

    .envio{
        border: 2px solid;
        border-radius: 12px;
        width: 120px;
        height: 25px;
    }
</style>

<nav>
    <ul>
        <li><h1>CATEGORIAS</h1></li>
        <li><h2>Celulares</h2></li>
        <li><label>Marca:</label></li>
        <li><input type="text" placeholder="@Nombre marca" class="marca"></li><br>
        <li><label>Precio</label></li><br>
        <li><label>Desde:</label></li>
        <li><input type="number" class="precio"></li>
        <li><label>Hasta:</label></li>
        <li><input type="number" class="precio"></li><br>
        <li><button class="envio">Restablecer</button></li><br>
        <li><label>Rango de precios</label></li>
        <li><input type="checkbox"> Hasta 100.000</li>
        <li><input type="checkbox"> 100.000 a 200.000</li>
        <li><input type="checkbox"> 200.000 a 600.000</li>
        <li><input type="checkbox"> 600.000 a 1.250.000</li>
        <li><input type="checkbox"> Desde 1.250.000</li><br>
        <li><label>Envio:</label></li>
        <li><input type="checkbox"> Nacional</li>
        <li><input type="checkbox"> Internacional</li><br>
        <li><label>Calificacion:</label></li>
        <li><input id="radio1" type="radio" name="estrellas" value="5">
            <label for="radio1">★</label>
            <br>
            <input id="radio2" type="radio" name="estrellas" value="4">
            <label for="radio2">★★</label>
            <br>
            <input id="radio3" type="radio" name="estrellas" value="3">
            <label for="radio3">★★★</label>
            <br>
            <input id="radio4" type="radio" name="estrellas" value="2">
            <label for="radio4">★★★★</label>
            <br>
            <input id="radio5" type="radio" name="estrellas" value="1">
            <label for="radio5">★★★★★</label></li>
    </ul>
</nav>

<!-- El contenido principal -->
<main>
    <!-- Aquí va el contenido de la página -->
</main>