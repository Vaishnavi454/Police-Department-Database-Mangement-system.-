<?php include('header.php');?>
</div>
<div class="content">
	<div class="wrap">
		<div class="content-top" style="min-height:300px;padding:50px">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Update Case</h3>
				</div>
				<div>
					<p class="login-box-msg">Select the record to update</p>
					<?php
						$cases=mysqli_query($con,"select * from case_details");
						display_editable_case($cases);
						?>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clear"></div>
</div>
<?php include('footer.php');?>
</div>
<?php
	function display_editable_case($data) {
	    $output = "<table>";
	    foreach($data as $key => $var) {
	        //$output .= '<tr>';
	        if($key===0) {
	            $output .= '<tr>';
	            foreach($var as $col => $val) {
	                $output .= "<td>" . $col . '</td>';
	            }
							$output .= '<td colspan="2">Action</td>';
	            $output .= '</tr>';
	            foreach($var as $col => $val) {
	                $output .= '<td>' . $val . '</td>';
	            }
	            $output .= '<td><a href="edit_case.php?CaseID='.$var ['CaseID'].'">Update</a></td>';
	            $output .= '<td><a href="case_delete.php?CaseID='.$var ['CaseID'].'">Delete</a></td>';
	            $output .= '</tr>';
	        }
	        else {
							
	            $output .= '<tr>';
	            foreach($var as $col => $val) {
	                $output .= '<td>' . $val . '</td>';
	            }
	            $output .= '<td><a href="edit_case.php?CaseID='.$var ['CaseID'].'">Update</a></td>';
	            $output .= '<td><a href="case_delete.php?CaseID='.$var ['CaseID'].'">Delete</a></td>';
	            $output .= '</tr>';
	        }
	    }
	    $output .= '</table>';
	    echo $output;
	}
	?>
