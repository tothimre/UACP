# UACP
This is the root directory of the 
UACP that stands for Universal Authentication For PHP.

Welcome to the UACP!

## Description

Uacp stands for Universal Authentication component For PHP(5)

The aim of this project is to create an easy to (re)use authentication component for PHP applications.

You can see how it works at:
[UACP show case](http://showcase.uacp.info/showcase/lib/tools/gwt/uacp_showcase/war/Uacp_showcase.html)

## The guiding principles of the project

 * Provide a solid starting point for the authentication of starup projects.
 * Well documented, and self documentative.
 * Easy to reuse.
 * Database independent.
 * By its own really easy to learn templating system you can create fully customized designs for your authentication tasks.
 * No external dependencies.
 * Uses only the OOP paradigm, and PHP5.
 * Fully unittested.
 * Functionally tested.
 * Easy to learn by examples.
 * This framework supports iterative development and agile development friendly. You can easily create authentication related prototypes.
 * Fits into the MVC Designpattern.
 * Apache 2 license

## INSTALLATION

Just copy the framework library anywhere where it is reachable from your project and include the autoload.php file from it, modify one line if you would like to use the Captcha support in this case your environment sould have session support.

## The directory structure you see:

 * ./framework ; 
Here is the little framework that helps you to make your authentication flexible and easy. In the case you yust would to use the framework and don't want to develop it you only need this folder.

 * ./showcase; 
Here are (recently only one) the examples to make it look delicious:) Just copy the framework to your webserver that uses php5, browse the  showcase examples, they automatically start, you can see how they are working in practice. I use Ubuntu 9.10 with apache and php, so  the application should run on any compatible configuration, but of  course. I will test the component on other configurations as well in the near future.

## COPYRIGHT ##

### Copyright [2010] [Imre Toth <tothimre at gmail>] ###

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

 http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.

### Securimage ###
A PHP class for creating and managing form CAPTCHA images. Used for the capcha support. You can get it form http://www.phpcaptcha.org.

Copyright (c) 2009 Drew Phillips. All rights reserved. This software is released under the GNU Lesser General Public License.

### GeSHi - Generic Syntax Highlighter ###

I use it at the show case.

GeSHi is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

GeSHi is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with GeSHi; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

####
More composer loving support is coming. Also twig and it's friends.
