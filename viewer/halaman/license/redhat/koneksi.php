<?php
// Koneksi ke server

$host = 'localhost' ;
$serverName = 'root' ;
$password = '' ;
$database = 'license' ;

$koneksi = mysqli_connect($host,$serverName,$password,$database);

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

function query($query)
{
    // untuk memanggil variabel yg ada di luar function
    global $koneksi;

    $data = mysqli_query($koneksi, $query);

    //declare sebuah variabel yg berbentuk array
    $rows = [];

    //looping var data yg awalnya berbentuk object menjadi sebuah array associative
    while( $row = mysqli_fetch_assoc($data) ) {
        $rows[] = $row;
    }
    return $rows;

}

function tambah($data)
{
    global $koneksi;

    // htmlspecialchars() = agar tag html di program tidak akan dijalankan
    $Subscription_Number = htmlspecialchars($data['Subscription_Number']);
    $Subscription_Name = htmlspecialchars($data['Subscription_Name']);
    $Contract_Number = htmlspecialchars($data['Contract_Number']);
    $Quantity = htmlspecialchars($data['Quantity']);
    $Start_Date = date($data['Start_Date']);
    $End_Date = date($data['End_Date']);
    
       
    $sql = "INSERT INTO redhat VALUES ('', '$Subscription_Number', '$Subscription_Name', '$Contract_Number', '$Quantity', '$Start_Date', '$End_Date')";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);

}

function edit($data)
{
    global $koneksi;

    $id = $data['id'];
    // htmlspecialchars() = agar tag html di program tidak akan dijalankan
    $Subscription_Number = htmlspecialchars($data['Subscription_Number']);
    $Subscription_Name = htmlspecialchars($data['Subscription_Name']);
    $Contract_Number = htmlspecialchars($data['Contract_Number']);
    $Quantity = htmlspecialchars($data['Quantity']);
    $Start_Date = date($data['Start_Date']);
    $End_Date = date($data['End_Date']);
    
    //cek apakah user upload foto baru atau tidak
    

    $sql = " UPDATE redhat SET 
    
                Subscription_Number = '$Subscription_Number',
                Subscription_Name = '$Subscription_Name',
                Contract_Number = '$Contract_Number',
                Quantity = '$Quantity',
                Start_Date = '$Start_Date',
                End_Date = '$End_Date'
                
            WHERE id = $id ";

    mysqli_query($koneksi, $sql);

    return mysqli_affected_rows($koneksi);
}

// function register($data)
// {
//     global $koneksi;

//     $username = strtolower(stripslashes($data['username']));
//     $email = mysqli_real_escape_string($koneksi, $data["email"]);
//     $nama = mysqli_real_escape_string($koneksi, $data["nama"]);
//     $password = mysqli_real_escape_string($koneksi, $data["password"]);
//     $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);
//     $level = strtolower(stripslashes($data['level']));
//     $foto = htmlspecialchars($data['foto']);

//     $foto = upload();
//     if( !$foto ) {
//         return false;
//     }

//     //cek username sudah ada atau belum
//     $result = mysqli_query($koneksi, "SELECT username FROM tb_user WHERE username = '$username' ");

//     if( mysqli_fetch_assoc($result) ) {
//         echo "<script>
//             alert('Username sudah ada!');
//           </script>";
//         return false;
//     }

    //cek konfirmasi password
//     if( $password !== $password2 ) {
//         echo "<script>
//             alert('Password not match!');
//           </script>";
//         return false;
//     }

//     //enkrip password
//     $password = password_hash($password, PASSWORD_DEFAULT);

//     //tambahkan user ke database
//     mysqli_query($koneksi, "INSERT INTO user VALUES('', '$nama','$email','$username', '$password','$foto', '$level')");

//     return mysqli_affected_rows($koneksi);

// }
// function upload()
// {

//     $namaFoto = $_FILES['foto']['name'];
//     $sizeFoto = $_FILES['foto']['size'];
//     $error = $_FILES['foto']['error'];
//     $tmpName = $_FILES['foto']['tmp_name'];

//     //cek apakah user upload foto / tidak
//     //$error === 4 artinya tidak ada file yg di upload
//     if( $error === 4 ){
//         echo "<script>
//                 alert('silahkan upload file terlebih dahulu!');
//               </script>";
//         return false;
//     }

//     //cek jika file lebih dari 1mb
//     if( $sizeFoto > 1000000 ) {
//         echo "<script>
//                 alert('ukuran file terlalu besar, Max 1 MB!');
//               </script>";
//         return false;
//     } 

//     //cek yg di upload apakah png, jpg atau jpeg
//     $ekstensiFotoValid = ['jpg', 'jpeg', 'png'];
//     $ekstensiFoto = explode('.', $namaFoto);
//     $ekstensiFoto = strtolower(end($ekstensiFoto));

//     if( !in_array($ekstensiFoto, $ekstensiFotoValid) ) {
//         echo "<script>
//                 alert('format file harus jpg, jpeg, atau png!');
//               </script>";
//         return false;
//     }

//     //jika lolos pengecekkan, foto siap di upload
//     //generate nama file baru 
//     $namaFotoBaru = uniqid();
//     $namaFotoBaru .= '.'; 
//     $namaFotoBaru .= $ekstensiFoto;

//     move_uploaded_file($tmpName, 'img/' . $namaFotoBaru);

//     return $namaFotoBaru;
// }

function pencarian($katakunci)
{
    $query = "SELECT * FROM redhat
                WHERE
				Subscription_Number LIKE '%$katakunci%' OR
				Subscription_Name LIKE '%$katakunci%' OR
				Contract_Number LIKE '%$katakunci%' OR
				Quantity LIKE '%$katakunci%' OR
				Start_Date LIKE '%$katakunci%' OR
				End_Date LIKE '%$katakunci%'
            ";
    
    // mengembalikkan fungsi yg sudah di buat(function query) di dalam fungsi pencarian
    return query($query);
}

function delete($id)
{
    global $koneksi; 

    mysqli_query($koneksi, "DELETE FROM redhat WHERE id = $id");
    return mysqli_affected_rows($koneksi);

}
