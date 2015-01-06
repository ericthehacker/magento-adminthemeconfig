# EW_AdminThemeConfig

Adds support for configuration of Magento admin package and theme, allowing developers and merchants 
to use Magento's theme fallback architecture for admin modifications.

## Overview

Magento's frontend theme fallback logic supports efficient, hierarchical theme structures which allows for 
extreme flexibility and code reuse. The admin area similarly supports this functionality, but there is no mechanism 
to tap into this feature and configure a specific admin theme.

This module addresses this functionality gap and unlocks this powerful functionality.

## Installation via [modman](https://github.com/colinmollenhour/modman)

```
$ cd <magento root>
$ modman init # if you've never used modman on this Magento instance
$ modman clone https://github.com/ericthehacker/magento-adminthemeconfig.git
```

Be sure to flush your cache after installation!

## Usage

This module's functionality is disabled by default. To use, you may set the following system configuration fields:

- *System -> Configuration -> General -> Design -> Package -> Admin Package Name*: configures the admin theme package.
- *System -> Configuration -> General -> Design -> Themes -> Admin Theme*: configures the admin theme.

Magento uses the same theme fallback logic (discussed in detail in my blog post, 
<a href="http://www.classyllama.com/blog/depth-look-magento-theme-fallback" target="_blank">An In-Depth Look at Magento Theme Fallback</a>)
in the admin as in the frontend. This means for recent versions (CE 1.9.0+ and EE 1.14.0+), you may now tap into 
the same infinite theme fallback enjoyed by the frontend area. 