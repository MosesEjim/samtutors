<h3>Request For Tutor</h3>

<table>

    <tr>
        <td>Student name</td>
        <td>{{$request->firstname}} {{$request->lastname}}</td>
    </tr>
    <tr>
        <td>Student address</td>
        <td>{{$request->address}} </td>
    </tr>
    <tr>
        <td>Student email</td>
        <td>{{$request->email}} </td>
    </tr>
    <tr>
        <td>Student phone</td>
        <td>{{$request->phone}} </td>
    </tr>
    <tr>
        <td>Student gender</td>
        <td>{{$request->gender}} </td>
    </tr>
    <tr>
        <td>Student DOB</td>
        <td>{{$request->age}} </td>
    </tr>
    <tr>
        <td>Student prefered Tutor Gender</td>
        <td>{{$request->tutorGender}} </td>
    </tr>
    <tr>
        <td>Schedule</td>
        
        <td>
        @foreach($request["schedule"] as $schedule)
            {{$schedule}} &nbsp;
        @endforeach
        </td>

    </tr>
    <tr>
        <td>subjects</td>
        <td>
        @foreach($request["subjects"] as $subject)
            {{$subject}} &nbsp;
        @endforeach
        </td>
    </tr>
    <tr>
        <td>When do you want to start?</td>
        <td>
        {{$request->start}}
        </td>
    </tr>
    <tr>
        <td>Duration</td>
        <td>
        {{$request->duration}}
        </td>
    </tr>
    <tr>
        <td>Hours per day</td>
        <td>
        {{$request->hours}}
        </td>
    </tr>
    <tr>
        <td>Time of the day</td>
        <td>
        {{$request->time}}
        </td>
    </tr>
    <tr>
        <td>Educational Level</td>
        <td>
        {{$request->educationLevel}}
        </td>
    </tr>
    <tr>
        <td>Lesson Goal</td>
        <td>
        {{$request->goals}}
        </td>
    </tr>
    <tr>
        <td>Number Of Kids</td>
        <td>
        {{$request->numberOfKids}}
        </td>
    </tr>

</table>