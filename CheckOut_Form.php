<?php
echo '<form action="Process_Purchase.php" method= "post">
            Card Number: <input type="text" id="cardNum" name="cardNum" onkeyup="checkCard()">
            <br>
            Name on Card:<input type="text" id="nameOnCard" name="nameOnCard" >
            <br>
            Security code:<input type="text" id="securitycode" maxlength=3 size=3 name="securitycode">
            Expiration date:<input type="text" id="month"  name = "ExpiryDate" maxlength=5 size=5>
            <br>

            Address:<input type="text" id="address" name="CardAddress" ><br>
            Billing Address:<input type="text" id="billing" name="BillingAddress"><br>
            Phone number:<input type="text" id="phone" name="PhoneNumber"><br>

            <p id="out">Card Type</p>

            <script>

            function checkCard() {
            var x = document.getElementById("cardNum");
            var cardType="Card Type";
            if( x.value.substring(0,2) >50 &&  x.value.substring(0,2) <56)
            cardType="MasterCard";
            if( x.value.substring(0,1) == 4)
            cardType="Visa";
            if( x.value.substring(0,2) == 34 ||x.value.substring(0,2) == 37)
            cardType="American Express";
            if( x.value === undefined)
            cardType="Card Type";

            document.getElementById("out").innerHTML = cardType;

            }
            </script>


              <button type="submit" > Buy </button>
      </form>';
 ?>
