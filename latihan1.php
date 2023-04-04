<?php
    $usr = "";
    $pwd = "";
    $salah = 0;
    
    if(isset($_GET["txUSER"])){
        $usr = $_GET["txUSER"];
        $pwd = $_GET["txPASS"];

        if($usr==""){
            $salah = 1;
        }else{
            echo "Isi dari Field User: ". $usr;
        }
        $salah = 0;
        if($pwd==""){
            $salah = 1;
        }else{
            echo " Isi dari Field User: ". $pwd;
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dengan Metode GET</title>
</head>
<body>
    
<?php
if($salah = 1){
    echo "<div style='color: red'> User Name/Password masih kosong</div>";
}
?>
    <form method="GET" action="latihan1.php">
        <div>
            User Name
            <input Type="Text" name="txUSER" required>
        </div>
        <div>
            Password
            <input Type="password" name="txPASS" required>
        </div>
        <div>
            <button Type="submit"> Login </button>
        </div>
    </form>

</body>
</html>