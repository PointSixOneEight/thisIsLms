<!-- Modal -->
<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
  <div class="modal-dialog" role="document">
    <!--form-->
  <form wire:submit.prevent="{{ $showEditModal ? 'updateUser' : 'createUser'}}">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">

          @if ($showEditModal)
            <span>Edit user</span>
          @else
            <span>Add new user</span>
          @endif

        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Full name" wire:model.defer="state.name">
            @error('name')<div class="invalid-feedback"> {{ $message }} </div>@enderror
          </div>

          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Enter email" wire:model.defer="state.username">
            @error('username')<div class="invalid-feedback"> {{ $message }} </div>@enderror
          </div>

          <div class="form-group">
            <label for="role">Role</label>
            <select class="custom-select form-control @error('role') is-invalid @enderror" placeholder="Enter email" wire:model.defer="state.role">
                          
                          <option value="student">Student</option>
                          <option value="teacher">Teacher</option>
                          <option value="admin">Admin</option>
            </select>
            @error('role')<div class="invalid-feedback"> {{ $message }} </div>@enderror
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" wire:model.defer="state.password">
            @error('password')<div class="invalid-feedback"> {{ $message }} </div>@enderror
          </div>

          <div class="form-group">
            <label for="passwordConfirmation">Confirm Password</label>
            <input type="password" class="form-control @error('confirmPassword') is-invalid @enderror" id="passwordConfirmation" placeholder=" Confirm Password " wire:model.defer="state.confirmPassword">
            @error('confirmPassword')<div class="invalid-feedback"> {{ $message }} </div>@enderror
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times mr-1"></i> Cancel</button>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save mr-1"></i>
        
          @if($showEditModal)
          <span>Save changes</span>
          @else
          <span>Save</span>
          @endif
        </button>
      </div>
    </div>
    </form>
  </div>
</div>
    <!--End modal-->



    <!--End modal-->