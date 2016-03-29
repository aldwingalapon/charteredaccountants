<?php include("includes/header.php");?>

	<div class="content-container" id="page-content">
		<div class="row-fluid">
			<div id="left-sidebar" class="col-md-2 sidebar">
				<?php include("includes/sidebar.php");?>
			</div>
			<div class="col-md-10 main-content payment-details">
				<div class="table-header">Payment Details</div>
				<div class="info-message"><span class="info-state info-payment">Outstanding Amount: <span class="amount">$1,470.00</span></span>
				<br><br>
				<p>Please provide your employer payment token if you have one</p>

				<form>
  					<label>Payment Token</label><br>
  					<input type="text" class="token normal-state" name="ptoken">
  					<button class="verified">Verify</button>
  					<hr class="separator"> <label class="state">Normal State</label>
  					<br><br>
  					<label class="state">Payment Token</label><br>
  					<input type="text" class="token active-state" name="ptoken">
  					<button class="verified">Verify</button>
  					<hr class="separator"> <label class="state">Active State</label>
  					<br><br>
  					<label>Payment Token</label><br>
  					<input type="text" class="token verified" name="ptoken">
  					<button class="verified">Verify</button>
  					<hr class="separator"> <label class="state">Token Verified</label>
  					<br><br>
  					<label>Payment Token</label><br>
  					<input type="text" class="token incorrect" name="ptoken">
  					<button class="verified">Verify</button>
  					<hr class="separator"> <label class="state">Token Incorrect</label>
				</form>
				</div>
				
				
				<div class="table-footer"><button class="btn btn-default view prev">Back</button>
				<button class="btn btn-default view next">Next</button></div>
			</div>
			<div class="clearfix">
			</div>
		</div>
	</div>

<?php include("includes/footer.php");?>
