<!DOCTYPE html>
<head>
        <meta charset="utf-8">
        <title>Input Nama</title>
        <link rel="" href="">
        <link rel="" href="">
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js"></script>
        <style>
            *{
                margin: 0;
                padding: 0;
                list-style: none;
                font-style: sans-serif;
            }

            .container{
                border: 1px solid rgba(0,0,0,.2);
                box-shadow: 2px 5px 10px rgba(0,0,0,.3),
                           -2px -5px 10px rgba(0,0,0,.3);
                box-sizing: border-box;
                border-radius: 20px;
                width: 400px;
                margin: 30px auto;
            }
            .container h1{
                text-align: center;
                letter-spacing: 1px;
                text-shadow: 0px 3px 3px rgba(0,0,0,.5);
                margin: 15px 0;

            }
            .input{
                margin: 30px 20px;
            }
            .gambar{
                position: absolute;
                top: 0;
                margin: 320px 290px;
            }
            .gambar img{
                width: 100px;
                height: 60px;
                
            }
            .input li{
                outline: none;
                border:none;
                margin-top: 20px
            }
            input[type="text"],
            input[type="email"]{
                outline: none;
                border: none;
                border-bottom: 1px solid rgba(0,0,0,.5);
                margin-left: 10px;
                font-size: 15px;
            }

            textarea[name="textarea"]{
                width: 340px;
                height: 50px;
                margin-top: 10px;
                display: inline;
            }
            input[type="submit"]{
                font-size: 15px;
                outline: none;
                border: none;
                padding: 5px;
                background-color: blue;
                color: #fff;
                outline: #ffff;
                border-radius: 10px;
                text-transform: uppercase;
                margin: 0 130px;
                transition: 1s all ease;
            }
            input[type="submit"]:hover{
                color: salmon;
                cursor: pointer;
            }

            .php{
                margin: 10px auto;
                width:400px;
                border: 1px solid rgba(0,0,0,.5);
                box-shadow: 2px 5px 10px rgba(0,0,0,.3),
                           -2px -5px 10px rgba(0,0,0,.3);
                padding: 20px 70px;
                box-sizing: border-box;
                border-radius: 20px;
                line-height: 30px;
            }
            .php p{
                text-align: center;
                text-decoration: underline;
            }
        </style>
</head>
<body>
    <div class="container">
        <h1>Inputan Nama</h1>
        <div class="gambar">
            <img src="stiki.png" alt="stiki">
        </div>
        <form method="POST" action="">
        <ul class="input">
            <li>
            <input type="hidden" name="hias" id="hias" value="============================" readonly>
            </li>
            <li>
                <label for="nim">NIM</label>
                <input type="text" name="nim" id="nim" value="20101172" readonly>
            </li>
            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" value="I Kadek Surya Dwipayana" readonly>
            </li>
            <li>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" minlength="10" placeholder="Masukan email" required>
            </li>
            <li>
                <label for="textarea">Komentar</label>
                <textarea name="textarea" id="textarea" cols="60" rows="10" placeholder="ketikan komentar" minlength="5" maxlength="140" required></textarea>
            </li>
            <li>
                <input type="hidden" name="hias2" value="<hr>">
            </li>
            <li>
                <input type="submit" name="submit" id="submit">
            </li>
        </ul>
        </form>
    </div>
    <hr>


<div class="php">
    <p>BOX RESULT</p>
<?php 
if(isset($_POST["submit"])){
    $komentar = $_POST["textarea"];
    $jumlah_array= explode(" ",$komentar);
    echo "$_POST[hias] <br>";
    echo "NIM = $_POST[nim] <br>";
    echo "Nama = $_POST[nama] <br>";
    echo "Email = $_POST[email] <br>";
    echo "Komentar : <br> $komentar";  
    echo "<br>";
    echo "$_POST[hias2]";
    echo "Ini Berjumlah" . " " . count($jumlah_array) ." "."kata";
    echo "<br>";
    echo "$_POST[hias] <br>";
}
?>
</div>
</body>
