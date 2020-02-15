#include "ThingSpeak.h"
#include <ESP8266WiFi.h>

const char* ssid="2nd floor";
const char* password="9591604111@2";
unsigned long channel=992259;
unsigned int led1=1;
WiFiClient client;

void setup() {
  // put your setup code here, to run once:
Serial.begin(115200);
delay(100);
pinMode(D1,OUTPUT);
digitalWrite(D1,0);
 Serial.println();
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);
  
  WiFi.begin(ssid, password);
  
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
 
  Serial.println("");
  Serial.println("WiFi connected");  
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
  Serial.print("Netmask: ");
  Serial.println(WiFi.subnetMask());
  Serial.print("Gateway: ");
  Serial.println(WiFi.gatewayIP());
  ThingSpeak.begin(client);
}

void loop() {
  int led=ThingSpeak.readFloatField(channel, led1);
  if(led==1)
  {
    digitalWrite(D1,1);
  }
  else
  {
    digitalWrite(D1,0);
  }
 
}
