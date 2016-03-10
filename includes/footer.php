	<footer id="main-footer">
		<div class="row-fluid">
			<div class="col-md-9 copyright">
				<p>Copyright The Institute of Chartered Accountants in Australia 2016. All rights reserved. <span class="member-gaa" title="Member of the GAA">Member of the GAA.</span></p>
			</div>
			<div class="col-md-3">
				<a href="http://www.globalaccountingalliance.com/" rel="" target="_blank" title="Global Accounting Alliance"><img src="images/gaa-logo.png"  title="Global Accounting Alliance"  alt="Global Accounting Alliance"></a>
			</div>
			<div class="clearfix"></div>
		</div>
	</footer>
	
	<script type="text/javascript" src="js/modernizr.js" defer></script>
	<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js" defer></script>
	<script> 
		$(document).ready(function(){
			$(function () {
				updateContentMargins();
				$(window).resize(updateContentMargins);

				function updateContentMargins() {
					$('div.content-container').each(function () {
						if (!$('#navbar.navbar-collapse').hasClass("in")) {
							$(this).css({
								'margin-top': ($("#main-header .navbar.navbar-default").outerHeight())
							});
						}
					});
				}
			});			
		});
		(function() {
			"use strict";
			var toggles = document.querySelectorAll(".c-hamburger");
			for (var i = toggles.length - 1; i >= 0; i--) {
				var toggle = toggles[i];
				toggleHandler(toggle);
			};
			function toggleHandler(toggle) {
				toggle.addEventListener( "click", function(e) {
					e.preventDefault();
					if (this.classList.contains("is-active") === true) {
						this.classList.remove("is-active");
					} else{
						this.classList.add("is-active");
					}
				});
			}
		})();		
	</script>
	
	<script src="js/bootstrap.min.js" defer></script>
	<script src="scripts/scripts.js" defer></script>
</body>
</html>