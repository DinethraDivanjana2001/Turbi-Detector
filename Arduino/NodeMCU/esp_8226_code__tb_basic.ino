const int trigPin = 8;
const int echoPin = 9;
const int solenoid1Pin = 10;
const int solenoid2Pin = 11;
const float distanceLimit = 100.0;
const int buzzerPin = 12;
int count = 1;

void setup() {
  pinMode(trigPin, OUTPUT);
  pinMode(echoPin, INPUT);
  pinMode(solenoid1Pin, OUTPUT);
  pinMode(solenoid2Pin, OUTPUT);
  pinMode(buzzerPin, OUTPUT);
  
  digitalWrite(solenoid1Pin, LOW);
  digitalWrite(solenoid2Pin, HIGH);
  
  Serial.begin(9600);
}

void loop() {
  float distance = measureDistance();
  Serial.println(distance);

  if (distance <= distanceLimit && count <= 3) {
    controlSolenoid1();
    controlSolenoid2();
    delay(5000); // Wait for 5 seconds
    count++;
    triggerBuzzer();
  }
  else if (distance > distanceLimit && count > 3) {
    // After a long time, if water is good, open the line
    controlSolenoid1();
    controlSolenoid2();
    count = 1;
  }
  else if (distance > distanceLimit && count < 3) {
    // If water is good during  counting, reset the count
    controlSolenoid2();
    count = 1;
  }
  else if (count == 3) {
    // If count is 3, stop the process and send a message or sound the buzzer
    controlSolenoid1();
    soundBuzzer();
  }
  
  delay(2000); // Adjust loop time as needed
}

float measureDistance() {
  digitalWrite(trigPin, LOW);
  delayMicroseconds(2);
  digitalWrite(trigPin, HIGH);
  delayMicroseconds(10);
  digitalWrite(trigPin, LOW);

  long duration = pulseIn(echoPin, HIGH);
  return duration / 58.0; // Convert to centimeters
}

void controlSolenoid1() {
  digitalWrite(solenoid1Pin, HIGH); // Open solenoid 1
  delay(1000); // Signal time to control the solenoid
  digitalWrite(solenoid1Pin, LOW);
}

void controlSolenoid2() {
  digitalWrite(solenoid2Pin, HIGH); // Open solenoid 2
  delay(1000); // Signal time to control the solenoid
  digitalWrite(solenoid2Pin, LOW);
}

void triggerBuzzer() {
  digitalWrite(buzzerPin, HIGH);
  delay(1000);
  digitalWrite(buzzerPin, LOW);
}

void soundBuzzer() {
  digitalWrite(buzzerPin, HIGH);
  delay(3000); // Longer sound duration to indicate stopping process
  digitalWrite(buzzerPin, LOW);
}
