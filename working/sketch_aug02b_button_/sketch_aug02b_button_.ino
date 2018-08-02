#define D2 4 // Map NodeMCU to ESP8266 pin
#define button D2
#define pressed HIGH
#define D0 16 //Map NodeMCU pin to ESP8266 Module
#define LED D0 // Define LED pin

void setup()
{
pinMode(LED,OUTPUT);
Serial.begin(9600);
pinMode(button,INPUT_PULLUP);
}

void loop()
{
bool ReadSwitch = digitalRead(button);
if(ReadSwitch == pressed)
  {digitalWrite(LED,HIGH);
Serial.println("Pressed Switch.");
delay(500);
}
else {
digitalWrite(LED,LOW);

delay(500);
}
}
