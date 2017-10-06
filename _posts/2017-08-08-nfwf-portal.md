---
title: NFWF portal "Improving Access and Usability of Storm-Related Data" released
published: true
layout: post
image_thumb: /assets/images/blog/2017/08/sandy_thumb.png
---

Axiom recently completed work on a collaboration with members of the Gulf of Maine Research Institute, US Geological Service, and the Northeastern Regional Association of Coastal Ocean Observing Systems on a National Fish and Wildlife Foundation project entitled [Improving Access and Usability of Storm-Related Data](http://axiomdatascience.com/maps/nfwf/).


Our role in the project was to collect, organize, curate, and document storm-related data over the area of the US affected by Hurricane Sandy. We ingested over 40 datasets and 245 map layers related to or produced as a result of Hurricane Sandy. Many of these datasets were originally only available from the source institution or group and were in a variety of different formats, each requiring different toolsets. Within the Hurricane Sandy Data Integration Portal, they're available as stand alone or stackable visualized data layers, and they're hosted through OGC-compliant services and now widely available to the public.

<img src="/assets/images/blog/2017/08/media-20170809a.png" class="img-responsive pull-left"/>

<img src="/assets/images/blog/2017/08/media-20170809b.png" class="img-responsive pull-left"/>

While participating in this porject, we contributed heavily to the ncWMS software package and associated visualization libraries as part of this project. ncWMS is an OGC compliant [Web Map Service](https://en.wikipedia.org/wiki/Web_Map_Service) for geospatial data that are stored in CF-compliant NetCDF files (satellite, in-situ, forecasts, hindcast reanalysis, etc). Our focus was to expand the number and types of data that were supported by ncWMS as well as make it easier for individuals and organizations to stand up their own ncWMS servers and host their own data.  We also focused on optimizations and enhancements resulting in a substantial improvement in rendering speed of large datasets and enabling more efficient use of high-performance computing infrastructure.  Enhancements to the software libraries included improved portability through Docker containerization, deployment of continuous integration for development, more robust handling of parameter input for queries, implementation of a RESTful API for dataset metadata queries, exposed Ehcache parameterization, implementation of distributed caching using Terracotta and various minor bug fixes. These efforts increased accessibility to datasets and enabled faster access to large datasets including notable improvement for unstructured grid models. For more information on ncWMS see the [documentation](https://reading-escience-centre.gitbooks.io/ncwms-user-guide/content/).