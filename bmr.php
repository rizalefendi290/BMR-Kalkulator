<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $activity = $_POST['activity']; // Ambil tingkat aktivitas

    if ($gender == 'male') {
        $bmr = 10 * $weight + 6.25 * $height - 5 * $age + 5;
    } else {
        $bmr = 10 * $weight + 6.25 * $height - 5 * $age - 161;
    }

    // Hitung kebutuhan kalori berdasarkan tingkat aktivitas
    $calories = $bmr * $activity;

    echo "BMR Anda adalah: " . $bmr . " kalori/hari<br>";
    echo "Kebutuhan kalori harian berdasarkan aktivitas adalah: " . $calories . " kalori/hari";
}
?>
