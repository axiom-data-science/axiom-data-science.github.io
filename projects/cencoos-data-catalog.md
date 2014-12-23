---
title: CeNCOOS data catalog
published: true
---

##CeNCOOS Data Catalog and Search

###The Project

Data discovery is a key component  to making data useful, and the Central and Northern California Ocean Observing System (CeNCOOS) needed a redesigned data mapping portal to better organize and display their stakeholders’ evolving data assets. As new data assets are generated and added to the CeNCOOS system, the catalog has to be dynamically updated.

###Challenges

Real-time data streams, models, and forecasts results can be provided in a variety of formats; data providers may change server locations or service endpoints; similar data types and formats may comply with different disciplinary or community conventions; and data may need to be further quality controlled or standardized. In terms of data discovery, data users need to be able to find data using multiple methods including browsing and search.

###Solutions

Axiom ingested CeNCOOS-held data from shore stations, gliders, HF radar, ROMS and COAMPS models, moorings, satellite images, and project-level observational data into our scalable data management framework. We built a metadata catalog, to which we added intuitive tags allowing people to quickly browse datasets using common, human-readable terms. We used a fast Elastic Search interface that gives hints to existing metadata entries as users type. Crucially, the search interface indexes the entire metadata page, weighted by relevancy, so users don't have to be familiar with any controlled sets of keywords. The catalog is also directly connected to a visualization portal, so users don't have to download data before they even know if it's relevant to their needs.

###Highlights

Browsing data by tags
Searching with hints
Organization by source
Integration with a visualization portal

