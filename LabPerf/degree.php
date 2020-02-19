<?php
	$degreeErr="";
    $degree="";

if (empty($_POST["degree"])) {
    $degreeErr = "Degree is required";
  } else {
    $degree = test_input($_POST["degree"]);
  }
  function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
}

            ?>

 <form method="POST" action=degree.php>
      Degree:           
      <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="SSC") echo "checked";?> value="SSC">SSC
	  <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="HSC") echo "checked";?> value="HSC">HSC
	  <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="BSc") echo "checked";?> value="BSc">BSc
	  <input type="checkbox" name="degree" <?php if (isset($degree) && $degree=="MSc") echo "checked";?> value="MSc">MSc
  
  <span class="checkbox"> <?php echo $degreeErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>