<?php 

    class Usuario{
        public $Rut;
        public $nombres;
        public $apellidos;
        public $correo;
        public $pass;
        public $rol;
    }

    class Categoria{
        public $categoriaid;
        public $descripcion;
    }


    class Region{
        public $id;
        public $region;
        public $abreviatura;
        public $capital;
    }

    class Provincia{
        public $id;
        public $provincia;
        public $region_id;
    }

    class Comuna{
        public $id;
        public $comuna;
        public $provincia_id;
    }


?>