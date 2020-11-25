<?php
  include('header.php');
?>
</div> <!-- Closing Header's div tag -->
<?php
extract($_POST);
    $sql = "INSERT INTO accused( ac_name, ac_gender, ac_dob, ac_phone, ac_address ) VALUES( '$name', '$gender', '$dob', '$phone', '$address' )";
    if ($con->query($sql) === TRUE) {
      $_SESSION['acid'] = $con->insert_id;
      echo "<br>New Accused record created with id: ".$con->insert_id;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

 ?>

<div class="wrap">
	<div class="content">
		<div class="panel panel-default">
			<div class="panel-heading">
        <span style="font-size: 30px; font-weight:bold">Victim Information</span>
      </div>
			<div class="panel-body">
				<?php include('msgbox.php');?>
        <form action="newcase4.php" method="POST">
            Name <input name="name" type="text" size="25" class="form-control"/><br>
            DOB <input type="date" name="dob" size="25" class="form-control" placeholder="yyyy/mm/dd"/><br>
            Gender
            <input type="radio" name="gender" value="m" checked> Male
            <input type="radio" name="gender" value="f"> Female
            <input type="radio" name="gender" value="o"> Other<br>

  					Phone No. <input name="phone" type="text" size="25" class="form-control"/><br>
    				Address <input name="address" type="text" size="25" class="form-control"/><br>
            <div class="form-group">
    					<button type="submit" class="btn btn-primary">Next</button>
            </div>
        </form>

				</div>
			</div>
		</div>
	</div>
</div>

<?php
  include('footer.php');
?>
</div>
