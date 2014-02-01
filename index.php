<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8" />
<title>Formatter.js Plugin Credit Card Extension</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="jquery.formatter.min.js" type="text/javascript"></script>
<script src="jquery.formattercc.js" type="text/javascript"></script>

<style type="text/css">
body {
background: #f7f7f7;
font-family: sans-serif;
text-align: center;
padding: 100px 0 0 0;
}

p {
margin-bottom: 2em;
}

input, select {
padding: 0.5em 1em;
border: 0;
background: #fff;
border: 1px solid #ddd;
border-radius: 4px;
font-size: 1em;
}

#ccnum {
margin-right: 1em;
width: 14em;
}

#ccvnum {
width: 4em;
}

a {
color: #1998c4;
}
</style>

</head>

<body>

<h1>Formatter.js Plugin Credit Card Extension</h1>

<p>This plugin extends the <a href="http://firstopinion.github.io/formatter.js/">formatter.js by firstopinion</a> jQuery plugin to easily handle credit card patterns.</p>

<div class="cardForm">
    <p>Credit Card Type: 
    <select id="cctype">
        <option value="visa">Visa</option>
        <option value="mc">Mastercard</option>
        <option value="discover">Discover</option>
        <option value="amex">American Express</option>
    </select>
    </p>

    <p>Credit Card #: 
    <input id="ccnum" class="ccnum" type="text" /> CCV: <input id="ccvnum" class="ccvnum" type="text" /></p>
</div>

<script type="text/javascript">
    jQuery(function($) {
    // ---------------------------------------------------------------------------------------------

        $('#ccnum').formattercc({ cctypefield: '#cctype' });
        $('#ccvnum').formatterccv({ cctypefield: '#cctype' });

    // ---------------------------------------------------------------------------------------------
    });
</script>

</body>
</html>