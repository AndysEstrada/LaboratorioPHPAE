<!DOCTYPE html>
<html lang="en">
    <head>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Catalogo - Peliculas</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">

    </head>
    <body>

        <nav class="navbar navbar-expand-lg navbar-light navbar-peli">
            <div class="container">
                <a class="navbar-brand" href="contenido.php">Catalogo Peliculas</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Cerrar Sesion</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="container mt-5">

            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>Tipo Pelicula</th>
                        <th>Titulo</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="2">Acción</td>
                        <td>Hombre en Llamas</td>
                        <td>Contratado como guardaespaldas de una niña, un agente retirado de la CIA se venga de sus secuestradores en México</td>
                        <td><img src="img/Hombre_en_llamas.jpg" width="75" alt=""></td>
                    </tr>
                    <tr>
                        <td>El Justiciero</td>
                        <td>Robert McCall, un antiguo comando de operaciones especiales que ha fingido su propia muerte, se ve obligado a salir de su retiro para salvar la vida de Teri, una joven que se encuentra en manos de unos mafiosos rusos ultraviolentos.</td>
                        <td><img src="img/El_justiciero.jpg" width="75" alt=""></td>
                    </tr>
                    <tr>
                        <td rowspan="2">Acción/Fantasía</td>
                        <td>Spider-Man 2</td>
                        <td>El atormentado Peter Parker lucha contra un científico siniestro que utiliza sus tentáculos mecánicos con fines destructivos.</td>
                        <td><img src="img/Spider-Man_2.jpg" width="75" alt=""></td>
                    </tr>
                    <tr>
                        <td>Avengers: Infinity War</td>
                        <td>Los superhéroes se alían para vencer al poderoso Thanos, el peor enemigo al que se han enfrentado. Si Thanos logra reunir las seis gemas del infinito: poder, tiempo, alma, realidad, mente y espacio, nadie podrá detenerlo.</td>
                        <td><img src="img/Infinity_War.jpg" width="75" alt=""></td>
                    </tr>
                    <tr>
                        <td rowspan="2">Misterio/Suspenso</td>
                        <td>Inferno</td>
                        <td>El profesor de simbología Robert Langdon se despierta con amnesia en Italia. Allí contará con la ayuda de la doctora Sienna Brooks para, juntos, recorrer Europa intentando desbaratar una conspiración letal que amenaza a todo el planeta.</td>
                        <td><img src="img/Inferno.jpg" width="75" alt=""></td>
                    </tr>
                    <tr>
                        <td>Ángeles y demonios</td>
                        <td>Robert Langdon, un profesor experto en temas religiosos de la Universidad de Harvard, descubre evidencias del resurgimiento de la hermandad secreta y clandestina más poderosa de la historia: Los Iluminados.</td>
                        <td><img src="img/Angeles_y_Demonios.jpg" width="75" alt=""></td>
                    </tr>
                    <tr>
                        <td rowspan="2">Terror</td>
                        <td>Poltergais</td>
                        <td>Poltergeist es una serie de películas de terror estadounidense distribuida por Metro-Goldwyn-Mayer durante la década de 1980.</td>
                        <td><img src="img/Poltergeist.jpg" width="75" alt=""></td>
                    </tr>
                    <tr>
                        <td>Así en la Tierra como en el Infierno</td>
                        <td>Kilómetros y kilómetros de tortuosas catacumbas yacen bajo las calles de París, plagadas de incontables almas. Cuando un equipo de exploradores se aventura en este desconocido laberinto, se descubre cuál fue la verdadera función de esta ciudad.</td>
                        <td><img src="img/asi_en_la_tierra_como_en_el_infierno.jpg" width="75" alt=""></td>
                    </tr>
                    <tr>
                        <td rowspan="2">Romance/Comedia</td>
                        <td>Una esposa de mentira</td>
                        <td>El cirujano Danny decide contratar a su ayudante Katherine, una madre soltera con hijos, para que finjan ser su familia. Su intención es demostrarle a Palmer que su amor por ella es tan grande que está a punto de divorciarse de su mujer.</td>
                        <td><img src="img/Una_esposa_de_mentiras.jpg" width="75" alt=""></td>
                    </tr>
                    <tr>
                        <td>Luna de miel en familia</td>
                        <td>Poco después de que una cita a ciegas acaba con resultados desastrosos, dos padres solteros y sus niños terminan atrapados juntos en un centro turístico africano.</td>
                        <td><img src="img/Luna_de_miel_en_familia.jfif" width="75" alt=""></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </body>
</html>