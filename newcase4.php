<?php
  include('header.php');
?>
</div> <!-- Closing Header's div tag -->

<?php
extract($_POST);
    $sql = "INSERT INTO victim( vi_name, vi_gender, vi_dob, vi_phone, vi_address ) VALUES( '$name', '$gender', '$dob', '$phone', '$address' )";
    if ($con->query($sql) === TRUE) {
      $_SESSION['viid'] = $con->insert_id;
      echo "<br>New Victim record created successfully with id: ".$con->insert_id;
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
 ?>

<div class="wrap">
	<div class="content">
		<div class="panel panel-default">
			<div class="panel-heading">
        <span style="font-size: 30px; font-weight:bold">FIR Details</span>
      </div>
			<div class="panel-body">
				<?php include('msgbox.php'); ?>
        <form action="case_summary.php" method="POST">
            Crime type <input name="crime" type="text" size="25" class="form-control"/><br>
            Date file <input type="date" name="date_file" size="25" class="form-control" placeholder="yyyy/mm/dd"/><br>
            Date of Incident <input type="date" name="date_incident" size="25" class="form-control" placeholder="yyyy/mm/dd"/><br>
            Place of Incident <input type="text" name="place_incident" size="25" class="form-control"/><br>
            Assign case to <input type="text" name="police_officer_id" size="25" class="form-control" placeholder="Police officer's id"/><br>
            Description <input type="text" name="ca_desc" size="25" class="form-control" placeholder="(optional)"/><br>
            Outcome <input type="text" name="ca_outcome" size="25" class="form-control" placeholder="(optional)"/><br>
            <div class="form-group">
    					<button type="submit" class="btn btn-primary">Submit</button>
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
