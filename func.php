<?php
$conn = mysqli_connect("localhost", "root", "", "empul2");

function registrasi($data)
{

    global $conn;

    $firstname = stripslashes($data["first_name"]);
    $lastname = stripslashes($data["last_name"]);
    $email = $data["email"];
    $password1 = mysqli_real_escape_string($conn, $data["password1"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    $alamat = stripslashes($data["alamat"]);
    $hp = $data["hp"];
    $gender = $data["gender"];

    $result = mysqli_query($conn, "SELECT email FROM adm WHERE email = '$email'");

    if (mysqli_fetch_assoc($result)) {

        echo "<script>
        alert('email telah ada')
     </script>";
        return false;
    }



    if ($password1 !== $password2) {

        echo "<script>
        alert('password tidak sesuai');
        </script>";
        return false;
    }

    $password1 = password_hash($password1, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO adm VALUES('', '$firstname', '$lastname', '$email', '$password1', '$alamat', '$hp','$gender')");
    return mysqli_affected_rows($conn);
}


function data($datad)
{

    global $conn;

    $lokasi = $datad["lokasi"];
    $bobot = $datad["bobot"];
    $tanggal = $datad["tanggal"];
    $jenis = $datad["jenis"];

    mysqli_query($conn, "INSERT INTO barang VALUES('', '$lokasi', '$bobot', '$tanggal', '$jenis')");
    return mysqli_affected_rows($conn);
}
