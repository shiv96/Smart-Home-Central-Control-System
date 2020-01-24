#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <ArduinoJson.h>

// WiFi Parameters
const char* ssid = "Vethics Studio";
const char* password = "Truevalue123!";

void setup() {
  Serial.begin(115200);
  WiFi.begin(ssid, password);
 
  while (WiFi.status() != WL_CONNECTED) {
    delay(1000);
    Serial.println("Connecting...");
  }
}

void loop() {
  // Check WiFi Status
  if (WiFi.status() == WL_CONNECTED) {
    Serial.println("Connected to Wifi");
    HTTPClient http;  //Object of class HTTPClient
    http.begin("http://localhost/ardjson/index.php");
    int httpCode = http.GET();
    Serial.println(" ");
   Serial.println(httpCode);
    //Check the returning code                                                                  
    if (httpCode > 0) {
      // Parsing
            const size_t capacity = JSON_OBJECT_SIZE(1) + 20;
            DynamicJsonBuffer jsonBuffer(capacity);
            JsonObject& root = jsonBuffer.parseObject(json);
            const char* name = root["name"];
      Serial.println("Name:");
      Serial.println(name);
    }
    http.end();   //Close connection
  }
  // Delay
  delay(60000);
}
