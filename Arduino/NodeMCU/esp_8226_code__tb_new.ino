#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClientSecure.h>
#include <Arduino_JSON.h>
#include <WiFiManager.h>
#include <DNSServer.h>

#define sol1 D0  // main stream solonoid
#define sol2 D5  // mud stream solonoid
#define sensor D6
#define LED LED_BUILTIN
#define resetPin D7  // just put some pin number should change
#define open HIGH
#define close LOW                          // should change acccording to slonoids
#define HOST "nmgtest2.000webhostapp.com"  // Enter HOST URL without "http:// "  and "/" at the end of URL
// #define WIFI_SSID "Android"                // WIFI SSID here
// #define WIFI_PASSWORD "12345678910"        // WIFI password here

// Declare global variables which will be uploaded to serve

void openMainStream();
void openMudStream();
void terminate();
void blink(int pin, int loops, int time);
void restart();
void setBreakAfterConfig(boolean shouldBreak);

int count = 0;
bool isInOperation = true;
int numOfWaits = 2;     // number of outflows before terminte
int waitTimeMud = 10;   // time to allow flow mud
int waitTimeRead = 60;  // time to wait until next reading
JSONVar myObject = "undefined";

void setup() {

  Serial.begin(115200);
  pinMode(A0, INPUT);
  Serial.println("Communication Started \n\n");
  delay(1000);


  pinMode(LED_BUILTIN, OUTPUT);  // initialize built in led on the board



  WiFiManager wifiManager;
  wifiManager.autoConnect("Turbi detector");

  Serial.println("connected :)");

  delay(30);

  pinMode(sol1, OUTPUT);
  pinMode(sol2, OUTPUT);
  pinMode(LED, OUTPUT);

  pinMode(sensor, INPUT);
  pinMode(resetPin, INPUT);

  openMainStream();
  blink(LED, 20, 50);
  isInOperation = true;
}

void loop() {
  if (isInOperation) {
    bool sense;
    sense = digitalRead(sensor);
    Serial.println(sense);

    if (!sense) {
      Serial.println("Went to loop");
      if (count < numOfWaits) {
        openMudStream();
        count++;
        // Here goes the code to alert the user about mud flow

        if (WiFi.status() != WL_CONNECTED) {
          WiFiManager wifiManager;

          wifiManager.autoConnect("Turbi Detector");

          Serial.println("connected :)");
          wifiManager.setBreakAfterConfig(true);
        }
        HTTPClient http;  // http object of clas HTTPClient
        // Convert integer variables to string
        WiFiClient client;

        String postData = "did=100121&err=" + (String)count;
        http.begin(client, "http://nmgtest2.000webhostapp.com/Arduino/errorWrite.php");  // Connect to host where MySQL databse is hosted
        http.addHeader("Content-Type", "application/x-www-form-urlencoded");             //Specify content-type header

        int httpCode = http.POST(postData);  // Send POST request to php file and store server response code in variable named httpCode
        Serial.println("Values are, did = 100121");
        if (httpCode == 200) {
          Serial.println(httpCode);
          String webpage = http.getString();  // Get html webpage output and store it in a string                                              //Serial.println(webpage + "\n");
        }

        // if failed to connect then return and restart

        else {
          Serial.println(httpCode);
          Serial.println("Failed to upload values. \n");
          http.end();
          return;
        }
        delay(waitTimeMud * 1000);

      } else {
        terminate();
        isInOperation = false;
        blink(LED, 20, 50);
        // Here goes the code to alert the user about mud flow

        if (WiFi.status() != WL_CONNECTED) {
          WiFiManager wifiManager;

          wifiManager.autoConnect("Turbi detector");

          Serial.println("connected :)");
          wifiManager.setBreakAfterConfig(true);
        }

        HTTPClient http;  // http object of clas HTTPClient
        // Convert integer variables to string
        WiFiClient client;

        String postData = "did=100121&err=3";
        http.begin(client, "http://nmgtest2.000webhostapp.com/Arduino/errorWrite.php");  // Connect to host where MySQL databse is hosted
        http.addHeader("Content-Type", "application/x-www-form-urlencoded");             //Specify content-type header

        int httpCode = http.POST(postData);  // Send POST request to php file and store server response code in variable named httpCode
        Serial.println("Values are, did = 100121");
        if (httpCode == 200) {
          Serial.println(httpCode);
          String webpage = http.getString();  // Get html webpage output and store it in a string
        }

        // if failed to connect then return and restart

        else {
          Serial.println(httpCode);
          Serial.println("Failed to upload values. \n");
          http.end();
          return;
        }  //change the speed and number of blink when terminte
        // Here goes the code to alert the user about termination
      }
    } else {
      openMainStream();
      count = 0;
      delay(1000);
    }
  }

  else {
    bool reset;
    Serial.println("reset" + (String)reset);
    reset = digitalRead(resetPin);

    if (WiFi.status() != WL_CONNECTED) {
      WiFiManager wifiManager;

      wifiManager.autoConnect("Turbi detector");

      Serial.println("connected :)");
      wifiManager.setBreakAfterConfig(true);
    }

    HTTPClient http;  // http object of clas HTTPClient
    String postData = "did=100121";
    WiFiClient client;

    http.begin(client, "http://nmgtest2.000webhostapp.com/Arduino/dbreadphp.php");  // Connect to host where MySQL databse is hosted
    http.addHeader("Content-Type", "application/x-www-form-urlencoded");            //Specify content-type header

    int httpCode = http.POST(postData);  // Send POST request to php file and store server response code in variable named httpCode
    Serial.println("Values are, did = 100121");

    // if connection eatablished then do this



    if (httpCode == 200) {
      Serial.println(httpCode);
      String webpage = http.getString();  // Get html webpage output and store it in a string
      myObject = JSON.parse(webpage);

      Serial.println("sol 1 = " + (String)myObject["sol_1"]);
      Serial.println("sol 2 = " + (String)myObject["sol_2"]);
      if (JSON.typeof(myObject) != "undefined") {
        if ((String)myObject["sol_1"] == "1" && (String)myObject["sol_2"] == "0") {
          reset = 1;
          Serial.println((String)reset + "1");
        }

        Serial.println((String)reset + "2");
      }

    }

    // if failed to connect then return and restart

    else {
      Serial.println(httpCode);
      Serial.println("Failed to upload values. \n");
      http.end();
      return;
    }

    if (reset) {
      restart();
    } else {
      delay(1000);  // we should ask user to hold push button 10 second then at least at one point we can get the reset input
    }
  }
}

// functions defines

void openMainStream() {
  digitalWrite(sol1, close);
  digitalWrite(sol2, close);
}

void openMudStream() {
  digitalWrite(sol1, open);
  digitalWrite(sol2, open);
}

void terminate() {
  digitalWrite(sol1, close);
  digitalWrite(sol2, open);
}

void blink(int pin, int loops, int time) {
  for (int i = 0; i < loops; i++) {
    digitalWrite(pin, HIGH);
    delay(time);
    digitalWrite(pin, LOW);
    delay(time);
  }
}

void restart() {
  openMainStream();
  count = 0;
  isInOperation = true;
  blink(LED, 10, 200);
}
