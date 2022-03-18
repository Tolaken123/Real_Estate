<h3>User List</h3>

<table border='1'>
    <tr>
        <td>Id </td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
    </tr>
   
    @foreach($user as $user)
    <tr>
        <td>{{$user['id']}}</td>
        <td>{{$user['name']}}</td>
        <td>{{$user['email']}}</td>
        <td>{{$user['password']}}</td>
    </tr>
    @endforeach
</table>