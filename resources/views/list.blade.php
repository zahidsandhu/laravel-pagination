<h1>Member List</h1>

<table border="1">
    <tr>
    
        <th> ID</th>
        <th> Name</th>
        <th> Email</th>
        <th> Address</th>
    </tr>
    <tbody>
    @foreach($memberlist as $list)
    <tr>
        <td>{{$list['id']}} </td>
        <td> {{$list['name']}}</td>
        <td>{{$list['email']}} </td>
        <td> {{$list['pasword']}}</td>

    </tr>
    @endforeach
    </tbody>
    
</table>

<div>
{{ $memberlist->links()}}
</div>

<style>
.w-5{
    display:none;
}
</style>