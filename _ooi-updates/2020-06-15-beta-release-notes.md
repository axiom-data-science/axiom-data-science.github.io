---
title: Beta release
published: true
layout: post
---

### Release Summary

This beta version of the Data Explorer is undergoing active development before the official launch of version 1.0 (October 2020). The “beta” labelling implies that while many core features have been implemented, not all OOI data are represented and other issues may remain undiscovered. Please note the following:

* only a subset of the OOI data streams are currently available. Placeholders where additional data are forthcoming (post-beta) are shown as empty gray squares. This is expected.
* previews of glider data are not yet available. Glider data can be visualized by clicking on each record.
* testing is ongoing, and you may encounter bugs.

Use the 'Feedback' tab in the upper right corner to document bugs, glitches, lack of expected functionality or other problems you may encounter. Your feedback will help us improve this platform. 


<img src="/assets/images/release_notes/ooi.beta.PNG" class="img-responsive" width="600"/>

### New Features

### Data Exploration & Metadata Views

* explore assets in an data inventory/availability view
* see all the plots for a "node" on a single page
* explore assets in a searchable list

### Annotations & Data Download
* see the annotations for each deployment alongside the data
* see the delineation of deployments & streams
* download all data for a station/node in a single dataset, or a custom compilation

### Visual Discovery
* explore assets in an interactive map interface
* bathymetry improvements
* discover nearby assets

### Profiling Instruments
* view profile data in a curtain plot

### Compiled Data Products
* view and explore the full timeseries
* view seasonal statistics 
* access CF compliant .nc

### Data Ingestion from OOI M2M API
* infrastructure to trigger data ingestion from the OOI M2M server
* build merged netCDF timeseries field from multiple instruments deployments
* Streamlist asset and parameter list availability to the client
* Functionality testing, and preliminary performance testing

### Additional new features based on early beta feedback from participating MIOs:
* data views for user scenarios, such as upwelling, storm, etc
* adding platform type subsetting
* reworking node groupings
* adding filters to grid views
* reworking map relative to available bathymetry
* improving performance for profiler mooring plots
* improving performance on grid views
