@extends('layouts.app')
@section('content')
<div class="card-header py-3 border-bottom-primary">
    <h6 class="m-0 font-weight-bold text-primary">User Management</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
            
            <table class="table table-striped" id="dataTable">
                <thead>
                    <tr style="background-color: rgb(10, 12, 15)">
                        <th scope="col">User Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td class="align-middle">{{ $user->id }}</td>
                                <td class="align-middle text-capitalize">{{ $user->name }}</td>
                                <td class="align-middle">{{ $user->email }}</td>
                                <td class="align-middle">{{implode(', ', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td class="align-middle">{{ $user->phone }}</td>
                                <td class="align-middle">

                                    @can('edit-users')
                                <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning btn-square rounded-4">
                                    <i class="fas fa-edit"></i>
                                </a>
                                @endcan
                                @can('delete-users')
                                <a href="javascript:void(0)" onclick="deleteUser({{ $user->id }})" class="btn btn-danger btn-square rounded-4">
                                    <i class="fas fa-trash"></i>
                                </a>
                                
                                <form id="user{{ $user->id }}" action="{{ route('admin.users.destroy', $user->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                </form>
                                @endcan

                                </td>
                                </tr>
                                @endforeach
                        </tbody>
            </table>
    
    </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function deleteUser(user_id) {
        if(confirm('Delete user?')){
            $('#user'+user_id).submit()
        }
    }
</script>
@endsection