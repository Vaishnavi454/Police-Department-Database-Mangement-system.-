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
				<h3>Personal Information</h3>
			</div>
			<?php
				$info=mysqli_query($con,"select po_id, po_uname,	po_name,	po_rank,	po_phone from police_officer where po_id='$_SESSION[user]'");
				display_tables($info);
        ?>
        <div><p>Involved Cases</div>
        <?php
        $info2=mysqli_query($con,"select * from case_details where POfficerID='$_SESSION[user]'");
				display_tables($info2);


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
<?php
	function display_tables($data) {
	    $output = "<table>";
	    foreach($data as $key => $var) {
	        //$output .= '<tr>';
	        if($key===0) {
	            $output .= '<tr>';
	            foreach($var as $col => $val) {
	                $output .= "<td>" . $col . '</td>';
	            }
	            $output .= '</tr>';
	            foreach($var as $col => $val) {
	                $output .= '<td>' . $val . '</td>';
	            }
	            $output .= '</tr>';
	        }
	        else {
	            $output .= '<tr>';
	            foreach($var as $col => $val) {
	                $output .= '<td>' . $val . '</td>';
	            }
	            $output .= '</tr>';
	        }
	    }
	    $output .= '</table>';
	    echo $output;
	}
	 ?>
