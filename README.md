<div style="text-align:center"><img src="https://i.imgur.com/EBeTRKq.png" /></div>

> An excerpt creation plugin for Expression Engine 3 & 4 🎉

This is a rebuild of the [hacksaw](https://devot-ee.com/add-ons/hacksaw) plugin and [bbd_chopper](https://github.com/BlackBeltDesigns/bbd_chopper.ee_addon) - compatible with EE 3 & 4.

It allows you to create small excerpts of any html content with ease.

It can strip HTML content, append something (like `...`)
to the end, and let you cutoff by words, characters
or a cutoff point.


## Installation

* Download as a zip.
* Unzip to a folder, such as `excerpt`.
* Move folder to `system/user/addons` or your setup's equivilent.
* Install via control panel.

## Usage

To use Excerpt, just wrap your content with 
the `{exp:excerpt}` tag:

```php
{exp:excerpt}
<h1>Some</h1> Amazing
<strong>Content!</strong>
{exp:excerpt}
```

Which will be turned into `Some Amazing Content!`.  

To use the other options, the following parameters 
are supported:

```php
{exp:excerpt
    chars = "" // Limit number of characters
    words = "" // Limit number of words
    cutoff = "" // Cutoff at a given string
    append = "" // Add something to the end (eg. append="...")
    allow = "" // Allow certain HTML tags (eg. allow="<p>")
}
```

## License

MIT - Copyright (c) 2018 Adam Kelly