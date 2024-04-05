<!-- Add Student  Modal  -->
<div class="modal fade modal-slide-right" id="add_teacher" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title w-100" id="myModalLabel">Add Teacher</h4>
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
                  <label for="class">sex <span class="requird">*</span></label>                    
                </div>
  
                <div class="col-md-8">
                    <select id="sex" name="sex" class="form-control" value="">
                      <option value="">Select Sex</option> 
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>

                  </select>
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
        <button type="button" class="btn btn-primary" id="create_teacher_btn" onclick="createTeacher()">Save</button>
        <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End of Modal -->