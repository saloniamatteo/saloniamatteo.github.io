#!/bin/sh
# Update BeerCSS (CSS + JS) based on version defined in CSS_VER

# BeerCSS version
CSS_VER="2.2.11"

wget "https://cdn.jsdelivr.net/npm/beercss@${CSS_VER}/dist/cdn/beer.min.css" -O css/beer.min.css
wget "https://cdn.jsdelivr.net/npm/beercss@${CSS_VER}/dist/cdn/beer.min.js"  -O js/beer.min.js
