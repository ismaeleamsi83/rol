<?php
    if(isset($_POST['guardar'])){
        if(empty($_POST['tipo_dato'])){
            header("Location: index.php?tipo=vacio");
        }
        if(!empty($_POST['nom1'])){
            if(!empty($_POST['p1_energy'])){
                if(!empty($_POST['p1_health'])){
                    if(!empty($_POST['p1_strength'])){
                        if(!empty($_POST['p1_defense'])){
                            if(!empty($_POST['nom2'])){
                                if(!empty($_POST['p2_energy'])){
                                    if(!empty($_POST['p2_health'])){
                                        if(!empty($_POST['p2_strength'])){
                                            if(!empty($_POST['p2_defense'])){
                                                if(!empty($_POST['nom3'])){
                                                    if(!empty($_POST['p3_energy'])){
                                                        if(!empty($_POST['p3_health'])){
                                                            if(!empty($_POST['p3_strength'])){
                                                                if(!empty($_POST['p3_defense'])){
                                                                    echo "todos los campos estan rellenos";
                                                                    if($_POST['tipo_dato'] == 'fichero'){
                                                                        echo "OK guardar en fichero";
                                                                        // llamar al archivo savefile.php la funcion
                                                                        include "savefilevideojuego.php";
                                                                        saveFile();

                                                                    }else{
                                                                        echo "OK guardar en Base de datos";
                                                                        include "savebdvideojuego.php";
                                                                        saveBd();
                                                                    }
                                                                }else{
                                                                    header("Location: index.php?guardar=vacio");
                                                                }
                                                            }else{
                                                                header("Location: index.php?guardar=vacio");
                                                            }
                                                        }else{
                                                            header("Location: index.php?guardar=vacio");
                                                        }
                                                    }else{
                                                        header("Location: index.php?guardar=vacio");
                                                    }
                                                }else{
                                                    header("Location: index.php?guardar=vacio");
                                                }
                                            }else{
                                                header("Location: index.php?guardar=vacio");
                                            }
                                        }else{
                                            header("Location: index.php?guardar=vacio");
                                        }
                                    }else{
                                        header("Location: index.php?guardar=vacio");
                                    }
                                }else{
                                    header("Location: index.php?guardar=vacio");
                                }
                            }else{
                                header("Location: index.php?guardar=vacio");
                            }
                        }else{
                            header("Location: index.php?guardar=vacio");
                        }
                    }else{
                        header("Location: index.php?guardar=vacio");
                    }
                }else{
                    header("Location: index.php?guardar=vacio");
                }
            }else{
                header("Location: index.php?guardar=vacio");
            }
        }else{
            header("Location: index.php?guardar=vacio");
        }
    }else{
        header("Location: index.php?guardar=vacio");
    }



    // Opciones de cargar 
    if(isset($_POST['cargar'])){

        if(empty($_POST['tipo_dato'])){
            header("Location: index.php?tipo=vacio");
        }
        
        //Aqui llamo a la funcion de bbvideojuego.php para cargar desde la base de datos
        include "bdvideojuego.php";

        if($_POST['tipo_dato'] == 'base'){
            cargaBase();
        }

        
        //Opcion de cargar desde fichero aqui llamo a la funcion de filevideojuego.php desde fichero
        include "filevideojuego.php";
        if($_POST['tipo_dato'] == 'fichero'){
            cargarFichero();
        }

        


    }else{
        
    }
?>