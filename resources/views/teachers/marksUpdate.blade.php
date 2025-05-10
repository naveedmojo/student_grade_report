@extends('layout.dashboard')

@section('title','Mark Update')


@section('content')
@if(session('success'))
    <h3>{{session('success')}}</h3>
@endif
@if(session('error'))
    <h3>{{session('error')}}</h3>
@endif
<h1>Student Marks Update Form</h1>
<form method="post" action="{{route('teacher.updateMarks')}}">
    @csrf
    <input type="hidden" name="student_id" value="{{$student_id}}" />
    <lablel>select term</lablel>
    <select required name="term_id" id="termSelect" required>
        <option value="">select a term</option>
        @foreach($terms as $term)
            <option value="{{$term->id}}" >{{$term->name}}</option>
        @endforeach
    </select>
    <h4>Enter Marks for subjects</h4>
    @foreach($subjects as $subject)
        <label>{{$subject->name}}</label>
        <input type="number" min="0" max="100" required name="subject_id[{{$subject->id}}]" id="subject_{{$subject->id}}" />
    @endforeach
    <button type="submit"><b>UPDATE MARKS</b></button>

</form>

<script>
    document.getElementById('termSelect').addEventListener('change', function() {
        const termId = this.value;
        const studentId = {{ $student_id }};
        if (termId) {
            fetch(`/teacher/getMarks/${studentId}/${termId}`)
                .then(response => response.json())
                .then(data => {
                    data.marks.forEach(mark => {
                        const inputField = document.getElementById(`subject_${mark.subject_id}`);
                        if (inputField) {
                            inputField.value = mark.marks;
                        }
                    });
                })
                .catch(error => console.error('Error fetching marks:', error));
        }
    });
</script>
@endsection
