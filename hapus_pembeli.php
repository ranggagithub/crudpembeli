<?php 
require 'functions.php' ;

$id = $_GET ['id'] ;
if(hapus_pembeli($id) > 0) {
    header('location:data_pembeli.php');
} else {
    header('location:data_pembeli.php');
}
?>