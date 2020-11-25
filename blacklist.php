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
				<h3>Existing Case</h3>
			</div>
			<?php
				$result=mysqli_query($con,"SELECT * FROM blacklist");
				display_data($result);

				$case=mysqli_fetch_array($cases);
				echo $case;
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
