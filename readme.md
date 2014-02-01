## Unofficial formatter.js Credit Card Plugin

This plugin extends the [formatter.js by firstopinion](http://firstopinion.github.io/formatter.js/) jQuery plugin to easily handle credit card patterns.

Unfortunately, American Express uses a pattern of 4 digits, 6 digits, and 6 digits. This breaks the pattern used by the other 3 major card companies of 4 sets of 4, so some logic needs to be in place to switch between patterns.

### CCVs

Unfortunately, the same applies to CCV numbers. AmEx uses 4 digits while the rest use just 3.

### Demo

See a [demo of the credit card formatting](http://www.mburnette.com/demos/formatter-cc/)

### Usage

To use the plugin extension, just include the script after the jQuery.js and formatter.js files. Should look like this:

	<script src="path/to/jquery.js"></script>
	<script src="path/to/jquery.formatter.js"></script>
	<script src="path/to/jquery.formattercc.js"></script>

To initiate the formatting, simply run the **formattercc()** function on your credit card input field. You can optionally initiate the CCV formatting by running the **formatterccv()** function on your CCV input field (note the 'v' in this function).

**IMPORTANT:** You MUST specify the select field (by ID) that contains the options for which card type is being used.

### Examples

Format Credit Card Input

	$('#ccnum').formattercc({ cctypefield: '#cctype' });

Format Credit Card CCV Input

	$('#ccv').formatterccv({ cctypefield: '#cctype' });

---

#### Marcus D. Burnette

[Website](http://www.mburnette.com/)

@marcusdburnette on Twitter