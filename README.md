# WNYC Styleguide

Guidelines and assets for sites and apps related to WNYC Radio.

## Why

Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.

## Technical notes on this site

Since this site is to be edited by people familliar with basic web
 authoring, it was agreed that use of a CMS or Markdown encoding would
 be pointless. However, in the interest of “pretty urls” and some 
 features, there is some very simple dynamic scripting (PHP) in place.

A .htaccess file routes all requests through the a router at /index.php

The router first checks to see if the request is to download a file. If
 so, the request is handled by /download.php

Otherwise, the router will look for a file in /pages that matches the
 request. For example, a request for /colors will bring up the color
 palette document located in /pages/color.php

Components common to all pages — document head, navigation, and footer —
 are located in the /partials folder.

Javascript, CSS, image assets and icons are located in the /assets
 folder.
 
That’s about it. Eric Jacobsen eric@wvgg.co 5/2016

## Copyright and License

Contents &copy; WNYC Radio 2016, all rights reserved.

Third party plugins and tools copyright their respective owners.