<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        
    </tr>
@foreach ($users as $user)
<tr>
    <th>{{$user->name}}</th>
    <th>{{$user->email}}</th>
    <th>{{$user->password}}</th>
    
  </tr>
@endforeach
  
</table>

