<!--Delete confirmation modal -->
<div id="confirmationModal" class="modal fade" wire:ignore.self>
	<div class="modal-dialog modal-confirm ">
		<div class="modal-content ">
			<div class="modal-header flex-column">
				<div class="icon-box ">
					<i class="fas fa-trash">&#xE5CD;</i>
				</div>						
				<h4 class="modal-title w-100">Are you sure?</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete these records? This process cannot be undone.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-danger" wire:click.prevent="deleteUser">Delete</button>
			</div>
		</div>
	</div>
</div>     
<!--Delete confirmation modal -->