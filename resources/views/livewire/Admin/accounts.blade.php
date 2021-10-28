<div>

<div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">

              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Accounts</h1>
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
                
            <div class="card">
              <div class="card-header">
                <!---------add new user--------->
                <div class="d-flex justify-content-between mb-2">
                        <button wire:click.prevent="addUser" class="btn btn-info btn-sm w-25" ><i class="fa fa-plus-circle mr-2"></i>Create new user</button>
                            <x-search wire:model="searchTerm"/> <!--search-->
                      </div>
                <!---------add new user button--------->
              </div>
              <div class="card-body">
                 <!------------table------------>
                <div class="col-md-12">
                <div class="main-card mb-3 card">
                  
                 <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead class="text-muted">
                        <tr>
                        <th scope="col"  class="text-center">Sn</th>
                        <th scope="col">Name</th>
                        <th scope="col"  class="text-center">Username</th>
                        <th scope="col"  class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody wire:loading.class="text-muted">
                    
                     @forelse($users as $user)
                        <!-- <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                          <div style="width: 40px; height: 40px ; object-fit: cover; display: inline-block">
                            <img src="/storage/{{ $user->avatar }}"  class="img img-circle mr-2" alt="" style="height: 100% ; width: 100% ; background-image: blue">
                          </div>
                          {{ $user->name }}
                        </td>
                        
                        <td>{{ $user->username }}</td>
                        <td>
                          @if ($user->role === 'admin')
                          <span class="badge badge-success" style="width:80px ;height:20px">ADMIN</span>
                          @elseif ($user->role === 'teacher')
                          <span class="badge badge-primary" style="width:80px ;height:20px">TEACHER</span>
                          @elseif ($user->role === 'student')
                          <span class="badge badge-warning" style="width:80px ;height:20px">STUDENT</span> 
                          @endif
                        </td>
                        <td>
                        <button class="btn btn-primary " style=" width:100px; height:38px " wire:click.prevent="edit({{ $user }})">Edit</button>
                        <button class="btn btn-danger " style=" width:100px; height:38px " wire:click.prevent="confirmUserRemoval({{ $user->id }} )">Delete</button>
                        </td>
                        </tr> -->


                     <tr>
                       <td class="text-center text-muted">{{ $loop->iteration }}</td>
                       <td>
                         <div class="widget-content p-0 " >
                            <div class="widget-content-wrapper" >
                                <div class="widget-content-left mr-3  d-inline-block">
                                    <div class="widget-content-left ">
                                        <img width="50" height="50" class="rounded-circle " src="/storage/{{ $user->avatar }}" alt="">
                                    </div>
                                </div>
                                <div class="widget-content-left flex2 d-inline-block">
                                    <div class="widget-heading opacity-7 ">{{ $user->name }}</div>
                                    <div class="widget-subheading opacity-7 text-muted text-uppercase"> {{$user->role}}</div>
                                </div>
                            </div>
                         </div>
                       </td>
                       <td class="text-center text-muted ">{{ $user->username }}</td>
                
                       <td class="text-center ">
                          <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm  d-inline" wire:click.prevent="edit({{ $user }})"><i class="fas fa-edit"></i></button>
                          <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm  d-inline" wire:click.prevent="confirmUserRemoval({{ $user->id }} )"><i class="fas fa-trash"></i></button> 
                       </td>
                     </tr>
                        @empty
                          <tr class="text-center text-muted">
                              <td colspan="5">
                                
                                <p class="mt-2">No result found</p>
                             
                              </td>
                          </tr>
                        @endforelse
                       
                     
                    </tbody>
                 </table>
                 </div>
                 </div>
                 <!------------/.table------------>
                 
                  <div class=" d-flex ml-2 ">
                  
                    {{ $users->links() }}
                 
                  </div>
                 
              </div>
            </div><!-- /.col-md-6 -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
     </div>
    <!-- /.content -->
</div>
<!-- Content Header (Page header) -->
  
  @include('livewire.Admin.create')
  <x-delete wire:click.prevent="deleteUser"/> <!--delete-->
</div>


