<?php include("includes/header.php");?>

	<div class="content-container" id="page-content">
		<div class="row-fluid">
			<div id="left-sidebar" class="col-md-2 sidebar">
				<?php include("includes/sidebar.php");?>
			</div>
			<div class="col-md-10 main-content dashboard">
				<div class="table-header">Education Details</div>
				<div class="table-responsive">
				<table class="detail-two-column">
					<tbody>
						<tr>
							<td>Country</td>
							<td>
								<div class="select-wrapper arrow">
									<select class="select-option" id="country">
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
							<td>State</td>
							<td>
								<div class="select-wrapper arrow">
									<select class="select-option" id="state" disabled>
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
							<td>University/Professional organization</td>
							<td><input type="text" placeholder="Enter Business Account" /></td>
						</tr>
						<tr>
							<td class="req">Enter University/Institution</td>
							<td><input type="text" /></td>
						</tr>
						<tr>
							<td>Event / Course name</td>
							<td><input type="text" /></td>
						</tr>
						<tr>
							<td>Date Commenced</td>
							<td>
								<div class="date-wrapper arrow">
									<input type="date" />
								</div>
								<span class="selected-date" style="color:#D22630;">[ 29/03/2016 ]</span>
							</td>
						</tr>
						<tr>
							<td>Date Completed</td>
							<td>
								<div class="date-wrapper arrow">
									<input type="date" />
								</div>
								<span class="selected-date" style="color:#D22630;">[ 29/03/2016 ]</span>
							</td>
						</tr>
						<tr>
							<td>Check/uncheck the following options</td>
							<td><input type="checkbox" checked> CAHDP <input type="checkbox"> Bridging <input type="checkbox"> Training and Development</td>
						</tr>
						<tr>
							<td>Qualifying Hours</td>
							<td><input type="text" /></td>
						</tr>
						<tr class="alt">
							<td>Qualifying Hours Type</td>
							<td>
								<div class="select-wrapper arrow">
									<select class="select-option" id="hour-type">
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
							<td>Specialist hours code</td>
							<td>
								<div class="select-wrapper arrow">
									<select class="select-option" id="specialist-code">
										<option>-- None --</option>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>								
									</select>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
				</div>
				<div class="table-footer"><button class="btn btn-default navigation prev-btn" title="Back">Back</button><button class="btn btn-default navigation next-btn" title="Next">Next</button></div>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>

<?php include("includes/footer.php");?>
