<html>
    <head>
        <title>Kalkulator</title>
    </head>
    <body>
        <form action="" method="POST">
            <input name="a" placeholder="variabel a" type="number"/>
            <input name="b" placeholder="variabel b" type="number"/>
            <br>
            <input name="tambah" value="+" type="submit"/>
            <input name="kurang" value="-" type="submit"/>
            <input name="kali" value="x" type="submit"/>
            <input name="bagi" value="/" type="submit"/>
            <input name="mod" value="%" type="submit"/>
        </form>
        <?php
            if(isset($_POST['tambah'])){
                $hasil = $_POST['a'] + $_POST['b'];
                echo "Hasil " . $_POST['a'] . " + " . $_POST['b'] . " = " . $hasil;
            }elseif(isset($_POST['kurang'])){
                $hasil = $_POST['a'] - $_POST['b'];
                echo "Hasil " . $_POST['a'] . " - " . $_POST['b'] . " = " . $hasil;
            }elseif(isset($_POST['kali'])){
                $hasil = $_POST['a'] * $_POST['b'];
                echo "Hasil " . $_POST['a'] . " x " . $_POST['b'] . " = " . $hasil;
            }elseif(isset($_POST['bagi'])){
                $hasil = $_POST['a'] / $_POST['b'];
                echo "Hasil " . $_POST['a'] . " / " . $_POST['b'] . " = " . $hasil;
            }elseif(isset($_POST['mod'])){
                $hasil = $_POST['a'] % $_POST['b'];
                echo "Hasil " . $_POST['a'] . " mod " . $_POST['b'] . " = " . $hasil;
            }
        ?>
    </body>
</html>

