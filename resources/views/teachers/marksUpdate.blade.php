<h1>Student register Form</h1>
<form method="post" action="{{route('teacher.updateMarks')}}">
    @csrf
    <label>Select a student class</label>
    <select name="section_id" required>
        @foreach($sections as $section)
            <option value="{{$section->id}}">{{$section->name}}</option>
        @endforeach
    </select>
    <br><br>
    <label>Select a student</label>
    <select name="student_id" required>
        @foreach($students as $student)
            <option value="{{$student->id}}}">{{$student->name}}</option>
        @endforeach
    </select>
    <br><br>
    <input  type="text" hidden="" value="{{Auth::user()->id}}" name="teacher_id" />
    <lablel>select term</lablel>
    <select name="term_id">
        @foreach($terms as $term)
            <option value="{{$term->id}}" >{{$term->name}}</option>
        @endforeach
    </select>
    <h4>Enter Marks for subjects</h4>
    @foreach($subjects as $subject)
        <label>{{$subject->name}}</label>
        <input type="number" min="0" max="100" required name="subject_id[{{$subject->id}}]" />
    @endforeach
    <button type="submit"></button>

</form>
