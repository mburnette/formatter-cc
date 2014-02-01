Unofficial formater.js Credit Card Plugin
---
This plugin extends the (formatter.js by firstopinion)[http://firstopinion.github.io/formatter.js/] jQuery plugin to easily handle credit card patterns.

Unfortunately, American Express uses a pattern of 4 digits, 6 digits, and 6 digits. This breaks the pattern used by the other 3 major card companies of 4 sets of 4, so some logic needs to be in place to switch between patterns.

* CCVs

Unfortunately, the same applies to CCV numbers. AmEx uses 4 digits while the rest use just 3.

* Usage

To use the plugin extension, just include the script after the jQuery.js and formatter.js files. Should look like this:

<script src="path/to/jquery.js"></script>
<script src="path/to/jquery.formatter.js"></script>
_<script src="path/to/jquery.formattercc.js"></script>_