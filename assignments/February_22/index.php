<!DOCTYPE html>
<html>
<head>
<title>Checkout</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- trying out bootstrap/4 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- custom css -->
<link rel="stylesheet" type="text/css" href="style.css">
<script type="application/javascript" src="/scripts.js"></script>

</head>
<body>
<div class="container col-sm-6">
	<form action="endpoint.php" method="post">
		<div class="form-group">
			  <label>Payment amount</label>
			  <input id="PaymmentAmount" name="PaymmentAmount"class="form-control" type="text" maxlength="255"></input>
		</div>
		<div class="form-group">
			  <label>Name on card</label>
			  <input id="NameOnCard" name="NameOnCard" class="form-control" type="text" maxlength="255"></input>
		</div>
		<div class="form-group">
			  <label>Card number</label>
			  <input id="CreditCardNumber" name="CreditCardNumber" class="form-control" type="text"></input>
		</div>
		<div class="form-group">
			  <label>Expiry date</label>
			  <input id="ExpiryDate" name="ExpiryDate" class="form-control" type="text" placeholder="MM / YY" maxlength="7"></input>
		</div>
		<div class="form-group">
			  <label>Security code</label>
			  <input id="SecurityCode" name="SecurityCode" class="form-control" type="text" ></input>
		</div>
		<div class="form-group">
			  <label>ZIP/Postal code</label>
			  <input id="ZIPCode" name="ZIPCode" class="form-control" type="text" maxlength="10"></input>
		</div>	  
			  <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit">Pay</button>
	</form>
</div>
</body>
</html>
