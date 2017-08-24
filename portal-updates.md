---
layout: page
title: "Portal Updates"
published: true
---


**Portal Update Releases & Release Notes**

{% for post in site.portal_updates %}

		<div class="blog-item clearfix">
			{% if post.image_thumb %}
			<!-- <img src="{{post.image_thumb}}" class="img-responsive pull-left" /> -->
			{% endif %}
			<p class="date" style="margin-bottom:3px;color:#666;">{{ post.date | date: "%B %e, %Y" }}</p>
	    	<h3><a href="{{ post.url }}">{{ post.title }}</a></h3>
	    	{{ post.content }}
		</div>


{% endfor %}


TAKE 2

{% for post in site._portal_updates %}

		<div class="blog-item clearfix">
			{% if post.image_thumb %}
			<!-- <img src="{{post.image_thumb}}" class="img-responsive pull-left" /> -->
			{% endif %}
			<p class="date" style="margin-bottom:3px;color:#666;">{{ post.date | date: "%B %e, %Y" }}</p>
	    	<h3><a href="{{ post.url }}">{{ post.title }}</a></h3>
	    	{{ post.content }}
		</div>


{% endfor %}