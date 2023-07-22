<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>form pencarian</title>
</head>
<body>
    <main>
        <a href="index.php">Refresh</a>
        <h2>Pencarian album</h2>
        <form action="proses_pencarian.php" method="post">
            <label for="input_judul">Judul</label>
            <input type="text" name="input_judul" id="input_judul" value="<?php
              if(isset($_GET['Judul'])){
                echo $_GET['Judul'];
              }
            ?>"> 

            <input type="submit" value="Cari">
        </form>

        <section id="result-container">
            <?php
              if(isset($_GET['album'])){
                if($_GET['album'] == ""){
                    echo "<h4 class='warning-message'>Data album tidak di temukan !!</h4>";
                }//end of tidak do temukan
                else{
                    $album_item = json_decode($_GET['album'], true);

                    foreach($album_item as $item){
                        echo "<div class='item-container'>";
                         echo "<img src='images/" . $item['Fandom'] . "'>";
                         echo"<div class='item-description'>";
                          echo "<h4>Judul :</h4>";
                          echo "<h4 class='value'>" .$item['Judul'] . "</h4>";

                          echo "<h4>Artis :</h4>";
                          echo "<h4 class='value'>" .$item['Artis'] . "</h4>";

                          echo "<h4>Harga :</h4>";
                          echo "<h4 class='value'>" .$item['Harga'] . "</h4>";
                         echo "</div>";
                         echo "<div class='clear-fix'></div>";
                        echo "</div>";
                    }
                }//end of jika di temukan
              }//end of isset
            ?>
        </section>

    </main>
</body>
</html>