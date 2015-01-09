---
title: "AOOS Real-time Sensor Map"
short_title: "AOOS Real-time Sensors"
published: true
project: true
featured: true
image_thumb: /assets/page_content/projects/aoos/aoos.b.small.jpg
---


{% include map_preview.html img_url="/assets/page_content/projects/aoos/screenshot.med.jpg" web_link="http://portal.aoos.org/real-time-sensors.php#map?lg=8c5dd704-59ad-11e1-bb67-0019b9dae22b&p=proj3857&b=google_hybrid" %}

{% capture _header %}The Project{% endcapture %}
{% capture _content %}
This project, initiated by the Alaska Ocean Observing System (AOOS) required a map-based real-time data visualization that harvests, aggregates, and displays information from all of the publicly available atmospheric and oceanographic measurement stations in Alaska.
{% endcapture %}
{% include content_block.html content=_content header=_header %}

{% capture _header %}Challenges{% endcapture %}
{% capture _content %}
Thousands of automated stations sprawl across Alaska, and each station includes multiple sensors streaming quantitative observations (e.g., temperature, pressure, currents, tides, streams, snow, etc.). Sensor streams come from a variety of data providers, each with their own data processing and streaming standards. Some stations also include current streaming photos (i.e., webcams).
{% endcapture %}
{% include content_block.html content=_content header=_header %}

{% capture _header %}Solutions{% endcapture %}
{% capture _content %}
An informative visualization displaying heterogenous in situ measurements required careful, continuous data harvesting and storage, standardization of units and datums, and a lot of optimization. We use hex-binning and summary statistics for broad overviews at low zoom levels, whereas zooming in shows individual sensors and raw data values. The application enables users to quickly find, assess, and download data from specific active sensors. The Alaska Ocean Observing System's Real-Time Sensor Map currently compiles >2,500 land- and ocean-based stations and displays >7,000 live sensors within and around the State of Alaska.
{% endcapture %}
{% include content_block.html content=_content header=_header %}



<h3>Highlights</h3>
<div class="row">


	<div class="col-sm-4">
		<img src="/assets/page_content/projects/aoos/aoos.a.small.jpg" class="img-responsive" />
		<p>Real-time sensors with statistical overviews</p>
	</div>

	<div class="col-sm-4">
		<img src="/assets/page_content/projects/aoos/aoos.b.small.jpg" class="img-responsive" />
		<p>Statistical wind roses calculated on the fly</p>
	</div>

	<div class="col-sm-4">
		<img src="/assets/page_content/projects/aoos/aoos.c.small.jpg" class="img-responsive" />
		<p>Real-time images from web cams</p>
	</div>




</div>

{% include recent_work.html %}

<!-- {% capture _header %}Highlights{% endcapture %}
{% capture _content %}
<ul>
<li>Hex binning with roll-over statistical reports.</li>
<li>Download of sensor measurements from individual sensors.</li>
</ul>
{% endcapture %}
{% include content_block.html content=_content header=_header %} -->
