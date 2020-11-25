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
				<h3>Case Full Details</h3>
			</div>
			<?php
        $sql =  "CALL ShowAllInfo(".$_GET['CaseID'].")";
        $result = mysqli_query($con, $sql);
        foreach($result as $var) {
          display_data($var);
        }
				?>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</div>
<?php
	include('footer.php');
	?>
