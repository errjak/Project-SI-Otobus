<?php 
    //Menghubungkan ke database
    $conn = mysqli_connect("localhost", "root", "", "ekamira1");

    //Mengambil data dari database
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $datas = [];
        while ($data = mysqli_fetch_assoc($result)) {
            $datas[] = $data;
        }
        return $datas;
    }


    function register($data){
        global $conn;
        
        $name = htmlspecialchars($data["nama"]);
        $nomor = htmlspecialchars($data["telepon"]);
        $email = htmlspecialchars($data["email"]);
        $email2 = htmlspecialchars($data["email2"]);
        $pass = mysqli_real_escape_string($conn, $data["password"]);
        $pass2 = mysqli_real_escape_string($conn, $data["password2"]);
        
        //cek password dan email
        if ($pass !== $pass2 || $email !== $email2) {
            return false;
        }

        //enkripsi password
        $pass = password_hash($pass, PASSWORD_DEFAULT);

        //insert data ke database
        mysqli_query($conn, "INSERT INTO users VALUES('', '$name', '$nomor', '$email', '$pass')");

        return mysqli_affected_rows($conn);
    }

?>