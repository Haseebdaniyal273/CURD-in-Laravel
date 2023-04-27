<table>

<thead>
<tr>

<th>Name</th>
<th>ID</th>
<th>Phone</th>
<th>City</th>
</tr>
</thead>
<tbody>
<button><a href="/insertform">Add new Product</a></button>

@foreach($student_ as $std)
<tr>
<td>{{$std->name}}</td>
<td>{{$std->id}}</td>
<td>{{$std->ph}}</td>
<td>{{$std->city}}</td>
<td>

<button><a href="/edit?id={{$std->id}}">Update</a></button>
<button><a href="/delete?id={{$std->id}}">Delete</a></button>
</td>
</tr>
@endforeach

</tbody>

</table>