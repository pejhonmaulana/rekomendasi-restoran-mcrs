<?php
include 'koneksi.php';
// Mendapatkan ID pengguna saat ini
$userId = $currentUser->id;

// Mendapatkan semua penilaian pengguna saat ini pada tabel 'ratings' beserta data hunian yang terkait
$getUnRatings = $pdo->query("SELECT * FROM tb_rating WHERE id_user = $userId")->fetchAll(PDO::FETCH_ASSOC);

// Mendapatkan semua penilaian selain dari pengguna saat ini pada tabel 'ratings', beserta data pengguna yang terkait, dan mengelompokkannya berdasarkan ID pengguna
$getURatings = $pdo->query("SELECT * FROM tb_rating WHERE id_user != $userId")->fetchAll(PDO::FETCH_ASSOC);
$getURatings = array_reduce($getURatings, function($carry, $item) {
    $carry[$item['id_user']][] = $item;
    return $carry;
}, []);
?>