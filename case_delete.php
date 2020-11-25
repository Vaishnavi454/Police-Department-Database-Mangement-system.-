<?php
	include('header.php');
	?>
</div> <!-- Closing Header's div tag -->
<div class="wrap">
<div class="content">
<div class="content-top" style="min-height:300px;padding:50px">
	<div class="panel panel-default">
		<div class="float-lt">
			<div class="panel-heading">
				<h3>Update/Delete Case</h3>
			</div>
			<?php
      if(isset($_GET['CaseID']))
      {
        $id=$_GET['CaseID'];
        $q_delete = "delete from cases where ca_id='$id'";
				if ($con->query($q_delete) === TRUE) {
	    		echo "<div class=\"msg msg-succ\">All case details were deleted successfully!</div>";
				} else {
					echo "<div class=\"msg msg-error\">Deletion failed!<br>Error:". $con->error."</div>";
				}
      }
      ?>
		</div>
		<div class="clear"></div>
	</div>
</div>
<?php
	include('footer.php');
?>
