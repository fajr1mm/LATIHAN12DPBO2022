<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/
include("conf.php");
include("model/Template.class.php");
include("model/DB.php");
include("model/Pasien.class.php");
include("model/TabelPasien.class.php");
include("view/TampilPasien.php");




$tp = new TampilPasien();
$data = $tp->tampil();
