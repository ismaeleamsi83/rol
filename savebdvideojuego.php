<?php
function saveBd()
{
    $xml = new DomDocument('1.0', 'UTF-8');
    $root = $xml->createElement('juego');
    $root = $xml->appendChild($root);

    // primer personaje
    $person = $xml->createElement('personaje');
    $person = $root->appendChild($person);
    // Atributo id
    $personId = $xml->createAttribute('id');
    $personId->value = 1;
    $person->appendChild($personId);
    // Atributo nombre
    $personNom = $xml->createAttribute('nombre');
    $personNom->value = $_POST['nom1'];
    $person->appendChild($personNom);

    $ener = $xml->createElement('energia', $_POST['p1_energy']);
    $ener = $person->appendChild($ener);

    $heal = $xml->createElement('vida', $_POST['p1_health']);
    $heal = $person->appendChild($heal);

    $fuer = $xml->createElement('fuerza', $_POST['p1_strength']);
    $fuer = $person->appendChild($fuer);

    $defe = $xml->createElement('defensa', $_POST['p1_defense']);
    $defe = $person->appendChild($defe);

    // segundo personaje
    $person2 = $xml->createElement('personaje');
    $person2 = $root->appendChild($person2);
    // Atributo id
    $personId2 = $xml->createAttribute('id');
    $personId2->value = 2;
    $person2->appendChild($personId2);
    // Atributo nombre
    $personNom2 = $xml->createAttribute('nombre');
    $personNom2->value = $_POST['nom2'];
    $person2->appendChild($personNom2);

    $ener2 = $xml->createElement('energia', $_POST['p2_energy']);
    $ener2 = $person2->appendChild($ener2);

    $heal2 = $xml->createElement('vida', $_POST['p2_health']);
    $heal2 = $person2->appendChild($heal2);

    $fuer2 = $xml->createElement('fuerza', $_POST['p2_strength']);
    $fuer2 = $person2->appendChild($fuer2);

    $defe2 = $xml->createElement('defensa', $_POST['p2_defense']);
    $defe2 = $person2->appendChild($defe2);

    // tercer personaje
    $person3 = $xml->createElement('personaje');
    $person3 = $root->appendChild($person3);
    // Atributo id
    $personId3 = $xml->createAttribute('id');
    $personId3->value = 3;
    $person3->appendChild($personId3);
    // Atributo nombre
    $personNom3 = $xml->createAttribute('nombre');
    $personNom3->value = $_POST['nom3'];
    $person3->appendChild($personNom3);

    $ener3 = $xml->createElement('energia', $_POST['p3_energy']);
    $ener3 = $person3->appendChild($ener3);

    $heal3 = $xml->createElement('vida', $_POST['p3_health']);
    $heal3 = $person3->appendChild($heal3);

    $fuer3 = $xml->createElement('fuerza', $_POST['p3_strength']);
    $fuer3 = $person3->appendChild($fuer3);

    $defe3 = $xml->createElement('defensa', $_POST['p3_defense']);
    $defe3 = $person3->appendChild($defe3);

    $xml->formatOutput = true;

    $strings_xml = $xml->saveXML();

    $convertido = (string) $strings_xml;

    // Conexion a la base de datos
    $config = [
        'dsn' => 'pgsql:host=localhost;port=5433;dbname=videojuego',
        'username' => 'postgres',
        'password' => '12345678',
    ];

    $conn = new PDO($config['dsn'], $config['username'], $config['password']);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //$newString = $xml->asXML();
    //$xml->save('filesxml/nuevospersonajes.xml');
    $stmt = $conn->prepare("INSERT INTO mispartidas(partida) VALUES (?)");
    $stmt->bindparam(1,$convertido);
    $stmt->execute();
    echo 'Se guardo correctamente';
    header("Location: index.php?guardado=ok");
}
?>