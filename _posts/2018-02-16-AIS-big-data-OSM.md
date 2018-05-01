---
title: Axiom presents on AIS big-data analysis pipeline at OSM 2018
published: true
layout: post
image_thumb: /assets/images/blog/2018/02/ais-preview.jpg
---

Axiom Data Science recently presented their work on using big-data techniques to analyze AIS vessel traffic data at the [2018 Ocean Sciences Meeting](https://osm.agu.org/2018/) in Portland, OR.

The [Automatic Identification System (AIS)](https://en.wikipedia.org/wiki/Automatic_identification_system) is a system of shipboard transmitters and land-based and satellite-based receivers that allow vessel locations to be broadcast and recorded. While traditionally used for real-time maritime applications, there is increasing interest in using these rich datasets to provide insight into a wide array of oceanographic problems, such as prioritizing hydrographic surveys, predicting the probability and impact of oil spills, quantifying the amount of vessel interactions with marine wildlife, and more. 

Due to immense size of these datasets—typically 10s of billions of raw messages per year—and limitations on infrastructure and computing power, AIS data must currently be processed in small temporal or spatial subsets. This has proven inadequate for decision-making that requires analysis on a national or global scale over an entire year. To overcome the limitations of traditional data storage and processing infrastructure, we have developed a big-data compute cluster using [Apache Spark](https://spark.apache.org/) as the computing engine.

<img src="/assets/images/blog/2018/02/spark_stack.png" class="img-responsive center-block" />

As a demonstration of this technical approach, we worked with [NOAA's Office of Coastal Surveys](https://www.nauticalcharts.noaa.gov/) to produce vessel traffic heatmaps for use in their Hydrographic Health Model. Starting with a 2015 terrestrial AIS dataset composed of 74 billion raw messages, we used our computing cluster to parse the messages, clean out invalid data, and aggregate the individual messages into 20 million tracklines, representing distinct ship voyages per day. We then used these voyages to produce a set of heatmaps in GeoTIFF format with 500 meter resolution across two different metrics: total traffic volume and unique vessel count. We also developed the ability to run ad-hoc queries against both the raw messages and ship voyages. 

<strong>
The previous state-of-the art, an ArcMap plugin, takes days to weeks to process raw AIS data for one month in one UTM zone. In comparison, processing time for this analysis, which included all US waters for all of 2015, was only 48 hours using our computing cluster.
</strong>

We've since analyzed almost ten years of AIS data across all US waters, and will be focusing on arctic AIS data from the Marine Exchange of Alaska in the upcoming year.

For more information, see the following resources:

<div class="row">

  <div class="col-sm-4">
    <div class="thumbnail">
      <a href="http://ais.axds.co"><img src="/assets/images/blog/2018/02/ais-website-preview.jpg" class="img-responsive" /></a>
      <div class="caption">
        <p>
            Download the datasets and learn more about the analysis at the publically-available <a href="http://ais.axds.co">AIS Vessel Traffic Data Products website</a>.
        </p>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="thumbnail">
      <a href="/assets/files/AIS_Vessel_Tracking_OSM_2018_AxiomDataScience.pdf" title="Download slides">
        <img src="/assets/images/blog/2018/02/ais-slides-preview.jpg" class="img-responsive"/>
      </a>
      <div class="caption">
        <p>
        Download slides for the OSM 2018 presentation, <em>Developing Big-Data Infrastructure for Analyzing AIS Vessel Tracking Data on a Global Scale</em>.
        </p>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="thumbnail">
        <iframe width="300" height="161" src="https://www.youtube.com/embed/VfRXXAl4bzs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      <div class="caption">
        <p>
            Watch a video that goes into more depth about the project's background.
        </p>
      </div>
    </div>
  </div>

</div>



