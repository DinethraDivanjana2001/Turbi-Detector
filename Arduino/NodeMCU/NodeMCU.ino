/* Code Written by Rishi Tiwari
 *  Website:- https://tricksumo.com
*/



#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClientSecure.h>
#include <Arduino_JSON.h>

// Update HOST URL here

#define HOST "nmgtest2.000webhostapp.com"  // Enter HOST URL without "http:// "  and "/" at the end of URL

#define WIFI_SSID "Android"          // WIFI SSID here
#define WIFI_PASSWORD "12345678910"  // WIFI password here

// Declare global variables which will be uploaded to server

int val = 1;
int val2 = 99;

String sendval, sendval2, postData;


void setup() {


  Serial.begin(115200);
  pinMode(A0, INPUT);
  Serial.println("Communication Started \n\n");
  delay(1000);


  pinMode(LED_BUILTIN, OUTPUT);  // initialize built in led on the board



  WiFi.mode(WIFI_STA);
  WiFi.begin(WIFI_SSID, WIFI_PASSWORD);  //try to connect with wifi
  Serial.print("Connecting to ");
  Serial.print(WIFI_SSID);
  while (WiFi.status() != WL_CONNECTED) {
    Serial.print(".");
    delay(500);
  }

  Serial.println();
  Serial.print("Connected to ");
  Serial.println(WIFI_SSID);
  Serial.print("IP Address is : ");
  Serial.println(WiFi.localIP());  //print local IP address

  delay(30);
}



void loop() {

  HTTPClient http;  // http object of clas HTTPClient
  postData = "did=100121";
  WiFiClient client;

  http.begin(client, "http://nmgtest2.000webhostapp.com/Arduino/dbreadphp.php");  // Connect to host where MySQL databse is hosted
  http.addHeader("Content-Type", "application/x-www-form-urlencoded");            //Specify content-type header

  int httpCode = http.POST(postData);  // Send POST request to php file and store server response code in variable named httpCode
  Serial.println("Values are, did = 100121");

  // if connection eatablished then do this
  if (httpCode == 200) {
    Serial.println(httpCode);
    String webpage = http.getString();  // Get html webpage output and store it in a string
    JSONVar myObject = JSON.parse(webpage);

    Serial.println("sol 1 = " + (String)myObject["sol_1"]);
    Serial.println("sol 2 = " + (String)myObject["sol_2"]);

  }

  // if failed to connect then return and restart

  else {
    Serial.println(httpCode);
    Serial.println("Failed to upload values. \n");
    http.end();
    return;
  }


  delay(500);
  digitalWrite(LED_BUILTIN, LOW);
  delay(500);
  digitalWrite(LED_BUILTIN, HIGH);

  // Incrementing value of variables
}
