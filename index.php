<?php
   
    session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Videojuego</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body class="bg-dark">
    <?php
        if(isset($_GET['tipo'])){
            if($_GET['tipo']=="vacio"){
    ?>
    <script type='text/javascript'>
                alert("Tienes que seleccionar Fichero o Base de datos antes de cargar o guardar");
    </script>
    <?php
            }
        }
    ?>
    <?php
        if(isset($_GET['guardar'])){
            if($_GET['guardar']=="vacio"){
    ?>
    <script type='text/javascript'>
                alert("Tienes que rellenar todos los input antes de guardar");
    </script>
    <?php
            }
        }
    ?>
    <?php
        if(isset($_GET['guardado'])){
            if($_GET['guardado']=="ok"){
    ?>
    <script type='text/javascript'>
                alert("Guardado con exito en base de datos");
    </script>
    <?php
            }
        }
    ?>
    
    <div class="container d-flex justify-content-center mt-5 mb-5 " id="fondo-principal">
        <form action="controlador.php" method="POST">
            <table>
                <tr>
                    <td class="text-center pt-2 pb-2" colspan="5">Personaje 1</td>
                </tr>
                <tr>
                    <td rowspan="4" style="background-color: white"><img src="images/personaje-1.png" alt="" style="width: 120px"></td>
                    <td colspan="4" class="p-2"><div class="d-flex justify-content-center p-3">Character: <input type="text" name="nom1" class="personaje"
                    value="<?php
                                if(isset($_SESSION)){
                                    if(!empty($_SESSION['jugador']['nombre'])){
                                        echo $_SESSION['jugador']['nombre'][0];
                                    }else{
                                        echo "1";
                                    }
                                    
                                }else{
                                    echo "1";
                                }
                          ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="p-2"><img src="images/energia.png" alt="" style="width: 30px"> Energy:</td>
                    <td class="p-2"><input type="number" min="1" max="99" class="puntos" name="p1_energy"
                    value="<?php
                                if(isset($_SESSION)){
                                    if(!empty($_SESSION['jugador']['energia'])){
                                        echo $_SESSION['jugador']['energia'][0];
                                    }else{
                                        echo 1;
                                    }
                                    
                                }else{
                                    echo 1;
                                }
                          ?>">
                    </td>
                    <td class="p-2"><img src="images/vida.png" alt="" style="width: 30px"> Health:</td>
                    <td class="p-2"><input type="number" min="1" max="99" class="puntos" name="p1_health" 
                    value="<?php
                                if(isset($_SESSION)){
                                    if(!empty($_SESSION['jugador']['energia'])){
                                        echo $_SESSION['jugador']['vida'][0];
                                    }else{
                                        echo 1;
                                    }
                                    
                                }else{
                                    echo 1;
                                }
                          ?>">
                    </td>
                </tr>
                <tr>
                    <td class="p-2"><img src="images/fuerza.png" alt="" style="width: 30px"> Strength:</td>
                    <td class="p-2"><input type="number" min="1" max="99" class="puntos" name="p1_strength"
                    value="<?php
                                if(isset($_SESSION)){
                                    if(!empty($_SESSION['jugador']['energia'])){
                                        echo $_SESSION['jugador']['fuerza'][0];
                                    }else{
                                        echo 1;
                                    }
                                    
                                }else{
                                    echo 1;
                                }
                          ?>">
                    </td>
                    <td class="p-2"><img src="images/defensa.png" alt="" style="width: 30px"> Defense:</td>
                    <td class="p-2"><input type="number" min="1" max="99" class="puntos" name="p1_defense"
                    value="<?php
                                if(isset($_SESSION)){
                                    if(!empty($_SESSION['jugador']['energia'])){
                                        echo $_SESSION['jugador']['defensa'][0];
                                    }else{
                                        echo 1;
                                    }
                                    
                                }else{
                                    echo 1;
                                }
                          ?>">
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="text-center pt-2 pb-2" colspan="5">Personaje 2</td>
                </tr>
                <tr>
                    <td rowspan="4" style="background-color: white"><img src="images/personaje-2.png" alt="" style="width: 120px"></td>
                    <td colspan="4" class="p-2"><div class="d-flex justify-content-center p-3">Character: <input type="text" name="nom2" class="personaje"
                    value="<?php
                                if(isset($_SESSION)){
                                    if(!empty($_SESSION['jugador']['nombre'])){
                                        echo $_SESSION['jugador']['nombre'][1];
                                    }else{
                                        echo "1";
                                    }
                                    
                                }else{
                                    echo "1";
                                }
                          ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="p-2"><img src="images/energia.png" alt="" style="width: 30px"> Energy:</td>
                    <td class="p-2"><input type="number" min="1" max="99" class="puntos" name="p2_energy"
                    value="<?php
                                if(isset($_SESSION)){
                                    if(!empty($_SESSION['jugador']['energia'])){
                                        echo $_SESSION['jugador']['energia'][1];
                                    }else{
                                        echo 1;
                                    }
                                    
                                }else{
                                    echo 1;
                                }
                          ?>">
                    </td>
                    <td class="p-2"><img src="images/vida.png" alt="" style="width: 30px"> Health:</td>
                    <td class="p-2"><input type="number" min="1" max="99" class="puntos" name="p2_health"
                    value="<?php
                                if(isset($_SESSION)){
                                    if(!empty($_SESSION['jugador']['energia'])){
                                        echo $_SESSION['jugador']['vida'][1];
                                    }else{
                                        echo 1;
                                    }
                                    
                                }else{
                                    echo 1;
                                }
                          ?>">
                    </td>
                </tr>
                <tr>
                    <td class="p-2"><img src="images/fuerza.png" alt="" style="width: 30px"> Strength:</td>
                    <td class="p-2"><input type="number" min="1" max="99" class="puntos" name="p2_strength"
                    value="<?php
                                if(isset($_SESSION)){
                                    if(!empty($_SESSION['jugador']['energia'])){
                                        echo $_SESSION['jugador']['fuerza'][1];
                                    }else{
                                        echo 1;
                                    }
                                    
                                }else{
                                    echo 1;
                                }
                          ?>">
                    </td>
                    <td class="p-2"><img src="images/defensa.png" alt="" style="width: 30px"> Defense:</td>
                    <td class="p-2"><input type="number" min="1" max="99" class="puntos" name="p2_defense"
                    value="<?php
                                if(isset($_SESSION)){
                                    if(!empty($_SESSION['jugador']['energia'])){
                                        echo $_SESSION['jugador']['defensa'][1];
                                    }else{
                                        echo 1;
                                    }
                                    
                                }else{
                                    echo 1;
                                }
                          ?>">
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="text-center pt-2 pb-2" colspan="5">Personaje 3</td>
                </tr>
                <tr>
                    <td rowspan="4" style="background-color: white"><img src="images/personaje-3.png" alt="" style="width: 120px"></td>
                    <td colspan="4" class="p-2"><div class="d-flex justify-content-center p-3">Character: <input type="text" name="nom3" class="personaje"
                    value="<?php
                                if(isset($_SESSION)){
                                    if(!empty($_SESSION['jugador']['nombre'])){
                                        echo $_SESSION['jugador']['nombre'][2];
                                    }else{
                                        echo "1";
                                    }
                                    
                                }else{
                                    echo "1";
                                }
                          ?>">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="p-2"><img src="images/energia.png" alt="" style="width: 30px"> Energy:</td>
                    <td class="p-2"><input type="number" min="1" max="99" class="puntos" name="p3_energy"
                    value="<?php
                                if(isset($_SESSION)){
                                    if(!empty($_SESSION['jugador']['energia'])){
                                        echo $_SESSION['jugador']['energia'][2];
                                    }else{
                                        echo 1;
                                    }
                                    
                                }else{
                                    echo 1;
                                }
                          ?>">
                    </td>
                    <td class="p-2"><img src="images/vida.png" alt="" style="width: 30px"> Health:</td>
                    <td class="p-2"><input type="number" min="1" max="99" class="puntos" name="p3_health"
                    value="<?php
                                if(isset($_SESSION)){
                                    if(!empty($_SESSION['jugador']['energia'])){
                                        echo $_SESSION['jugador']['vida'][2];
                                    }else{
                                        echo 1;
                                    }
                                    
                                }else{
                                    echo 1;
                                }
                          ?>">
                    </td>
                </tr>
                <tr>
                    <td class="p-2"><img src="images/fuerza.png" alt="" style="width: 30px"> Strength:</td>
                    <td class="p-2"><input type="number" min="1" max="99" class="puntos" name="p3_strength"
                    value="<?php
                                if(isset($_SESSION)){
                                    if(!empty($_SESSION['jugador']['energia'])){
                                        echo $_SESSION['jugador']['fuerza'][2];
                                    }else{
                                        echo 1;
                                    }
                                    
                                }else{
                                    echo 1;
                                }
                          ?>">
                    </td>
                    <td class="p-2"><img src="images/defensa.png" alt="" style="width: 30px"> Defense:</td>
                    <td class="p-2"><input type="number" min="1" max="99" class="puntos" name="p3_defense"
                    value="<?php
                                if(isset($_SESSION)){
                                    if(!empty($_SESSION['jugador']['energia'])){
                                        echo $_SESSION['jugador']['defensa'][2];
                                        
                                    }else{
                                        echo 1;
                                    }
                                    
                                }else{
                                    echo 1;
                                }
                          ?>">
                    </td>
                </tr>
            </table>
            <table>
                <tr>
                    <td class="sinbordes">
                        <input type="radio" id="fichero" name="tipo_dato" value="fichero">
                        <label for="fichero">Fichero</label>
                    </td>
                    <td class="sinbordes">
                        <input type="radio" id="base" name="tipo_dato" value="base">
                        <label for="base">Base de Datos</label>
                    </td>
                </tr>
                <tr>
                    <td class="sinbordes"><input type="submit" value="Guardar" class="botones btn btn-info" name="guardar"></td>
                    <td class="sinbordes"><input type="submit" value="Cargar" class="botones btn btn-info" name="cargar"></td>
                </tr>
            </table>
        </form>
    </div>
 

</body>
</html>