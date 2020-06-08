<?php
spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
    include_once "ConexionDB.php";
});
