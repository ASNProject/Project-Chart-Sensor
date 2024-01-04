<!--
 Copyright 2024 ariefsetyonugroho
 
 Licensed under the Apache License, Version 2.0 (the "License");
 you may not use this file except in compliance with the License.
 You may obtain a copy of the License at
 
     http://www.apache.org/licenses/LICENSE-2.0
 
 Unless required by applicable law or agreed to in writing, software
 distributed under the License is distributed on an "AS IS" BASIS,
 WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 See the License for the specific language governing permissions and
 limitations under the License.
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
      .download-button {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: 20px; /* Sesuaikan dengan margin bawah yang diinginkan */
      }
    </style>
  </head>
  <body>
    <div class="px-8 py-8">
      <h1 class="text-3xl font-bold text-teal-700">Chart Sensor</h1>
      <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">
          <!-- Column -->
          <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">
              <header
                class="flex items-center justify-between leading-tight p-2 md:p-4"
              >
                <h1 class="text-lg text-teal-700 font-bold">Sensor 1</h1>
                <p id="time1" class="text-grey-darker text-sm text-gray-400">11/1/19</p>
              </header>
              <h1 id="sensorValue1" class="text-center text-teal-700 text-5xl font-bold">
                0 cm
              </h1>
              <footer
                class="flex items-center justify-between leading-none p-2 md:p-4"
              >
                <p class="text-gray-400 text-xs italic">
                  ** Nilai sensor diupdate setiap ada pembaruan dari database
                </p>
              </footer>
            </article>
            <!-- END Article -->
          </div>
          <!-- END Column -->

          <!-- Column -->
          <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">
              <header
                class="flex items-center justify-between leading-tight p-2 md:p-4"
              >
                <h1 class="text-lg text-teal-700 font-bold">Sensor 2</h1>
                <p id="time2" class="text-grey-darker text-sm text-gray-400">11/1/19</p>
              </header>

              <h1 id="sensorValue2" class="text-center text-teal-700 text-5xl font-bold">
                0 cm
              </h1>

              <footer
                class="flex items-center justify-between leading-none p-2 md:p-4"
              >
                <p class="text-gray-400 text-xs italic">
                  ** Nilai sensor diupdate setiap ada pembaruan dari database
                </p>
              </footer>
            </article>
            <!-- END Article -->
          </div>
          <!-- END Column -->

          <!-- Column -->
          <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">
            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">
              <header
                class="flex items-center justify-between leading-tight p-2 md:p-4"
              >
                <h1 class="text-lg text-teal-700 font-bold">Sensor 3</h1>
                <p id="time3" class="text-grey-darker text-sm text-gray-400">11/1/19</p>
              </header>

              <h1 id="sensorValue3" class="text-center text-teal-700 text-5xl font-bold">
                0 cm
              </h1>

              <footer
                class="flex items-center justify-between leading-none p-2 md:p-4"
              >
                <p class="text-gray-400 text-xs italic">
                  ** Nilai sensor diupdate setiap ada pembaruan dari database
                </p>
              </footer>
            </article>
            <!-- END Article -->
          </div>
          <!-- END Column -->
        </div>
        <div id="hs-single-area-chart"></div>
      </div>
    </div>
    <div
      class="container my-1 mx-auto px-1 md:px-1 items-center justify-center text-center"
    >
      <div class="py-3 px-3 bg-gray-50 font-bold text-teal-700">
        Chart Sensor 1
      </div>
      <div class="relative flex-col">
        <canvas class="p-10" id="chartLine1"></canvas>
        <button
          id="downloadButton1"
          class="mt-3 font-bold text-white bg-blue-400 rounded-lg px-5 py-3 text-xs mx-auto"
        >
          Download
        </button>
        <p class="text-gray-400 text-xs italic">
          ** Download data dalam bentuk csv
        </p>
      </div>
    </div>

    <div
      class="container my-10 mx-auto px-1 md:px-1 items-center justify-center text-center"
    >
      <div class="py-3 px-3 bg-gray-50 font-bold text-teal-700">
        Chart Sensor 2
      </div>
      <div class="relative flex-col items-center justify-center">
        <canvas class="p-10" id="chartLine2"></canvas>
        <button
          id="downloadButton2"
          class="mt-3 font-bold text-white bg-blue-400 rounded-lg px-5 py-3 text-xs mx-auto"
        >
          Download
        </button>
        <p class="text-gray-400 text-xs italic">
          ** Download data dalam bentuk csv
        </p>
      </div>
    </div>

    <div
      class="container my-10 mx-auto px-1 md:px-1 items-center justify-center text-center"
    >
      <div class="py-3 px-3 bg-gray-50 font-bold text-teal-700">
        Chart Sensor 3
      </div>
      <div class="relative flex-col items-center justify-center">
        <canvas class="p-10" id="chartLine3"></canvas>
        <button
          id="downloadButton3"
          class="mt-3 font-bold text-white bg-blue-400 rounded-lg px-5 py-3 text-xs mx-auto"
        >
          Download
        </button>
        <p class="text-gray-400 text-xs italic">
          ** Download data dalam bentuk csv
        </p>
      </div>
    </div>

    <!-- Required chart.js-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Chart line -->
    <?php
      include 'server/db_connection.php';
    
      // GET DATA UNTUK SENSOR 1
      $dataSensor1 = [];
      $timestamp1 = [];
      $data = mysqli_query($koneksi, "SELECT * FROM sensor1");
      while ($d = mysqli_fetch_array($data)) {
        $dataSensor1[] = $d['value']; 
        $timestamp1[] = $d['timestamp'];// Assuming 'value' is the column name in your database
      }
      $lastValueSensor1 = end($dataSensor1);
      $lastTimestampSensor1 = end($timestamp1);

      // GET DATA UNTUK SENSOR 2
      $dataSensor2 = [];
      $timestamp2 = [];
      $data2 = mysqli_query($koneksi, "SELECT * FROM sensor2");
      while ($d = mysqli_fetch_array($data2)) {
        $dataSensor2[] = $d['value']; 
        $timestamp2[] = $d['timestamp'];// Assuming 'value' is the column name in your database
      }
      $lastValueSensor2 = end($dataSensor2);
      $lastTimestampSensor2 = end($timestamp2);

      // GET DATA UNTUK SENSOR 3
      $dataSensor3 = [];
      $timestamp3 = [];
      $data3 = mysqli_query($koneksi, "SELECT * FROM sensor3");
      while ($d = mysqli_fetch_array($data3)) {
        $dataSensor3[] = $d['value']; 
        $timestamp3[] = $d['timestamp'];// Assuming 'value' is the column name in your database
      }
      $lastValueSensor3 = end($dataSensor3);
      $lastTimestampSensor3 = end($timestamp3);

      // DOWNLOAD CSV

    ?>
    <script>
    // Format Time
    function formatDate(timestamp) {
    const date = new Date(timestamp);
    const hours = date.getHours();
    const minutes = date.getMinutes();
    const seconds = date.getSeconds();

    // Mengonversi ke format 12 jam
    const formattedTime = `${hours % 12 || 12}:${minutes < 10 ? '0' : ''}${minutes}:${seconds < 10 ? '0' : ''}${seconds} ${hours >= 12 ? 'PM' : 'AM'}`;

      return formattedTime;
    }

    function formatTimestampsToTime(timestamps) {
      return timestamps.map(timestamp => {
    const date = new Date(timestamp);
      return date.toLocaleTimeString();
    });
    }


    // MENAMPILKAN DATA UNTUK SENSOR 1
      document.getElementById('sensorValue1').textContent = '<?php echo $lastValueSensor1; ?> cm';
      document.getElementById('time1').textContent = formatDate('<?php echo $lastTimestampSensor1; ?>');

      const formattedTimestamps = <?php echo json_encode($timestamp1); ?>;
      const formattedDates = formatTimestampsToTime(formattedTimestamps);
      const labels = formattedDates;
      const data1 = {
        labels: labels,
        datasets: [
          {
            label: "Data sensor 1",
            backgroundColor: "hsl(252, 82.9%, 67.8%)",
            borderColor: "hsl(252, 82.9%, 67.8%)",
            data: <?php echo json_encode($dataSensor1); ?>,
          },
        ],
      };

      // MENAMPILKAN DATA UNTUK SENSOR 2
      document.getElementById('sensorValue2').textContent = '<?php echo $lastValueSensor2; ?> cm';
      document.getElementById('time2').textContent = formatDate('<?php echo $lastTimestampSensor2; ?>');

      const formattedTimestamps2 = <?php echo json_encode($timestamp2); ?>;
      const formattedDate2 = formatTimestampsToTime(formattedTimestamps2);
      const data2 = {
        labels: formattedDate2,
        datasets: [
          {
            label: "Data sensor 2",
            backgroundColor: "hsl(120, 82.9%, 67.8%)",
            borderColor: "hsl(120, 82.9%, 67.8%)",
            data: <?php echo json_encode($dataSensor2); ?>,
          },
        ],
      };

      // MENAMPILKAN DATA UNTUK SENSOR 3
      document.getElementById('sensorValue3').textContent = '<?php echo $lastValueSensor3; ?> cm';
      document.getElementById('time3').textContent = formatDate('<?php echo $lastTimestampSensor3; ?>');

      const formattedTimestamps3 = <?php echo json_encode($timestamp3); ?>;
      const formattedDates3 = formatTimestampsToTime(formattedTimestamps3); 
      const data3 = {
        labels: formattedDates3,
        datasets: [
          {
            label: "Data sensor 3",
            backgroundColor: "hsl(30, 82.9%, 67.8%)",
            borderColor: "hsl(30, 82.9%, 67.8%)",
            data: <?php echo json_encode($dataSensor3); ?>,
          },
        ],
      };

      // SETTING CHART
      const configLineChart1 = {
        type: "line",
        data: data1,
        options: {},
      };

      const configLineChart2 = {
        type: "line",
        data: data2,
        options: {},
      };

      const configLineChart3 = {
        type: "line",
        data: data3,
        options: {},
      };

      var chartLine1 = new Chart(
        document.getElementById("chartLine1"),
        configLineChart1
      );

      var chartLine2 = new Chart(
        document.getElementById("chartLine2"),
        configLineChart2
      );

      var chartLine3 = new Chart(
        document.getElementById("chartLine3"),
        configLineChart3
      );
      
      // DOWNLOAD DATA
      function downloadSensorData1() {
      // Create a form element
      var form = document.createElement('form');
      form.action = 'download.php'; // Replace 'download.php' with the actual path to your PHP script
      form.method = 'POST';

      // Add an input field for identifying which sensor's data to download
      var input = document.createElement('input');
      input.type = 'hidden';
      input.name = 'sensor';
      input.value = 'sensor1'; // Use this value to identify which sensor's data to download in your PHP script
      form.appendChild(input);

      // Append the form to the body
      document.body.appendChild(form);

      // Submit the form
      form.submit();

      // Remove the form from the body
      document.body.removeChild(form);
    }
    // Add a click event listener to the download button for Sensor 1
    document.getElementById('downloadButton1').addEventListener('click', downloadSensorData1);
    function downloadSensorData2() {
    var form = document.createElement('form');
    form.action = 'download.php';
    form.method = 'POST';

    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'sensor';
    input.value = 'sensor2';
    form.appendChild(input);

    document.body.appendChild(form);
    form.submit();
    document.body.removeChild(form);
  }

  document.getElementById('downloadButton2').addEventListener('click', downloadSensorData2);

  // Fungsi untuk memicu unduhan untuk Sensor 3
  function downloadSensorData3() {
    var form = document.createElement('form');
    form.action = 'download.php';
    form.method = 'POST';

    var input = document.createElement('input');
    input.type = 'hidden';
    input.name = 'sensor';
    input.value = 'sensor3';
    form.appendChild(input);

    document.body.appendChild(form);
    form.submit();
    document.body.removeChild(form);
  }

  document.getElementById('downloadButton3').addEventListener('click', downloadSensorData3);
    </script>
  </body>
</html>
