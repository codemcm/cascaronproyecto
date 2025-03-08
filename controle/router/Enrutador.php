<?php

class Enrutador{
    public function cargarVista($vista){
        switch($vista){
            case 'CarreraAddView':
                include_once __DIR__ . ('/../vistas/carrera/CarreraAddView.php');
            break;
            case 'EstudianteAdd':
                include_once __DIR__ . ('/../vistas/estudiante/EstudianteAdd.php');
            break;
            case 'EstudianteListar':
                include_once __DIR__ . ('/../vistas/estudiante/EstudianteListar.php');
            break;
            default:
                include_once __DIR__ . ('/../vistas/error/Error404.php');
            break;
        }
    }

    public function validarGet($variable):bool{
        if(empty($variable)){
            echo "<script> window.history.back();</script>";
        } else{
            return true;
        }
    }
}

?>