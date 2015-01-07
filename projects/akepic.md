---
title: "Alaska Natural Heritage Program's AKEPIC Data Portal"
short_title: "AKNHP Exotic Plants"
published: true
project: true
featured: true
image_thumb: /assets/page_content/projects/akepic/akepic.c.small.jpg
---

<img src="/assets/page_content/projects/akepic/screenshot.med.jpg" class="pull-right" />

{% capture _header %}
The Project
{% endcapture %}

{% capture _content %}
The Alaska Exotic Plants Information Clearinghouse (AKEPIC) is a database and mapping application showing the distribution of non-native plant species in Alaska and neighboring Canadian territories.
{% endcapture %}

{% include content_block.html content=_content header=_header %}


{% capture _header %}
Challenges
{% endcapture %}

{% capture _content %}
There are millions of occurrences of non-native species in Alaska, with many non-native species occurring in each area. However, data are limited to areas where sampling has occurred, and many locations have not been sampled.
{% endcapture %}

{% include content_block.html content=_content header=_header %}


{% capture _header %}
Solutions
{% endcapture %}


{% capture _content %}
Axiom used the AKEPIC database to generate a customized mapping application. The application shows all of the database locations to reveal sampling effort, and locations are colored by the number of occurrences. At further out zoom levels, we use hex-binning to show statistical overviews. Users can download all the data available for an area, or all the species information for all areas.
{% endcapture %}

{% include content_block.html content=_content header=_header %}


<h3>Highlights</h3>

<div class="row">


	<div class="col-sm-4">
		<img src="/assets/page_content/projects/akepic/akepic.a.small.jpg" class="img-responsive" />
		<p>Visualizing multiple types of occurrences (e.g., non-native plants present or absent)</p>
	</div>

	<div class="col-sm-4">
		<img src="/assets/page_content/projects/akepic/akepic.b.small.jpg" class="img-responsive" />
		<p>Data reporting based on regions of interest</p>
	</div>

	<div class="col-sm-4">
		<img src="/assets/page_content/projects/akepic/akepic.c.small.jpg" class="img-responsive" />
		<p>Low zooms show statistical overviews, high zooms show individual sampling transects</p>
	</div>


</div>

{% include recent_work.html %}

<!-- 
{% capture _header %}
Highlights
{% endcapture %}
{% include content_block.html content=_content header=_header %}

{% capture _content %}
<ul>
<li>Visualizing on multiple types of occurrences (non-native plants present or absent)</li>
<li>Data download in various formats</li>
<li>At high zooms, individual occurrences show individual sampling transects</li>
</ul>
{% endcapture %}

{% include content_block.html content=_content header=_header %}
 -->