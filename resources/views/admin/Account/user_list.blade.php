<h3>User List</h3>
<table border='1'>
    <thead>
    <tr>
        <td>Id </td>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
    </tr>
    </thead>
    <tbody> 
    @foreach ($data as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->name}}</td>
        <td>{{$row->email}}</td>
        <td>{{$row->password}}</td>
    </tr>
     @endforeach 
</tbody>
</table>