---
extends: _layouts.inner
section: body
title: Added Search
subtitle: Vue and Fuse
small_description: Added search after seeing jigsaw made a new templates
date: 01 08 19
author: Collin O'Connell
---
## Search



Jigsaw recently posted a blog post, where they talked about being able to create a new Jigsaw project for either a blog or doc site. After seeing the blog sites search I looked into what it was using. It was [fusejs](http://fusejs.io/) it uses zero dependencies. It fuzzy searches a specified file that you tell it. In order for this to work I had to get the collection of each collection and return the specified fields to search. Then the search bar is a vue component.
