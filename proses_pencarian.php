<?php

 $data_album = [
    [
        "Judul" => "Broken Melodies",
        "Artis" => "NCT DREAM",
        "Harga" => "Rp.600.000,-",
        "Fandom" => "nct.jpg",
    ],
    [
        "Judul" => "I Like Me Better",
        "Artis" => "Lauv",
        "Harga" => "Rp.400.000,-",
        "Fandom" => "lauv.jpg",
    ],
    [
        "Judul" => "Seven",
        "Artis" => "Jung kook",
        "Harga" => "Rp.800.000,-",
        "Fandom" => "jung kook.png",
    ],
    [
        "Judul" => "Moonlight",
        "Artis" => "dhruv",
        "Harga" => "Rp.550.000,-",
        "Fandom" => "dhruv.jpg",
    ],
    ];

    if($_POST){
        $item_cari = $_POST['input_judul'];
        $array_hasil_pencarian = array();

        $i=0;
        foreach($data_album as $item){
            if(strstr($item['Judul'], $item_cari)){
                $array_hasil_pencarian[$i]['Judul'] = $item["Judul"];
                $array_hasil_pencarian[$i]['Artis'] = $item["Artis"];
                $array_hasil_pencarian[$i]['Harga'] = $item["Harga"];
                $array_hasil_pencarian[$i]['Fandom'] = $item["Fandom"];
                $i++;
            }//end of if

        }//end of foreach

        if(count($array_hasil_pencarian) == 0){
            $paramalbum = "";
        } else{
            $paramalbum = json_encode($array_hasil_pencarian);
        }

        header("Location: index.php?album=" . $paramalbum . "&Judul=" . $item_cari);

    }//end of post