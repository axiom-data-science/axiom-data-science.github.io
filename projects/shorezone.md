---
title: "Shorezone"
published: true
project: true
featured: true
image_thumb: http://placehold.it/300x200&text=img
---

{% capture _header %}The Project{% endcapture %}
{% capture _content %}
ShoreZone is a coastal habitat mapping and classification project. Aerial imagery is taken from a plane flying the coastline of Alaska are meant to aid researchers studying shoreline change as well as prepare emergency response professionals in the case of an oil spill.
{% endcapture %}
{% include content_block.html content=_content header=_header %}

{% capture _header %}Challenges{% endcapture %}
{% capture _content %}
ShoreZone collects georeferenced imagery over 40,000 km of shoreline. High-resolution video, images, and classifications are recorded resulting in a massive dataset with multiple types of data that are most easily understood when shown all together.
{% endcapture %}
{% include content_block.html content=_content header=_header %}

{% capture _header %}Solutions{% endcapture %}
{% capture _content %}
Using the georeferenced video, we reconstructed the flight track. We built a customized data layer that syncs the time in the video with a marker on the flight track and any high-resolution photographs that were taken nearest to the marker. As the video plays, the marker moves and images update allowing users to "fly the coast".
{% endcapture %}
{% include content_block.html content=_content header=_header %}

{% capture _header %}Highlights{% endcapture %}
{% capture _content %}
<ul>
<li>Syncing between video, imagery, and HTML flight path and marker</li>
<li>Map syncing, allowing the video to continuously play</li>
<li>Ability to overlay other coastline datasets with aerial imagery.</li>
</ul>
{% endcapture %}
{% include content_block.html content=_content header=_header %}

