# Injectphp Plugin

Injectphp was designed to do a migration from another server that had  Php base files, over to Gr
av.  I needed an easy way to put php files in the new Grav server.
Any accessable php file will be allowed to replace the pages for the markdown content.

I wrote this for myself, its not great, but works for what I needed.  I thought I would share inc
ase someone was in my situation.  I also used it as an oppurtunity to learn to write plugins.

The **Injectphp** Plugin is for [Grav CMS](http://github.com/getgrav/grav). Inject a Php Page int
o your markdown page

## Installation

Installing the Injectphp plugin can be done in one of two ways. The GPM (Grav Package Manager) in
stallation method enables you to quickly and easily install the plugin with a simple terminal com
mand, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getg
rav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From t
he root of your Grav install type:

    bin/gpm install injectphp

This will install the Injectphp plugin into your `/user/plugins` directory within Grav. Its files
 can be found under `/your/site/grav/user/plugins/injectphp`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/you
r/site/grav/user/plugins`. Then, rename the folder to `injectphp`. You can find these files on [G
itHub](https://github.com/larry-vennard/grav-plugin-injectphp) or via [GetGrav.org](http://getgra
v.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/injectphp

> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgr
av/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://git
hub.com/getgrav/grav-plugin-problems) to operate.


## Configuration

Injectphp takes an accessable http php page and injects it as the md file.

Make sure you can access the php page and, make sure it outputs only markdown format.
Injectphp does no checking for output, it just dumps what it gets.  Be aware of security as you a
re building, also, watch your output method, use markdown.

An example of my test php file is below

...
    hello.php

    <?php
    echo "!! **hello** inject php user  ";
    ?>
...

Get the http link from your browser and paste it on the top line of your marddown file will the p
refix injectphp: .

Notice the tag is not in the header section of the file.

...
>   default.md
>
>   ---
>   title: InjectPhp Works Awesome
>   ---
>   injectphp:http://example.com/scripts/hello.php
...


