<?php

function cargarFichero()
{


    session_start();

    $doc = new DOMDocument();
    $doc->load('filesxml/nuevospersonajes.xml');
    $xpath = new DOMXpath($doc);

    $personajes = $doc->getElementsByTagName('personaje');

    $_SESSION['jugador'] = array();

    // Contiene los nombres de los jugadores
    $x = 0;
    $nombres = $xpath->query("/juego/personaje/@nombre");
    if (!is_null($nombres)) {
        foreach ($nombres as $nombre) {
            

            $nodes = $nombre->childNodes;
            foreach ($nodes as $node) {
                
                $_SESSION['jugador']['nombre'][$x] = $node->nodeValue;
                $x++;
            }
        }
    }

    // Contiene los valores de los personajes
    $i = 0;
    foreach ($personajes as $personaje) {
        $_SESSION['jugador']['energia'][$i] = $personaje->getElementsByTagName('energia')->item(0)->nodeValue;
        $_SESSION['jugador']['vida'][$i] = $personaje->getElementsByTagName('vida')->item(0)->nodeValue;
        $_SESSION['jugador']['fuerza'][$i] = $personaje->getElementsByTagName('fuerza')->item(0)->nodeValue;
        $_SESSION['jugador']['defensa'][$i] = $personaje->getElementsByTagName('defensa')->item(0)->nodeValue;

        $i++;
    }

    

    header("Location: index.php");


}
?>