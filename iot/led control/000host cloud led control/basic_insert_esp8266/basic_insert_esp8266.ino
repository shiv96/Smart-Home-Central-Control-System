#include "ESP8266WiFi.h"
#include <MySQL_Connection.h>
#include <MySQL_Cursor.h>


IPAddress server_addr(127,0,0,1);  // IP of the MySQL *server* here
char user[] = "bob";              // MySQL user login username
char password[] = "";        // MySQL user login password

const char* SSID = "Vethics Studio";         // Your network SSID
const char* PASS = "Truevalue123!";

// Sample query
char INSERT_SQL[] = "INSERT INTO test_arduino.hello_arduino (message) VALUES ('Hello, Arduino!')";

WiFiClient client;
MySQL_Connection conn((Client *)&client);


void setup() {
  Serial.begin(115200);
  while (!Serial); // wait for serial port to connect

  Serial.print("Connecting to "+*SSID);
  WiFi.begin(SSID, PASS);
  Serial.println("going into wl connect");

  while (WiFi.status() != WL_CONNECTED) //not connected,  ...waiting to connect
    {
      delay(1000);
      Serial.print(".");
    }

  Serial.println("wl connected");
  Serial.println("");
  Serial.println("Credentials accepted! Connected to wifi\n ");
  Serial.println(WiFi.localIP());
  Serial.println("");


  if (conn.connect(server_addr, 3306, user, password)) {
    delay(1000);
  }
  else
    Serial.println("Connection failed.");
}


void loop() {
  delay(2000);

  Serial.println("Recording data.");

  // Initiate the query class instance
  MySQL_Cursor *cur_mem = new MySQL_Cursor(&conn);
  // Execute the query
  cur_mem->execute(INSERT_SQL);
  // Note: since there are no results, we do not need to read any data
  // Deleting the cursor also frees up memory used
  delete cur_mem;
}
