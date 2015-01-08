---
title: "ShoreZone"
short_title: "ShoreZone Media"
published: true
project: true
featured: true
image_thumb: /assets/page_content/projects/shorezone/shorezoneB.small.jpg
---

{% include map_preview.html img_url="/assets/page_content/projects/shorezone/shorezone01.med.jpg" web_link="http://portal.aoos.org/cirt.php#map?q=&tagId=37&page=1&lg=5040a46e-25db-11e1-94b9-0019b9dae22b&z=7&ll=59.44262%2C-151.09197" %}

{% capture _header %}The Project{% endcapture %}
{% capture _content %}
ShoreZone is a coastal habitat mapping and classification project. Aerial imagery is taken from a plane flying the coastline of Alaska are meant to aid researchers studying shoreline change as well as prepare emergency response professionals in the case of an oil spill.
{% endcapture %}
{% include content_block.html content=_content header=_header %}

{% capture _header %}Challenges{% endcapture %}
{% capture _content %}
The ShoreZone dataset for Alaska currently includes hundreds of thousands of high-resolution photographs, hundreds of hours of aerial HD video, and 40,000 km of shoreline classifications. This massive dataset includes multiple types of data that are most easily understood when shown all together in a single mapping interface.
{% endcapture %}
{% include content_block.html content=_content header=_header %}

{% capture _header %}Solutions{% endcapture %}
{% capture _content %}
Shorezone data must be integrated in a variety of ways depending on who and when the data was collected. Some HD video included embedded GPS data that we used to reconstruct the flight track. Video without embedded location data must be matched up with a GPS track based on time. We built a customized data layer that syncs the time in the video with a marker on the flight track and any high-resolution photographs that were taken nearest to the marker. As the video plays, the marker moves and images update allowing users to "fly the coast".
{% endcapture %}
{% include content_block.html content=_content header=_header %}



<h3>Highlights</h3>

<div class="row">
	<div class="col-sm-4">
		<img src="/assets/page_content/projects/shorezone/shorezoneA.small.jpg" class="img-responsive" />
		<p>Syncing between video, imagery, and HTML flight path and marker</p>
	</div>

	<div class="col-sm-4">
		<img src="/assets/page_content/projects/shorezone/shorezoneB.small.jpg" class="img-responsive" />
		<p>Access to original, high resolution photos and video</p>
	</div>

	<div class="col-sm-4">
		<img src="/assets/page_content/projects/shorezone/shorezoneC.small.jpg" class="img-responsive" />
		<p>Ability to overlay other coastline datasets with aerial imagery</p>
	</div>

</div>

{% include recent_work.html %}

<!-- {% capture _header %}Highlights{% endcapture %}
{% capture _content %}
<ul>
<li>Syncing between video, imagery, and HTML flight path and marker</li>
<li>Map syncing, allowing the video to continuously play</li>
<li>Ability to overlay other coastline datasets with aerial imagery.</li>
</ul>
{% endcapture %}
{% include content_block.html content=_content header=_header %}
 -->
