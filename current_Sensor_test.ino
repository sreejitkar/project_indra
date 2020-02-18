#include <dummy.h>



/* 
**  Connect the ESP8266 unit to an existing WiFi access point
**  For more information see http://42bots.com
*/
#include "ThingSpeak.h"
#include "ESP8266WiFi.h"
WiFiServer server(80);
WiFiClient client;
unsigned long myChannelNumber = 992259; //Your Channel Number (Without Brackets)
int val;
const char * myWriteAPIKey = "9VV7F5VS2UX3JF9G"; //Your Write API Key
const char* ssid = "2nd floor"; //replace this with your WiFi network name
const char* password = "9591604111@2"; //replace this with your WiFi network password
void setup()
{
  Serial.begin(9600);
  delay(10);
 
  WiFi.begin(ssid, password);

  Serial.println();
  Serial.print("Connecting");
  while (WiFi.status() != WL_CONNECTED)
  {
    delay(500);
    Serial.print(".");
  }

  Serial.println("success!");
  Serial.print("IP Address is: ");
  Serial.println(WiFi.localIP());
  server.begin();
  Serial.println("Server Started");
  Serial.println("connect to ");
  Serial.println(WiFi.localIP());
  ThingSpeak.begin(client);
  
}

void loop() {
unsigned int x=0;
float AcsValue=0.0,Samples=0.0,AvgAcs=0.0,AcsValueF=0.0;

  for (int x = 0; x < 150; x++){ //Get 150 samples
  AcsValue = analogRead(A0);     //Read current sensor values   
  Samples = Samples + AcsValue;  //Add samples together
  delay (3); // let ADC settle before next sample 3ms
}
AvgAcs=Samples/150.0;//Taking Average of Samples

//((AvgAcs * (5.0 / 1024.0)) is converitng the read voltage in 0-5 volts
//2.5 is offset(I assumed that arduino is working on 5v so the viout at no current comes
//out to be 2.5 which is out offset. If your arduino is working on different voltage than 
//you must change the offset according to the input voltage)
//0.185v(185mV) is rise in output voltage when 1A current flows at input
AcsValueF = (2.5 - (AvgAcs * (5.0 / 1024.0)) );

Serial.println(((AvgAcs * (5.0 / 1024.0))- 2.63)*1000);//Print the read current on Serial monitor
ThingSpeak.writeField(myChannelNumber, 1,AcsValueF, myWriteAPIKey); //Update in ThingSpeak
delay(50);
  }
