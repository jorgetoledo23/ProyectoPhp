<?php

    require_once(DAO . 'PDOSelect.php');

    if(isset($_POST['regionID'])){
        $regionid = $_POST['regionID'];
        $Provincias = selectSQL("SELECT * FROM provincias WHERE region_id='$regionid'", 'Provincia');
        if($Provincias){
            echo "<option selected>Choose...</option>";
            foreach($Provincias as $P){
                echo "<option value='".$P->id."'>".$P->provincia."</option>";
            }
        }
    }


    if(isset($_POST['provinciaID'])){
        $provinciaid = $_POST['provinciaID'];
        $Comunas = selectSQL("SELECT * FROM comunas WHERE provincia_id = '$provinciaid'", 'Comuna');
        if($Comunas){
            echo "<option selected>Choose...</option>";
            foreach($Comunas as $C){
                echo "<option value='".$C->id."'>".$C->comuna."</option>";
            }
        }
    }

?>