# HeartRateMonitor

This is a simple project using the [Adafruit Heart Rate Educational Starter Pack](https://www.adafruit.com/products/1077?gclid=CjwKEAiAxfu1BRDF2cfnoPyB9jESJADF-MdJwvjkg8qcuvYmtvaqYXkemFJM0ppo-Ags-5W-KCsdyxoCu77w_wcB).

* heart_rate_monitor.py monitors the GPIO pin connected to the heart rate monitor, and writes a timestamp to the database for each heartbeat.
* hrm.php queries the database, and outputs JSON giving a count of how many beats occurred each minute.
* index.html displays a graph of the heart beat frequency.
* script.js is what actually requests the JSON and draws the graph.
* style.css makes everything look nice.

The last 3 files are from [http://bl.ocks.org/aogriffiths/7933339](http://bl.ocks.org/aogriffiths/7933339). The Javascript and HTML files were adapted somewhat for this project, but the CSS file is unchanged.

When loading index.html in a browser, a graph like this will be shown:

![Screenshot of Heart Rate Graph](https://raw.githubusercontent.com/jonkeller/HeartRateMonitor/master/hrm_screenshot.png)

To make the circuit:
* Connect the + and - of a 2-AA battery holder to a breadboard
* Connect the + and - of the heart rate receiver to the same rails
* Connect the third pin of the receiver to a pin of the Raspberry Pi. I used pin 23.
* Connect the ground rail to the ground of the Raspberry Pi.
* I also connected an LED, by also connecting the data pin to the + of the LED, and connecting the - pin of the LED to a resistor which is plugged into the ground rail.

Circuit photo:

![Circuit Photo](https://raw.githubusercontent.com/jonkeller/HeartRateMonitor/master/Circuit_Photo.jpg)

Video:

[![Project Video](http://img.youtube.com/vi/WC0Coatjfzg/0.jpg)](http://www.youtube.com/watch?v=WC0Coatjfzg "Video Title")

