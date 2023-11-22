<?php
include("finalStepHeader.html");
session_start();

echo "First Name: " . (isset($_SESSION['passengerFN']) ? $_SESSION['passengerFN'] : "Not Provided");
echo "<br>";
echo "Surname: " . (isset($_SESSION['passengerSN']) ? $_SESSION['passengerSN'] : "Not Provided");
echo "<br>";


if (isset($_SESSION['luggage']) && $_SESSION['luggage'] == 1) {
  
    echo "Bags under 10 KG: " . (isset($_SESSION['subTenKG']) ? $_SESSION['subTenKG'] : "Not Provided");
    echo "<br>";
    
   
    echo "Bags between 10 and 20 KG: " . (isset($_SESSION['overTenKG']) ? $_SESSION['overTenKG'] : "Not Provided");
    echo "<br>";
}
?>

</h4></div></div>
<form method="POST" action="confirm.php">
    <div class="form-group">        
        <label class="control-label col-sm-12 text-center">Is the above information correct?</label>
        <div class="checkbox col-sm-12 text-center">
          <label><input type="checkbox" name="confirm">Yes</label>
        </div>
    </div>
   
    <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-default">Continue</button>
    </div>
</form>
