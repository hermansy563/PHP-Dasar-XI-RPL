<?php
    $pelajar="hermansyah";

   function siswa($nama="herman", $kelas="XI-RPL" ){
    global $pelajar; //mengambil variabel dari luar functon
    echo "siswa kelas $kelas yang bernama $pelajar selalu rajin belajar.";
   }

   siswa();
?>