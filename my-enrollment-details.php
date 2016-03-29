<?php include("includes/header.php");?>

	<div class="content-container" id="page-content">
		<div class="row-fluid">
			<div id="left-sidebar" class="col-md-2 sidebar">
				<?php include("includes/sidebar.php");?>
			</div>
			<div class="col-md-10 main-content dashboard">
				<div class="table-header">Graduate Diploma of Chartered Accounting - Details</div>
				<div class="table-subheader">Details or Profile (sub table header)</div>
				<table class="detail-two-column alt">
					<tbody>
						<tr>
							<td>Name</td>
							<td>Joshua Bretag</td>
						</tr>
						<tr>
							<td>Preferred Name</td>
							<td>Josh</td>
						</tr>
					</tbody>
					</table>
					<div class="table-subheader">Employment Details</div>
					<table class="detail-two-column">
					<tbody>
						<tr>
							<td>Account name</td>
							<td>joshuabretag</td>
						</tr>
					</tbody>
					</table>
					<div class="table-subheader">Mentor Details</div>
					<table class="detail-two-column">
					<tbody>
						<tr>
							<td>Mentor Name</td>
							<td>Steve Jobs</td>
						</tr>
						<tr>
							<td>Module</td>
							<td>AAABC</td>
						</tr>
						<tr>
							<td class="req">Are your employment and mentor  details correct?</td>
							<td>
								<div class="select-wrapper arrow">
									<select class="select-option" id="details-correct">
										<option>Please select</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>								
									</select>
								</div>
							</td>
						</tr>
						<tr>
							<td>Please upload employment details form</td>
							<td><input type="file" /></td>
						</tr>
						<tr>
							<td class="req">Do you require assistance?</td>
							<td>
								<div class="select-wrapper arrow">
									<select class="select-option" id="assistance">
										<option>-- None --</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>								
									</select>
								</div>
							</td>
						</tr>
						<tr>
							<td class="req">Please select your exam location preference</td>
							<td>
								<div class="select-wrapper search">
									<select class="location" id="exam-location">
										<option>Select exam location</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>								
									</select>
								</div>
							</td>
						</tr>
						<tr>
							<td class="req">Please select your country of residence</td>
							<td>
								<div class="select-wrapper arrow">
									<select class="select-option" id="residence">
										<option>-- None --</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>								
									</select>
								</div>
							</td>
						</tr>
						<tr>
							<td>Accept terms and conditions</td>
							<td><input type="checkbox" checked></td>
						</tr>
						<tr class="summary total">
							<td>Total:</td>
							<td>$1,225.00</td>
						</tr>
					</tbody>
				</table>
				<div class="table-footer"><button class="btn btn-default navigation prev-btn" title="Back">Back</button><button class="btn btn-default navigation next-btn" title="Next">Next</button></div>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>

<?php include("includes/footer.php");?>
