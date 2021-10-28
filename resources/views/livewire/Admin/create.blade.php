<!-- Modal -->
<div class="modal fade" id="form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
  <div class="modal-dialog" role="document">
    <!--form-->
  <form wire:submit.prevent="{{ $showEditModal ? 'updateUser' : 'createUser'}}">
    <div class="modal-content">
      <!-- <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">

          @if ($showEditModal)
            <span>Edit user</span>
          @else
            <span>C user</span>
          @endif

        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> -->
      <div class="modal-body">
        

          <div class="form-group text-muted font-weight-light" style="font-size: 14px;">
            <label for="name">Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Full name" wire:model.defer="state.name">
            @error('name')<div class="invalid-feedback"> {{ $message }} </div>@enderror
          </div>

          <div class="form-group text-muted font-weight-light" style="font-size: 14px;" >
            <label for="username">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Enter email" wire:model.defer="state.username">
            @error('username')<div class="invalid-feedback"> {{ $message }} </div>@enderror
          </div>

          <div class="form-group text-muted font-weight-light" style="font-size: 14px;">
            <label for="role">Role</label>
            <select class="custom-select text-muted form-control @error('role') is-invalid @enderror" placeholder="Enter email" wire:model.defer="state.role">
                          <option >Select*</option>
                          <option value="student">Student</option>
                          <option value="teacher">Teacher</option>
                          <option value="admin">Admin</option>
            </select>
            @error('role')<div class="invalid-feedback"> {{ $message }} </div>@enderror
          </div>

          <div class="form-group text-muted font-weight-light" style="font-size: 14px;">
            <label for="password">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" wire:model.defer="state.password">
            @error('password')<div class="invalid-feedback"> {{ $message }} </div>@enderror
          </div>

          <div class="form-group text-muted font-weight-light" style="font-size: 14px;">
            <label for="passwordConfirmation">Confirm Password</label>
            <input type="password" class="form-control @error('confirmPassword') is-invalid @enderror" id="passwordConfirmation" placeholder=" Confirm Password " wire:model.defer="state.confirmPassword">
            @error('confirmPassword')<div class="invalid-feedback"> {{ $message }} </div>@enderror
          </div>
        
          <!-- <div class="form-group">
              <label for="customFile">Profile Photo</label> 

              <div class="custom-file">
               <input wire:model="photo" type="file" class="custom-file-input" id="customFile">
               <label class="custom-file-label" for="customFile">
                 @if ($photo)
                   {{ $photo->getClientOriginalName() }}
                 @else
                    Choose image
                 @endif
               </label>
                  <div wire:loading wire:target="photo">Uploading...</div>
              </div>
          </div> -->
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary w-25" data-dismiss="modal"><i class="fas fa-times mr-1"></i> Cancel</button>
        <button type="submit" class="btn btn-primary w-25"><i class="fas fa-save mr-1"></i>
        
          <span>Save</span>
          
        </button>
      </div>
    </div>
    </form>
  </div>
</div>
   