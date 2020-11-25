<?php include('header.php');?>
</div>
<div class="content">
	<div class="wrap">
		<div class="content-top" style="min-height:300px;padding:50px">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3>Register</h3>
					</div>
					<div class="panel-body">
						<?php include('msgbox.php');?>
						<p class="login-box-msg">Enter your details to register.</p>
						<form action="process_register.php" method="POST">
							<div class="form-group has-feedback">
								<input name="name" type="text" size="25" class="form-control" placeholder="Name"/><br/>
								<input name="rank" type="text" size="25" class="form-control" placeholder="Rank"/><br/>
								<input name="phone" type="text" size="25" class="form-control" placeholder="Phone No."/><br/>
								<input name="username" type="text" size="25" class="form-control" placeholder="Unique username"/><br/>
								<input name="password" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" /><br/><br/>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Register</button>
							</div>
					</div>
				</div>
				</form>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	</div>
	<?php include('footer.php');?>
