<!-- Add Facility  Modal  -->
<div class="modal fade modal-slide-right" id="add_subject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Add Subject</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body save-record">
        <form class="form-horizontal">
        
          <div class="row form-group">  
            <div class="col-md-4">
              <label for="subject_name">Subject Name <span class="requird">*</span></label>                    
            </div>

            <div class="col-md-8">
                <input type="text" class=" form-control" name="subject_name" id="subject_name" >
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
              <label for="class">Class <span class="requird">*</span></label>                    
            </div>

            <div class="col-md-8">
                <select id="teacher_id" name="teacher_id" class="form-control" value="">
                  <option value="">Select Teacher</option> 
                  @foreach($teachers as $teacher)
                  <option value="{{$teacher->id}}">{{$teacher->name}}</option> 
                  @endforeach
              </select>
            </div>                                   
        </div>
            

        </form>              
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="create_subject_btn" onclick="createSubject()">Save</button>
        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End of Modal -->