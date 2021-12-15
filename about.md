---
layout: page
title: "About"
published: true
---

Axiom Data Science is an informatics and software development firm focused on developing scalable solutions which can be leveraged across a variety of users, clients and institutions in order to make the best tools for data management, integration, and visualization. We support a variety of federal, private, academic and non-governmental organizations managing and conducting research in the ecological, geological and ocean sciences.


<img src="/assets/page_content/about/headquarters.jpg" class="pull-right thumbnail col-md-5 col-xs-12 img-responsive" />

{% capture _header %}
Staff and Facilities
{% endcapture %}
{% capture _content %}
Axiom Data Science staff includes software architects and engineers, GIS and data analysts, web and graphic designers,
scientists and data librarians. Our headquarters are located in Anchorage, Alaska, with two main satellite offices
in Portland, Oregon and Wickford, Rhode Island. Axiom operates a High Performance Compute (HPC) cluster in Portland
composed of more than 1400 processing cores staged in a series of interconnected blade arrays as well as 1.4 PBs of
storage distributed across clustered storage nodes. Compute nodes and storage nodes
are connected over a low latency, converging network fabric (40 Gb/Sec Infiniband). GlusterFS is employed as a storage
software abstraction layer that enables clients and storage servers to exploit data transfer over
Remote Direct Memory Access (RDMA) protocols. This configuration enables data throughput from the storage cluster to the
compute cluster to reach speeds greater than 160 Gb/Sec in high-concurrency situations necessary for large-scale
scientific modeling as well as hosting, querying and visualizing large, long-term data sets. Axiom also has a dedicated
multi-braided 1 Gb/Sec high speed internet connection for large file transfers between external data centers and the
high-bandwidth demands of centralized web/cloud based applications.
{% endcapture %}
{% include content_block.html content=_content header=_header %}

{% capture _header %}
Staff Bios
{% endcapture %}
{% capture _content %}
<div class="staff">
{% for member in site.data.staff %}
<div class="media member">

{% if member.image %}
    <img src="/assets/images/staff/{{member.image}}.jpg" height="190" class="thumbnail pull-left"/>
{% endif %}

<div class="media-body">
<h4 class="media-heading">{{member.name}}</h4>
<h5 class="media-heading"><em>{{member.position}}</em></h5>
<p>{{member.description}}<br /><a href="mailto:{{member.email}}">{{member.email}}</a></p>
</div>
</div>
{% endfor %}
</div>
{% endcapture %}
{% include content_block.html content=_content header=_header %}
