<?php

require 'function.php';

$id = $_GET["id"];

if(batal($id) > 0) {
    echo "<script type='text/javascript'>
            alert('Pesanan berhasil dibatalkan!')
            window.location = 'keranjang-belanja.php'
          </script>";
}else{
    echo "<script type='text/javascript'>
            alert('Pesanan gagal dibatalkan..')
            window.location = 'keranjang-belanja.php'
          </script>";
}


?>