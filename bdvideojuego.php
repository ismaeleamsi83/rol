<?php

function cargaBase()
{
    $_SESSION['jugador'] = array();
    
    session_start();

    // Conexion a la base de datos
    $config = [
        'dsn' => 'pgsql:host=localhost;port=5433;dbname=videojuego',
        'username' => 'postgres',
        'password' => '12345678',
    ];

    $conn = new PDO($config['dsn'], $config['username'], $config['password']);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    // QUERY energia 
    $stmt = $conn->prepare("SELECT xpath('//personaje/energia', partida) FROM mispartidas");
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    foreach ($data as $energia) {
        $energias = explode(",", $energia);
    }

    $reener = trim($energias[0], "{<energia></");
    $_SESSION['jugador']['energia'][0] = $reener;

    $reener = trim($energias[1], "<energia></");
    $_SESSION['jugador']['energia'][1] = $reener;

    $reener = trim($energias[2], "<energia></energia>}");
    $_SESSION['jugador']['energia'][2] = $reener;

    // QUERY vida 
    $stmt = $conn->prepare("SELECT xpath('//personaje/vida', partida) FROM mispartidas" );
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    foreach ($data as $vida) {
        $vidas = explode(",", $vida);
    }

    $revid = trim($vidas[0], "{<vida></");
    $_SESSION['jugador']['vida'][0] = $revid;

    $revid = trim($vidas[1], "<vida></");
    $_SESSION['jugador']['vida'][1] = $revid;

    $revid = trim($vidas[2], "<vida></vida>}");
    $_SESSION['jugador']['vida'][2] = $revid;

    // QUERY fuerza OK funciona
    $stmt = $conn->prepare("SELECT xpath('//personaje/fuerza', partida) FROM mispartidas");
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    foreach ($data as $fuerza) {
        $fuerzas = explode(",", $fuerza);
    }

    $refue = trim($fuerzas[0], "{<fuerza></");
    $_SESSION['jugador']['fuerza'][0] = $refue;

    $refue = trim($fuerzas[1], "<fuerza></");
    $_SESSION['jugador']['fuerza'][1] = $refue;

    $refue = trim($fuerzas[2], "<fuerza></fuerza>}");
    $_SESSION['jugador']['fuerza'][2] = $refue;

    // QUERY defensa OK funciona
    $stmt = $conn->prepare("SELECT xpath('//personaje/defensa', partida) FROM mispartidas");
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    foreach ($data as $defensa) {
        $defensas = explode(",", $defensa);
    }

    $redef = trim($defensas[0], "{<defensa></");
    $_SESSION['jugador']['defensa'][0] = $redef;

    $redef = trim($defensas[1], "<defensa></");
    $_SESSION['jugador']['defensa'][1] = $redef;

    $redef = trim($defensas[2], "<defensa></defensa>}");
    $_SESSION['jugador']['defensa'][2] = $redef;



    // Contiene los nombres de los jugadores
    $stmt = $conn->prepare("SELECT xpath('/juego/personaje/@nombre', partida) FROM mispartidas");
    $stmt->execute();
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    
    foreach ($data as $nombre) {
        $nombres = explode(",", $nombre);
    }
    $renom = trim($nombres[0], "{");
    $_SESSION['jugador']['nombre'][0] = $renom;

    $_SESSION['jugador']['nombre'][1] = $nombres[1];

    $renom = trim($nombres[2], "}");
    $_SESSION['jugador']['nombre'][2] = $renom;
    // cerrar 
    $conn = null;

    header("Location: index.php");



}
?>