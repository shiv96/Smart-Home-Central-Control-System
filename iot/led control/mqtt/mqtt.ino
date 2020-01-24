#include<CayenneMQTTESP8266.h>
#define CAYENNE_DEBUG
#define CAYENNE_PRINT Serial
char ssid[]="Vethics Studio";
char password[]="Truevalue123!";

char username[]="982b8da0-342b-11e9-809d-0f8fe4c30267";
char mqtt_password[]="1b8a2d9dffebd658fbcace1c6737314550561f58";
char client_id[]="bad30360-342b-11e9-a056-c5cffe7f75f9";
void setup() {
  // put your setup code here, to run once:
  Cayenne.begin(username,mqtt_password,client_id,ssid,password);
 // pinMode(d1,OUTPUT);
 // digitalWrite(d,HIGH);
   pinMode(D1, OUTPUT);
    digitalWrite(D1, 0); 
}

void loop() {
  // put your main code here, to run repeatedly:
Cayenne.loop();
//Cayenne.virtualWrite(1,)
}

CAYENNE_IN(0)
{
 digitalWrite(D1, !getValue.asInt()); 
}
