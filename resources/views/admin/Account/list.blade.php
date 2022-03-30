@include('layouts.style')
<h1>User List</h1>
<div class="container-fluid">
<table class="table table-bordered table-sm table-hover  border-primary">
    <thead class="table-active bg-primary">
        <tr>
            <th>
                ID
            </th>
            <th>
               Name
            </th>
            <th>
                Email
            </th>
            <th>
                Profile
            </th>
        </tr>

    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['name']}}</td>
            <td>{{$user['email']}}</td>
            <td>{{$user['Photo']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
