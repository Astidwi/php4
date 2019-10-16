<?php

    //loping
    //type 1=for

    //for( $i=0;  $i <= 10; $i++  ) {
      //  echo $i . "Asti dwi f <br>";
    //}

    //type 2
    //$i = 1;
   // while($i <= 10){
        //echo $i . "Asti dwi febrianti <br>";
      //  $i ++;
    //}

    // type 3=foreach
    //pengkondisian // conditional
    //$angka = 11 ;
    //if($angka > 10){
      //  echo "Lebih besar dari 10";
    //}else if($angka ==10){
      //  echo "Sama dengan 10";
    //}else{
      //  echo "Kurang dari 10";
    //}

    // TUGAS!BUATLAH SEBUAT ARRAY 1 DIMENSI DAN LEBIH DARI 1 DIMENSI.
    // TAMPILKAN DALAM BENTUK PENGULANGAN FOREACHE.

    //array

    $array = ['anisa', 'asti', 'desva', 'nivia', 'vica'];

    foreach($array as $asti){
        echo "$asti <br>"; 
    }

    $nama = array(
       array("Asti" , "15" , "Jalan cagak" , "perempuan"),
       array("Nipia" , "16" , "Rawabadak" ,  "perempuan"),
       array("Anisa" , "17" , "Belendang" ,  "perempuan")
    );

    foreach($nama as $arr){
      echo "<br>";
      echo "<br>";
      echo "<br>";
      echo "Nama :$arr[0]";
      echo "<br>";
      echo "Umur : $arr[1]";
      echo "<br>";
      echo "Alamat : $arr[2]";
      echo "<br>";
      echo "jenis kelamin : $arr[3]";
      echo "<br>";
    }
     
    $nama1 = array("Asti" , "Nipia" , "Pika");
    $nama2 = ["Asti" , "nipia" , "pika"];

    echo "<br>";
    echo "<br>";
    print_r($nama1);
    echo "<br />";
    print_r($nama2);
?>