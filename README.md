# Injectphp Plugin

Injectphp was designed for to do a migrate from another server where i had all Php files, over to Grav.  I needed an easy way to put php files in my new Grav server.
Any accessable php file will be allowed to replace the pages for the markdown content.
The **Injectphp** Plugin is for [Grav CMS](http://github.com/getgrav/grav). Inject a Php Page into your markdown page

## Installation

Installing the Injectphp plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install injectphp

This will install the Injectphp plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/injectphp`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `injectphp`. You can find these files on [GitHub](https://github.com/larry-vennard/grav-plugin-injectphp) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/injectphp
	
> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.


## Configuration

Create a new page, put in a title, and add only one line to the content section.  injectphp:http://example.com/example.php
Make sure you can access the php page, make sure it outputs only markdown format.  

An example of my test php file is below
---
hello.php
---
<?php
echo "!! **hello** world  ";
?>
---
This should show a color change, and a bold 'hello' when inserted into Grav.

Just to recap, in the section you would normally put your markdown text, replace it with the injectphp <no space> a colon <no space> a hyperlink to a valid php file that outputs markdown.
injectphp:http://some.site/some.php




