# Joomla Framework Examples

These examples are provided to help you learn how to begin using the Joomla Framework, utilizing the various classes provided in the framework. 

# Installation

## Joomla Framework
You should install the Joomla Framework using composer following these instructions: https://github.com/joomla/joomla-framework

## Folder Structure

Clone this repository in the same parent folder as the framework.

Your structure should look like this when completed:

Root
-joomla-framework
-joomla-framework-examples

## Bootstrap.php

To set up your application to access the framework's autolaoded code, copy the file `bootstrap.dist.php` to `bootstrap.php`. 

# Running Examples
All examples in the Web folder run through the browser. It's usually easiest to have the framework code and these examples in a webserver accessible directory, such as `public_html`, `www`, `htdocs`, etc. Then simply load the index.php file in each example.

## Hello Framework
To run the hello world example, after installation and configuration simply run site.com/web/hello-framework/index.php