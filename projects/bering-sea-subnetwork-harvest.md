---
title: "Bering Sea Sub-Network Subsistence Harvest"
short_title: "BSSN Harvest Surveys"
published: true
project: true
featured: true
image_thumb: /assets/page_content/projects/bssn/polygon.small.jpg
---

<img src="/assets/page_content/projects/bssn/bssn_screenshot.png" class="pull-right" style="max-width:600px;" />

{% capture _header %}
The Project
{% endcapture %}

{% capture _content %}
The Bering Sea Sub-Network (BSSN) collects survey data from partner communities in the about subsistence use harvests. Hundreds of hunters and fishermen in eight, small communities around the Bering Sea were asked to circle areas on a map and identify what species they regularly hunt, and during what time frames. For the first time, these communities have decided to make this information publicly available.
{% endcapture %}
{% include content_block.html content=_content header=_header %}


{% capture _header %}
Challenges
{% endcapture %}

{% capture _content %}
Subsistence hunters and fishermen are protective of where they harvest, and it's essential that individuals maintain anonymity. However, that's difficult when populations are sparse but they have relatively wide-ranging hunting efforts.
{% endcapture %}
{% include content_block.html content=_content header=_header %}


{% capture _header %}
Solutions
{% endcapture %}

{% capture _content %}
Working with Aleut International, Axiom Data Science converted the overlapping polygons into a hex-binned heat map of harvest effort. Hex-binning allowed summary statistics to be generated (e.g., near village fishing hotspots) while still representing the furthest ranges of subsistence hunts. Hex-bins change with the map view, allowing higher resolution statistics at greater zooms, but they are limited to protect individuals' privacy. Aleut International worked with us to conduct multiple reviews of the product with villages and elders before publication.
{% endcapture %}
{% include content_block.html content=_content header=_header %}



<h3>Highlights</h3>

<div class="row">


	<div class="col-sm-4">
		<img src="/assets/page_content/projects/bssn/graph.small.jpg" class="img-responsive" />
		<p>Time-series graphs show efforts by season and species</p>
	</div>


	<div class="col-sm-4">
		<img src="/assets/page_content/projects/bssn/polygon.small.jpg" class="img-responsive" />
		<p>Statistical reporting over regions of interest</p>
	</div>

	<div class="col-sm-4">
		<img src="/assets/page_content/projects/bssn/filter.small.jpg" class="img-responsive" />
		<p>Ability to filter data by village, climatology, time and species</p>
	</div>

</div>


{% include recent_work.html %}



<!-- 
{% capture _header %}
Highlights
{% endcapture %}

{% capture _content %}
<ul>
<li>Statistical overviews at high zoom levels</li>
<li>High-resolution views that protect individuals' privacy</li>
<li>Village, climatology, and species selectors</li>
</ul>
{% endcapture %}
{% include content_block.html content=_content header=_header %}

 -->
