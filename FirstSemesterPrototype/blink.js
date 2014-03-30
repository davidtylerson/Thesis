var five = require("johnny-five"),
    board = new five.Board();

board.on("ready", function() {
  // Create an Led on pin 11
  var led = new five.Led(11);

  // Strobe the pin on/off, defaults to 100ms phases
  led.strobe();
});