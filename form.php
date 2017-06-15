        <div class="container">
          <div class="row">
            <div class="col-sm-12 text-center detailsHeader">
              <h3 class="detailsHeader blueText" >Just few more Details...</h3>
            </div>
          </div>
        </div>  

    <div style="padding-bottom: 130px;" class="container">

        <form onkeypress="return event.keyCode != 13;" action="core/new.php" method="POST">
          <div class="form-group" >
            <label for="designation">Current Designation</label>
            <input required type="text" class="form-control Designation" id="designation" name="designation" placeholder="Ex. Singer / Designer">
          </div>

          <div class="form-group" >
            <label for="mobNum">Mobile Number</label>
            <input required type="tel" class="form-control Mobile" maxlength="10" id="mobNum" name="mobNum">
          </div>
          <div class="form-group">
            <label for="autocomplete">Current City</label>
            <input required type="text" class="form-control City" id="autocomplete" name="city" placeholder="Select from suggestions">
          </div>
          
              <input hidden type="text" name="uniqueID" class="uniqueID">

          <div class="form-inline">
            <label class="col-sm-12 col-md-3" for="fromYear">Student of GECA From</label>
            <input required type="text" class="form-control yearselect input-lg"  id="fromYear" name="fromYear" value="1998">
            <label class="center" for="toYear">To</label>
            <input required class="form-control yearselect input-lg" type="text" id="toYear" name="toYear" value="2002">
          </div>
          <div class="form-group">
            <label for="autocomplete">Branch</label>
            <select required class="selectpicker form-control" name="branch">
              <option value="" disabled selected="selected" >Select Branch</option>
              <option value="Civil Engineering" >Civil Engineering</option>
              <option value="Electrical Engineering" >Electrical Engineering</option>
              <option value="Mechanical Engineering" >Mechanical Engineering</option>
              <option value="Electronics And Telecommunications" >Electronics & Telecommunication Engineering</option>
              <option value="Computer Science And Engineering" >Computer Science And Engineering</option>
              <option value="Information Technology" >Information Technology</option>
              <option value="MCA" >Master of Computer Application</option>
            </select>              
          </div>

           <div class="form-group">
             <label for="dob">Date of Birth</label>
             <input required type="text" class="form-control date-input" id="dob" name="dob" placeholder="DD / MM / YYYY">
           </div>
           <div id="date-picker"> </div>



          
          <div class="form-group gender">

                  <label>Gender : </label>
                  <span style="padding-left: 10px;" class="maleRadio">
                    <input  type="radio" name="gender" value="Male" class="with-gap" id="male" data-error=".errorTxt6"/>
                    <span style="padding-right: 10px;" for="male">Male</span>
                  </span>
           

                  <input type="radio" name="gender" value="Female" class="with-gap" data-error=".errorTxt6" id="female" />
                  <span for="female">Female</span>
              </span>


          </div>

          <script>
            var input = document.getElementById('autocomplete');
            var autocomplete = new google.maps.places.Autocomplete(input);
          </script>
          <button type="" class="btn btn-default updateProfile" name="updateProfile">Submit</button>
          <!-- <div class="updateProfile">hkjhkj</div> -->
        </form>         
      </div><!--end of row-->
    </div><!--end of container-->

    
 