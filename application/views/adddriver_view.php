<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>SMAK TMS add driver</title>

	<link href="/smak-tms/home/css/bootstrap.min.css" rel="stylesheet">
	<link href="/smak-tms/home/css/custom.css" rel="stylesheet">
	<script src="/smak-tms/home/js/bootstrap.min.js"></script>
	<script src="/smak-tms/home/js/jquery.min.js"></script>
</head>
	
    <body>
        <div id="container">
            <img src="/smak-tms/home/img/smaklogo.png" style="height:80px; width:140px"></img>
			<div class=usermenu>dd<?php echo ""; ?></div>
		</div>
		
		<div id="container2">
				<h1>Employee Registration Form</h1>
				<h2>Driver</h2>
				
				<form class="form-horizontal" role="form" method="post">
					<div class="form-group">
						<label for="id" class="col-sm-2 control-label">Employee ID</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="id" name="id" placeholder="ex. TUE0021" value=""><?php echo '<font color="red">'.form_error('id').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="name" name="name" placeholder="employee name" value=""><?php echo '<font color="red">'.form_error('name').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="address" class="col-sm-2 control-label">Address</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="address" name="address" placeholder="street, city" value=""><?php echo '<font color="red">'.form_error('address').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="nic" class="col-sm-2 control-label">NIC</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="nic" name="nic" placeholder="" value=""><?php echo '<font color="red">'.form_error('nic').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="dob" class="col-sm-2 control-label">Date of Birth</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="dob" name="dob" placeholder="yyyy-mm-dd" value=""><?php echo '<font color="red">'.form_error('dob').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="phone" class="col-sm-2 control-label">Telephone</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="phone" name="phone" placeholder="011xxxxxxx" value=""><?php echo '<font color="red">'.form_error('phone').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="lid" class="col-sm-2 control-label">License No.</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="lid" name="lid" placeholder="driver license number" value=""><?php echo '<font color="red">'.form_error('lid').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="ltype" class="col-sm-2 control-label">License Type</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="ltype" name="ltype" placeholder="driver license type" value=""><?php echo '<font color="red">'.form_error('ltype').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="lisd" class="col-sm-2 control-label">Issued Date</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="lisd" name="lisd" placeholder="yyyy-mm-dd" value=""><?php echo '<font color="red">'.form_error('lisd').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<label for="lexp" class="col-sm-2 control-label">Expire date</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" id="lexp" name="lexp" placeholder="yyyy-mm-dd" value=""><?php echo '<font color="red">'.form_error('lexp').'</font>'; ?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="save" type="submit" value="Save" class="btn btn-xs">
						</div>
					</div>
				</form>
		</div>
		
		<div id="container1">	

			<div>
				<a href="/smak-tms/index.php/home" class="btn btn-xs">
					<img src="/smak-tms/home/img/dashboard.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Dashboard</p></a><br/>
			</div><br/>
			<div>
				<a href="/smak-tms/index.php/adddriver" class="btn btn-xs">
					<img src="/smak-tms/home/img/driver.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Driver</p></a><br/>

				<a href="/smak-tms/index.php/addcleaner" class="btn btn-xs">
					<img src="/smak-tms/home/img/cleaner.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Cleaner</p></a><br/>

				<a href="/smak-tms/index.php/addassistant" class="btn btn-xs">
					<img src="/smak-tms/home/img/assistant.png" style="float:left;height:20px; width:20px;">
					<p style="text-align: left; margin:10px;">Sales Assistant</p></a><br/>
				
			</div>
		</div>
	</body>
</html>