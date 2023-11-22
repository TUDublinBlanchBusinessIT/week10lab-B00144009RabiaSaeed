<?php
include("finalStepHeader.html");

//translate the comments below into PHP code underneath each comment

session_start();
echo "h4";
$_SESSION['passengerFN'] = $firstname;
echo "Passenger's Firstname: " . $_SESSION['passengerFN'. "<BR>"]

echo "<BR>";

$_SESSION['passengerSN'] = $secondname;
"Passenger's Surname: " . $_SESSION['passengerSN'];
echo "Passenger's Surname: " . $_SESSION['passengerSN'. "<BR>"];
    


// if the luggage session variable is on

if (isset($_SESSION['luggage']) && $_SESSION['luggage'] == 1) {
    if (isset($_SESSION['subTenKG'])) {
        echo "Luggage under 10 kilo: " . $_SESSION['subTenKG'];
    }

    
    echo "<BR>";
    
    if (isset($_SESSION['overTenKG'])) {
        echo "Luggage that's over 10 kilo: " . $_SESSION['overTenKG'];
    }
}
        
    echo "<BR>";
//end if block



?>

</h4></div></div>
<form method="POST" action="confirm.php">
    <div class="form-group">        
        <label class="control-label col-sm-12 text-center">Is the above information correct?</label>
        <div class="checkbox col-sm-12 text-center">
          <label><input type="checkbox" name="confirm">Yes</input>
        </div>
    </div>
   
        
      <div class="col-sm-12 text-center">
        <button type="submit" class="btn btn-default">Continue</button>
      </div>
    </div>
    
</form>
