// Copyright 2024 ariefsetyonugroho
// 
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
// 
//     http://www.apache.org/licenses/LICENSE-2.0
// 
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.

<?php
include 'server/db_connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['sensor'])) {
    $sensor = $_POST['sensor'];

    // Ambil data berdasarkan sensor
    $dataSensor = [];
    $timestamp = [];

    if ($sensor === 'sensor1') {
      $data = mysqli_query($koneksi, "SELECT * FROM sensor1");
    } elseif ($sensor === 'sensor2') {
      $data = mysqli_query($koneksi, "SELECT * FROM sensor2");
    } elseif ($sensor === 'sensor3') {
      $data = mysqli_query($koneksi, "SELECT * FROM sensor3");
    }

    while ($d = mysqli_fetch_array($data)) {
      $dataSensor[] = $d['value'];
      $timestamp[] = $d['timestamp'];
    }

    // Buat file CSV
    $csvFileName = $sensor . '_data.csv';
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $csvFileName . '"');

    // Output header CSV
    $output = fopen('php://output', 'w');
    fputcsv($output, array('Timestamp', 'Value'));

    // Output data CSV
    foreach ($dataSensor as $key => $value) {
      fputcsv($output, array($timestamp[$key], $value));
    }

    fclose($output);
    exit();
  }
}
?>
