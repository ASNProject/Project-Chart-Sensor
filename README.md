# Project Chart Sensor

### Features
- [x] Show realtime data sensor
- [x] Show realtime chart
- [x] Download data to csv
- [x] API link to store data
- [x] Notification warning sensor 

### Clone Project
```
git clone https://github.com/ASNProject/Project-Chart-Sensor.git
```

### Run Project
- Save project to `/XAMPP/htdocs/`
- Import `chart_sensor.sql` from database folder to pypmyadmin/mysql
- Open browser, run `localhost/folder_project/index.php`
  - Example : `localhost/Project%20Chart%20Sensor/index.php`

### Use API 
```
index.php?sensor=sensor1&value=15
or
index.php?sensor=sensor2&value=15
or
index.php?sensor=sensor3&value=15
or
index.php?sensor=status&value=siaga2
```
- Example use API for ESP32
```C
#include <WiFi.h>
#include <HTTPClient.h>

const char *ssid = "your_SSID";
const char *password = "your_PASSWORD";
const char *serverUrl = "http://your_domain/index.php"; // Ganti dengan URL server Anda

void setup() {
  Serial.begin(115200);

  // Hubungkan ke WiFi
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connecting to WiFi...");
  }
  Serial.println("Connected to WiFi");
}

void loop() {
  // Data yang akan dikirim
  String sensorId = "sensor1";
  int value = 15;

  // Buat URL dengan parameter
  String url = serverUrl + "?sensor=" + sensorId + "&value=" + String(value);

  // Mulai permintaan HTTP
  HTTPClient http;
  http.begin(url);

  // Lakukan permintaan GET
  int httpCode = http.GET();

  // Cek apakah permintaan berhasil
  if (httpCode > 0) {
    Serial.printf("[HTTP] GET... code: %d\n", httpCode);

    // Baca respons dari server
    String payload = http.getString();
    Serial.println(payload);
  } else {
    Serial.printf("[HTTP] GET... failed, error: %s\n", http.errorToString(httpCode).c_str());
  }

  // Selesai dengan permintaan HTTP
  http.end();

  // Tunggu sebelum mengirim data lagi
  delay(5000);
}

```


### Screenshot
https://github.com/ASNProject/Project-Chart-Sensor/assets/49858542/72fcae8f-c419-4a5d-805c-5e603d9b4ccf


