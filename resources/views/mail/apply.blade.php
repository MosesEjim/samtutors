<h3>Request For Tutor</h3>

<table>

    <tr>
        <td>Teacher's name</td>
        <td>{{$request->firstname}} {{$request->lastname}}</td>
    </tr>
    <tr>
        <td>Teacher's address</td>
        <td>{{$request->address}} </td>
    </tr>
    <tr>
        <td>Teacher's email</td>
        <td>{{$request->email}} </td>
    </tr>
    <tr>
        <td>Teacher's phone</td>
        <td>{{$request->phone}} </td>
    </tr>
    <tr>
        <td>Teacher's gender</td>
        <td>{{$request->gender}} </td>
    </tr>
    <tr>
        <td>Teacher's DOB</td>
        <td>{{$request->age}} </td>
    </tr>
    
    <tr>
        <td>Subjects</td>
        <td>
        @foreach($request["subjects"] as $subject)
            {{$subject}} &nbsp;
        @endforeach
        </td>
    </tr>

    <tr>
        <td>Teacher's Referee Name</td>
        <td>{{$request->refereename}} </td>
    </tr>
    <tr>
        <td>Teacher's Referee Phone</td>
        <td>{{$request->refereephone}} </td>
    </tr>
    <tr>
        <td>Teacher's Description</td>
        <td>{{$request->description}} </td>
    </tr>
</table>