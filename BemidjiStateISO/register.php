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


</head>
<body>
<div class="container col-sm-6">
  <h1 style="text-align:center;">ISO Member Registration Form</h1>

  <form action="endpoint.php" method="post">
    <h3 class="my-4 display-4 text-center">Personal Details</h3>
    <div class="form-group">
			  <label>Name: </label>
			  <input class="form-control" type="text" maxlength="255" required></input>
		</div>
		<div class="form-group">
			  <label>Address: </label>
			  <input class="form-control" type="text" maxlength="255" required></input>
		</div>

    <h3 class="my-4 display-4 text-center">Payment Details</h3>

		<div class="form-group">
			  <label>Name on card</label>
			  <input id="NameOnCard" name="NameOnCard" class="form-control" type="text" maxlength="255" required></input>
		</div>
		<div class="form-group">
			  <label>Card number</label>
			  <input id="CreditCardNumber" name="CreditCardNumber" class="form-control" type="number"required></input>
		</div>
		<div class="form-group">
			  <label>Expiry date</label>
			  <input id="ExpiryDate" name="ExpiryDate" class="form-control" type="text" placeholder="YYYY-MM" maxlength="7" required></input>
		</div>
		<div class="form-group">
			  <label>Security code</label>
			  <input id="SecurityCode" name="SecurityCode" class="form-control" type="number" required></input>
		</div>
		<div class="form-group">
			  <label>ZIP/Postal code</label>
			  <input id="ZIPCode" name="ZIPCode" class="form-control" type="number" maxlength="10" required></input>
		</div>
			  <button id="PayButton" class="btn btn-block btn-success submit-button my-5" type="submit">Pay</button>
	</form>
  
</div>
</body>
</html>
