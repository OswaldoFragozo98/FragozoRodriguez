<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PiedraPapelTijera</title>
    <link rel="stylesheet" href="css/estilos.css">
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/funcion.js"></script>
</head>
<body>
    <section id="contenedor">
        <header>
            <h1>Piedra, Papel o Tijera</h1>
            <nav class="menu">
                <h3>Escoge</h3>
                <div id="Piedra"></div>
                <div id="Papel"></div>
                <div id="Tijeras"></div>
            </nav>
        </header>
            <div id="juego">
                <div class="mostrador">
                    <div id="usuario">
                        <span>Usted eligió: </span>
                        <div><span id="eleccion"></span></div>
                    </div>
                    <br>
                    <div id="maquina">
                        <span>La maquina eligió: </span>
                        <div><span id="maq_eleccion"></span></div>
                    </div>
                </div>
                <div id="resultado">
                    <span id="res">Resultado</span>
                    <div id="imagen"></div>
                </div>
            </div>
    </section>
</body>
</html>
