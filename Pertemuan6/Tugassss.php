<?php

// Sample data (you can replace this with database query)
$students = [
    ['nama' => 'Andi', 'umur' => 15, 'kelas' => '10A', 'alamat' => 'Malang'],
    ['nama' => 'Siti', 'umur' => 16, 'kelas' => '10B', 'alamat' => 'Batu'],
    ['nama' => 'Budi', 'umur' => 15, 'kelas' => '10A', 'alamat' => 'Dinoyo'],
    ['nama' => 'Anton', 'umur' => 25, 'kelas' => '15A', 'alamat' => 'Dinoyo'],
];

// Calculate average age
$total_age = 0;
foreach ($students as $student) {
    $total_age += $student['umur'];
}
$average_age = $total_age / count($students);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $(".container_atas").click(function() {
                $(".container").slideToggle("slow");
            });
        });
    </script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f0f8ff;
        }
        .container_atas {
            border: solid 3px black;
        }
        .container {
            background-color: #e0ffe0;
            padding: 20px;
            border-radius: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f0f8ff;
        }
        h1 {
            color: #333;
        }
        .average {
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
        <div class="container_atas">
            <h1>Data Siswa</h1>
            <div>Click to show database</div>
        </div>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $student): ?>
                <tr>
                    <td><?php echo htmlspecialchars($student['nama']); ?></td>
                    <td><?php echo htmlspecialchars($student['umur']); ?></td>
                    <td><?php echo htmlspecialchars($student['kelas']); ?></td>
                    <td><?php echo htmlspecialchars($student['alamat']); ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <div class="average">
            Rata-rata Umur Siswa: <?php echo number_format($average_age, 2); ?> tahun
        </div>
    </div>
</body>
</html>