<?php
     $serialNo = 1;
?>
<center>
    <h2>Display Page</h2>
    <br>
    <br>

    

    <form action="/search" method="get">
        @csrf
        <input type="text" placeholder="search by name" name="search" value="{{ @$search }}"  /> 
        <br>
        <br>
        <br>
        <input type="submit" value="Search" >
    </form>
    <!-- {{ $data }} -->

    <table border="1" cellpadding="12" cellspacing="0" >
        <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Address</th>
        <th>Gender</th>
        <th>Date</th>
        <th>Course</th>
        <th>Img</th>
        <th>Hobbies</th>
        <th colspan="2" >Actions</th>
        </tr>

        
        @foreach($data as $val)
        <tr>
           <td>{{ $serialNo++ }}</td>
           <td>{{ $val->name }}</td>
           <td>{{ $val->email }}</td>
           <td>{{ $val->password }}</td>
           <td>{{ $val->address }}</td>
           <td>{{ $val->gender }}</td>
           <td>{{ $val->date }}</td>
           <td>{{ $val->course }}</td>
           <td><img src="{{ 'storage/images/'.$val->img }}" width="50px" alt=""></td>
           <td>{{ $val->hobbies }}</td>
           <td> <a href="/edit/{{$val->id}}">Edit</a> </td>
           <td> <a href="/delete/{{$val->id}}">Delete</a> </td>
        </tr>
           @endforeach
    </table>
    

    <br>
    <br>
    <a href="/profile">back home</a>
</center>