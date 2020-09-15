---
title: v1.0 release
published: true
layout: post
---

### Release Summary
The Ocean Observatories Initiative (OOI) is pleased to announce the release of its new OOI Data Explorer v.1 (http://dataexplorer.oceanobservatories.org/). To help make OOI data more accessible, usable, and easily integrated into research and classrooms, the OOI team has spent the last year developing this new tool that will allow users to discover the data required to meet their needs.  This version 1 brings improvements, additional data access, and bug fixes to the beta version released to an exclusive subset of scientific users in July 2020 for testing and feedback.

#### Important: #### 
As it is still in the development stage, the Data Explorer v1.0 can be unstable and you may experience a few minor problems, known as bugs. Additionally, only a subset of the OOI data streams are available. This is expected and you will see placeholders (gray boxes) where additional data are forthcoming.

### New Features and Bug Fixes

#### Gold Copy API
* Enhancements to Gold Copy ERDDAP service
* Initial optimizations for ERDDAP dataset loading and download performance
* Code refactor for data availability to prevent overlapping provenance annotations
* Expose deployment summary information to the user, including: deployment name, start/end time, deployment location, calibration information
* Import instrument narratives and images from https://oceanobservatories.org/ into Data Explorer, including: text narratives, diagrams, instrument classes, model information, and data product description and access links
* Add reference identifiers and link to data stream in OOI Data Portal

#### Grid view 
* Update to grid filtering algorithm to prevent null result
* Implement full text search to all charts, including instrument make and model
* Add access to OOI diagrams and descriptions at array, subsite, and node levels
* Highlight depth/map location when hovering over chart
* Bug fixes to map and depth chart hover and scroll functionality

#### Charting 
* Improve time selection on charts
* Performance enhancement for multi-depth instruments (i.e. ADCP) to allow quicker load of time and depth binned data
* Allow user to add items to downloads queue from chart
* Expose data quality flags from QARTOD tests alongside the data (where available, e.g., CTD datasets)
* Improve navigation from individual chart view to sensor display
* Resolve bug with overlapping annotation visualizations

#### Search/Navigation 
* Rework of platform and node groupings
* Reorder of parameter names by category to ease browsing (i.e. Specific Humidity and Relative Humidity to Humidity: Specific and Humidity: Relative)
* Cascading filtering for parameter and instrument selection
* Add “All” search feature
* Integrate beta version of global locators and data filter widget on the landing page
* Add globe inset to platform map
* Refactor of v1.0 landing page

#### Annotation and Deployment
* Include Annotation and Deployment file availability by time alongside the timeseries visualization, and tabular display of Annotations and Deployments with file downloads
* Annotation and Deployment UI/UX improvement, including addition of titles on hover and color palette adjustments

#### Data Download
* Create download queue that allows users to collect all downloads on a single page
* View and explore a full time series version of the instrument dataset
* Access full resolution, CF (Climate and Forecast)-compliant data for individual deployments or merged time series using interoperability services (i.e. ERDDAP, THREDDS, OpenDAP) 

    THREDDS: [http://thredds.dataexplorer.oceanobservatories.org/thredds/catalog.html](http://thredds.dataexplorer.oceanobservatories.org/thredds/catalog.html)
    
    ERDDAP: [http://erddap.dataexplorer.oceanobservatories.org/erddap/index.html](http://erddap.dataexplorer.oceanobservatories.org/erddap/index.html)
    
    ERDDAP gold copy (full-resolution datasets for every stream, by deployment): [http://erddap-goldcopy.dataexplorer.oceanobservatories.org/erddap/index.html](http://erddap-goldcopy.dataexplorer.oceanobservatories.org/erddap/index.html)

* Include selected time bounds and Z dimension when requesting from ERDDAP

#### Data Ingestion
* Infrastructure to trigger data ingestion from the OOI M2M server
* Build merged netCDF time series field from multiple instruments deployments
* Stream list asset and parameter list availability
* Functionality testing, and preliminary performance testing
* Add data and metadata links to glider datasets

