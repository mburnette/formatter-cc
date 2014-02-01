<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8" />
<title>Formatter.js Credit Card Plugin</title>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script src="jquery.formatter.min.js" type="text/javascript"></script>
<script src="jquery.formattercc.js" type="text/javascript"></script>

</head>

<body>

<div>
    Credit Card Type: 
    <select id="cctype">
        <option value="visa">Visa</option>
        <option value="mc">Mastercard</option>
        <option value="discover">Discover</option>
        <option value="amex">American Express</option>
    </select>
    <br/>
    Credit Card #: 
    <input id="ccnum" class="ccnum" type="text" /> CCV: <input id="ccvnum" class="ccvnum" type="text" /> 
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