<?php

$nilai = 85; // nilai awal

// BAGIAN 1: Menentukan grade
if ($nilai >= 90) {
    $grade = "A";
} elseif ($nilai >= 80) {
    $grade = "B";
} elseif ($nilai >= 70) {
    $grade = "C";
} elseif ($nilai >= 60) {
    $grade = "D";
} elseif ($nilai >= 0) {
    $grade = "E";
} else {
    $grade = "Tidak Valid";
}

echo "Nilai Anda: $nilai, Grade: $grade<br>";

// BAGIAN 2: Keterangan kelulusan
switch ($grade) {
    case "A":
    case "B":
        $ket = "Sangat Memuaskan, Anda Lulus!";
        break;
    case "C":
        $ket = "Cukup Memuaskan, Anda Lulus dengan Syarat.";
        break;
    case "D":
    case "E":
        $ket = "Mohon Maaf, Anda Tidak Lulus.";
        break;
    default:
        $ket = "Grade Tidak Dikenali.";
}

echo "Keterangan Kelulusan: $ket<br>";

// BAGIAN 3: Status bimbingan (ternary)
$status = ($grade == "D" || $grade == "E") 
          ? "Wajib Bimbingan" 
          : "Tidak Wajib Bimbingan";

echo "Status Bimbingan: $status";
?>
