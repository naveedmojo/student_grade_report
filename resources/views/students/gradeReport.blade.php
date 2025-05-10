@extends('layout.dashboard')
@section('title','Grade Report')

@section('content')
    @if($grade_report)
        <h1>Grade Report</h1>
            <table border="2px" cellpadding="5px" cellspacing="5px">
                <thead>
               <tr>
                   <th>
                       SUBJECT
                   </th>
                  @foreach($terms as $term)
                      <th colspan="3">
                          {{strtoupper($term)}}
                      </th>
                  @endforeach
               </tr>
                    <tr>
                        <th></th>
                        @for($i=1;$i<=3;$i++)
                            <th>marks</th>
                            <th>grade</th>
                            <th>result</th>
                        @endfor
                    </tr>
                </thead>

        <tbody>
                @foreach($grade_report as $subject=>$mark)
                    <tr>
                        <td>{{$subject}}</td>
                    @foreach($terms as $term)
                       @if(array_key_exists($term,$mark))
                            <td>{{$mark[$term]['marks']}}</td>
                            <td>{{$mark[$term]['grade']}}</td>
                            <td>{{$mark[$term]['result']}}</td>
                            @else
                                <td>N/A</td>
                                <td>N/A</td>
                                <td>N/A</td>
                            @endif
                    @endforeach
                    </tr>
                @endforeach
        </tbody>
            </table>
    @else
        <h3>Student Grade report not available</h3>
    @endif


@endsection
