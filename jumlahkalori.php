<?php
    // #a
    // 1x makan = 2500 kalori
    $senin = 3;
    $selasa = 2;
    $rabu = 2;
    $kamis = 3;
    $jumat = 3;
    $sabtu = 2;
    $minggu = 1;

    // kalori
    $kalori = 2500;

    // kalkulasi per hari
    $senin_=$senin*$kalori;
    $selasa_=$selasa*$kalori;
    $rabu_=$rabu*$kalori;
    $kamis_=$kamis*$kalori;
    $jumat_=$jumat*$kalori;
    $sabtu_=$sabtu*$kalori;
    $minggu_=$minggu*$kalori;

    // kalkulasi per minggu
    $seminggu_=$senin_+$selasa_+$rabu_+$kamis_+$jumat_+$sabtu_+$minggu_;
    $seminggu=$senin+$selasa+$rabu+$kamis+$jumat+$sabtu+$minggu;

    echo "<br>";
    echo "<br>";
    echo "<b>Kalkulasi jumlah kalori</b>";
    echo "<hr>";
    echo "<br>";
    echo "Kalori perHari :" . "<br>";
    echo "<br>";
    echo("Senin makan 3x dengan jumlah kalori : ". $senin_ . " kalori" . "<br>");
    echo("Selasa makan 2x dengan jumlah kalori : ". $selasa_ . " kalori" . "<br>");
    echo("Rabu makan 2x dengan jumlah kalori : ". $rabu_ . " kalori" . "<br>");
    echo("Kamis makan 3x dengan jumlah kalori : ". $kamis_ . " kalori" . "<br>");
    echo("Jumat makan 3x dengan jumlah kalori : ". $jumat_ . " kalori" . "<br>");
    echo("Sabtu makan 2x dengan jumlah kalori : ". $sabtu_ . " kalori" . "<br>");
    echo("Minggu makan 1x dengan jumlah kalori : ". $minggu_ . " kalori" . "<br>");
    echo "<br>";

    echo "Kalori perMinggu :" . "<br>";
    echo "<br>";
    echo "perMinggu makan sebanyak " . $seminggu . "x dengan kalori sebanyak " . $seminggu_ ;
    echo "<br>";
    echo "<br>";
    echo "<b>Kalkulasi waktu istirahat</b>";
    echo "<hr>";

    // #b
    // kalkulasi waktu istirahat

    // orang dewasa tidur butuh 8 jam
    // waktu istirahat fu
    $senin = 5;
    $selasa = 6;
    $rabu = 8;
    $kamis = 8;
    $jumat = 5;
    $sabtu = 6;
    $minggu = 4;

    $batas = 8;

    // jumlah tidur perhari
    $jumlah = $senin + $selasa+ $rabu + $kamis + $jumat + $sabtu + $minggu;

    // jumlah tidur perhari
    echo "<br>";
    echo "Jumlah tidur Fu : " . "<br>" . "<br>";
    echo "Senin Fu tidur dengan estimasi : " . $senin . "jam" . "<br>"; 
    echo "Selasa Fu tidur dengan estimasi : " . $selasa . "jam" . "<br>"; 
    echo "Rabu Fu tidur dengan estimasi : " . $rabu . "jam" . "<br>"; 
    echo "Kamis Fu tidur dengan estimasi : " . $kamis . "jam" . "<br>"; 
    echo "Jumat Fu tidur dengan estimasi : " . $jumat . "jam" . "<br>"; 
    echo "Sabtu Fu tidur dengan estimasi : " . $sabtu . "jam" . "<br>"; 
    echo "Minggu Fu tidur dengan estimasi : " . $minggu . "jam" . "<br>"                                                                 ; 
    echo "<br>";
    echo "Jumlah estimasi tidur untuk Dewasa : " . $batas;
    echo "<br>";

    // jumlah tidur perminggu
    echo "Jumlah estimasi tidur perMinggu : " . $jumlah;
    echo "<br>" . "<br>";

    // hidup atau mati
    
    echo "<b>Apakah Fu Sehat / Sakit ?</b>";
    echo "<hr>";
    echo "<br>";
    $kaloriperminggu = $kalori * 7;
    if($kaloriperminggu >= $seminggu_ && $jumlah >= $seminggu){
        echo "Fu sehat";
    }else{
        echo "Fu sakit";
    }
    echo "";

   

    ?>