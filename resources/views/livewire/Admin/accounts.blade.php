<div>

<div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">

              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
              </div><!-- /.col -->

              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item active">Accounts</li>
                </ol>
              </div><!-- /.col -->

            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
</div><!-- /.container-header -->

<!-- Main content -->
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
                <!---------add new user--------->
                    <div class="d-flex justify-content-end mb-2">
                        <button wire:click.prevent="addUser" class="btn btn-info" style="width:200px; height: 40px"><i class="fa fa-plus-circle mr-2"></i>ADD</button>
                    </div>
                <!---------add new user button--------->
            <div class="card">
              <div class="card-body">
                 <!------------table------------>
                 <table class="table table-borderless">
                    <thead>
                        <tr>
                        <th scope="col">Sn</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                     @foreach($users as $user)
                        <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>
                          @if ($user->role === 'admin')
                          <span class="badge badge-success">ADMIN</span>
                          @elseif ($user->role === 'teacher')
                          <span class="badge badge-primary">TEACHER</span>
                          @elseif ($user->role === 'student')
                          <span class="badge badge-warning">STUDENT</span>
                          @endif
                        </td>
                        <td>
                        <button class="btn btn-primary " style=" width:100px; height:38px " wire:click.prevent="edit({{ $user }})">Edit</button>
                        <button class="btn btn-danger " style=" width:100px; height:38px " wire:click.prevent="confirmUserRemoval({{ $user->id }} )">Delete</button>
                        </td>
                        </tr>
                     @endforeach
                    </tbody>
                 </table>
                 <!------------/.table------------>
              </div>
            </div><!-- /.col-md-6 -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
     </div>
    <!-- /.content -->
</div>
<!-- Content Header (Page header) -->
  @include('livewire.Admin.add-accounts-modal')
  @include('livewire.Admin.delete-confirmation-modal')
</div>


