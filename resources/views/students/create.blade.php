<!-- Add Student  Modal  -->
<div class="modal fade modal-slide-right" id="add_student" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Add Student</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body save-record">
        <form class="form-horizontal">
        
            <div class="row form-group">  
              <div class="col-md-4">
                <label for="name">Name <span class="requird">*</span></label>                    
              </div>

              <div class="col-md-8">
                  <input type="text" class=" form-control" name="name" id="name" >
              </div>                                   
            </div>

			<div class="row form-group">  
              <div class="col-md-4">
                <label for="age">Age <span class="requird">*</span></label>                    
              </div>

              <div class="col-md-8">
                  <input type="number" class="form-control" name="age" id="age" >
              </div>                                   
            </div>
            
            <div class="row form-group">  
                <div class="col-md-4">
                  <label for="class">Class <span class="requird">*</span></label>                    
                </div>
  
                <div class="col-md-8">
                    <select id="class" name="class" class="form-control" value="">
                      <option value="">Select Class</option> 
                      @foreach($classes as $class)
                      <option value="{{$class->id}}">{{$class->class}}</option> 
                      @endforeach
                  </select>
                </div>                                   
            </div>

            <div class="row form-group">  
                <div class="col-md-4">
                  <label for="rollNo">Roll No. <span class="requird">*</span></label>                    
                </div>
  
                <div class="col-md-8">
                    <input type="text" class=" form-control" name="rollNo" id="rollNo" >
                </div>                                   
            </div>

            <div class="row form-group">  
                <div class="col-md-4">
                  <label for="image">Image </label>                    
                </div>
  
                <div class="col-md-8">
                    <input type="file" class=" form-control" name="image" id="image" >
                </div>                                   
            </div>

        </form>              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="create_student_btn" onclick="createStudent()">Save</button>
        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End of Modal -->