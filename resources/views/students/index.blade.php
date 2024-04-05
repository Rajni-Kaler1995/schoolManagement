@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    
                    <!-- <button class="btn-primary"type="button" stype="align:right">Add</button> -->

                    <a href="#" class="btn btn-primary" id="add_student_button" data-toggle="modal" data-target="#add_student">
                        <span class="d-none d-sm-inline-block ml-1">Add Student</span>
                    </a>
                </div>
                <!-- <a type="button">Add</a> -->
                <div class="card-body">
                    
                        <!-- <div class="alert alert-success" role="alert">
                            Hello Subjects
                        </div> -->
                  

                    <div class="table-responsive">
                    <table class="display" cellspacing="0" width="100%" id="subject-table">
                        <thead>  
                            <tr style="font-size: 14px;">
                                <th>Name</th> 
                                <th>Roll NO.</th>
                                <th>Age</th>
                                <th>Class</th>
                                <th>Image</th>
                            </tr> 
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td>{{$student->roll_no}}</td>
                                <td>{{$student->age}}</td>
                                <td>{{$student->class}}</td>
                                <td>image</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('students.create')
@endsection
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/dataTables.bootstrap.min.css" integrity="sha512-BMbq2It2D3J17/C7aRklzOODG1IQ3+MHw3ifzBHMBwGO/0yUqYmsStgBjI0z5EYlaDEFnvYV7gNYdD3vFLRKsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script>
  $(document).ready(function(){
    var subjectTable =  $('#subject-table').DataTable({
              "aaSorting": [],
              stateSave: true,
              "aoColumnDefs": [{ // this is remove the sorting on the last column
              "bSortable": false,
              "aTargets": [ -1 ]
          }],
          "pageLength" : 10,
      });
    });
     
    function createStudent(){
        $('#create_student_btn').attr('disabled','disabled');
        let studentData = new FormData(); 
		// let TotalFiles = $('#files')[0].files.length; //Total files
		// let files = $('#files')[0];
		// for (let i = 0; i < TotalFiles; i++) {
		// 	activeEquipment.append('files' + i, files.files[i]);
		// }
		// activeEquipment.append('total_files', TotalFiles);
		
		var name = $('#name').val();
		var age = $('#age').val();
		var student_class = $('#class').val();
		var rollNo = $('#rollNo').val();
        studentData.append('name',name);
		studentData.append('age',age);
		studentData.append('class',student_class);
		studentData.append('rollNo',rollNo);
        
        let _url    = "{{route('student.create')}}";
        let _token   = $('meta[name="csrf-token"]').attr('content');
        studentData.append('_token',_token);
        let dataa  = "1";
			$.ajax({
				url: _url,
                type: 'post',
                data: studentData,
                contentType: false,
                processData: false,
				success: function(response) {
                    $('.validation_error').remove();
					window.location.reload();
				},
				error: function(response) {
                    $('.validation_error').remove();
                    $('#create_student_btn').removeAttr('disabled','disabled');
                    let errors = response.responseJSON.errors;
                    $.each(errors, function (index, value) {
                        var msg_id = 'msg_'+index;
                        $('input[name= "'+ index +'"]').parent('.col-md-8').append("<span id="+msg_id+" class='validation_error text-danger'><strong>" + value[0] + "</strong> </span>");
                        $('select[name= "'+ index +'"]').parent('.col-md-8').append("<span id="+msg_id+" class='validation_error text-danger'><strong>" + value[0] + "</strong> </span>");
                    });
                }
			});
    }

</script>    