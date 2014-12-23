---
title: CeNCOOS Data Datalog
short_title: Data Catalog
published: true
project: true
featured: true
image_thumb: http://placehold.it/300x200&text=img
---

<!-- 
{% capture _header %}
{% endcapture %}
{% capture _content %}
{% endcapture %}
{% capture _media %}
{% endcapture %}
{% include content_block.html content=_content header=_header media=_media %}
-->


{% capture _header %}
The Project
{% endcapture %}
{% capture _content %}
Data discovery is a key component  to making data useful, and the Central and Northern California Ocean Observing System (CeNCOOS) needed a redesigned data mapping portal to better organize and display their stakeholders’ evolving data assets. As new data assets are generated and added to the CeNCOOS system, the catalog has to be dynamically updated.
{% endcapture %}
{% include content_block.html content=_content header=_header %}


{% capture _header %}
Challenges
{% endcapture %}
{% capture _content %}
Real-time data streams, models, and forecasts results can be provided in a variety of formats; data providers may change server locations or service endpoints; similar data types and formats may comply with different disciplinary or community conventions; and data may need to be further quality controlled or standardized. In terms of data discovery, data users need to be able to find data using multiple methods including browsing and search.
{% endcapture %}
{% include content_block.html content=_content header=_header %}

{% capture _header %}
Solutions
{% endcapture %}
{% capture _content %}
Axiom ingested CeNCOOS-held data from shore stations, gliders, HF radar, ROMS and COAMPS models, moorings, satellite images, and project-level observational data into our scalable data management framework. We built a metadata catalog, to which we added intuitive tags allowing people to quickly browse datasets using common, human-readable terms. We used a fast Elastic Search interface that gives hints to existing metadata entries as users type. Crucially, the search interface indexes the entire metadata page, weighted by relevancy, so users don't have to be familiar with any controlled sets of keywords. The catalog is also directly connected to a visualization portal, so users don't have to download data before they even know if it's relevant to their needs.
{% endcapture %}
{% include content_block.html content=_content header=_header %}



{% capture _header %}
Highlights
{% endcapture %}
{% capture _content %}
<ul>
<li>Browsing data by tags</li>
<li>Searching with hints</li>
<li>Organization by source</li>
<li>Integration with a visualization portal</li>
</ul>
{% endcapture %}
{% include content_block.html header=_header content=_content %}

