	</div>  <!-- The Container Ends -->
		<div id="push"></div>
	</div>
		
	<div id="footer">
		<div class="container">
			<p class="muted credit" align="right">Made with <span class="glyphicon glyphicon-heart"></span> in <a href="https://github.com/hashharPersonalProjects/dbms-proj">PHP</a> by <a href="https://github.com/hashhar/" target="_blank">@hashhar</a> and <a href="https://github.com/hashharPersonalProjects/dbms-proj/graphs/contributors">friends</a>.</p>
			<!--
				Developers:
		
				Ashhar Hasan     - https://github.com/hashhar
				Aakash Aggarwal  - https://github.com/aakash2121995
				Krishan Chopra
				Mayank Shekhar
			-->
		</div>
	</div>
	
	<script>
		$('[data-toggle="tooltip"]').tooltip({
			'trigger': 'manual', 'placement': 'right'
		});
		
		$('[data-toggle="popover"]').popover({
			'trigger': 'manual', 'placement': 'right', 'html': true
		});
		
		$(function () { $("input,select,textarea").not("[type=submit]").jqBootstrapValidation(); } );
		
		<?php if($firstTime) { ?>
			$(document).ready(function() {
				$('#rulesModal').modal('show');
			});
		<?php } ?>
	</script>
</body>
</html>
