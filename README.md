# HeartRateMonitor

This is a simple project using the [Adafruit Heart Rate Educational Starter Pack](https://www.adafruit.com/products/1077?gclid=CjwKEAiAxfu1BRDF2cfnoPyB9jESJADF-MdJwvjkg8qcuvYmtvaqYXkemFJM0ppo-Ags-5W-KCsdyxoCu77w_wcB).

* heart_rate_monitor.py monitors the GPIO pin connected to the heart rate monitor, and writes a timestamp to the database for each heartbeat.
* hrm.php queries the database, and outputs JSON giving a count of how many beats occurred each minute.
* index.html displays a graph of the heart beat frequency.
* script.js is what actually requests the JSON and draws the graph.
* style.css makes everything look nice.

The last 3 files are from [http://bl.ocks.org/aogriffiths/7933339](http://bl.ocks.org/aogriffiths/7933339). The Javascript and HTML files were adapted somewhat for this project, but the CSS file is unchanged.

When loading index.html in a browser, a graph like this will be shown:

![Alt text](https://raw.githubusercontent.com/jonkeller/HeartRateMonitor/master/hrm_screenshot.png)
