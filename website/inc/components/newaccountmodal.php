<!-- Account Creation Modal-->
<div class="modal fade" id="newAccountModal" tabindex="-1" role="dialog" aria-labelledby="newAccountModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="newAccountModalLabel"> <i class="bi-person-plus"></i> Create an Account</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<?php
					include 'inc/components/userregistrationform.php';
				?>
			</div>
		</div>
	</div>
</div>