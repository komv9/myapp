<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Members</title>
</head>
<style type="text/css">
  * {
    margin: 10px;
    padding: 2px;
  }
</style>
<body>
  <h1>Add Team Member</h1>
<div class="alert alert-success" role="alert" id="successMsg" style="display: none" >
  Thank you for getting in touch! 
</div>

  <form method="POST" action="{{url('/submit_members')}}" id="submitform">
    @csrf
    <label>Member Name: </label>
    <input type="text" name="name" id="name" />
     <span id="nameErrorMsg"></span><br><br>
    <label>Member Photo: </label>
    <input type="file" name="photo" id="InputPhoto" />
    <span id="photoErrorMsg"></span><br><br>
    <label>Designation: </label>
    <input type="text" name="designation" id="InputDesignation" />
    <span id="designationErrorMsg"></span><br><br>
    <label>Department: </label>
    <input type="text" name="department"/>
    <span id="departmentErrorMsg"></span><br><br>
    <label>LinkedIn Profile URL: </label>
    <input type="text" name="linkedin" id="InputLinkedIn" />
    <span id="linkedinErrorMsg"></span><br><br>
    <label>Country: </label>
    <select name="country" id="InputCountry">
      <option value="India">India</option>
      <option value="Pakistan">Pakistan</option>
      <option value="USA">USA</option>
      <option value="China">China</option>
    </select>
    <span id="countryErrorMsg"></span><br><br>
      <button type="submit" class="savebtn">Submit</button>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
$('form#submitform').submit(function(e){
         let btnval = $(".savebtn").text();
         let redirect = $(this).attr('data-redirect');
         $(".savebtn").html('Please Wait...');
         $(".savebtn").attr('disabled', true);
         $('.errormessage').html('');
         $('.error').each(function(){
             $(this).removeClass('error');
         });
         
         var formData = new FormData(this);
         $.ajax({
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
             method      : 'POST',
             data        : formData,
             url         : $(this).attr('action'),
             processData : false, // Don't process the files
             contentType : false, // Set content type to false as jQuery will tell the server its a query string request
             dataType    : 'json',
             success     : function(response){
                 if(response.success == true)
                 {
                     swal.fire({   
                             title: "Success",   
                             text: response.message,   
                             icon: "success",   
                             showCancelButton: false,
                             showConfirmButton: false,
                             timer: 5000
                     });
                     const myTimeout = setTimeout(function(){
                      window.location.href="";
                     }, 5000);                     
                         
                 }
                 else
                 {
                     $.notify(""+response.data+"", {type:"danger"});
                     $(".savebtn").html(btnval);
                     $(".savebtn").attr('disabled', false);
                 }
             },
             error       : function(data){
                 var errors = $.parseJSON(data.responseText);
                 $.each(errors.errors, function(index, value) {
                     $('[name="'+index+'"]').addClass('error');
                      $('[name="'+index+'"]').after('<span class="text-danger errormessage">'+value+'</span>');
                     
                 });
                 $(".savebtn").html(btnval);
                 $(".savebtn").attr('disabled', false);
             }
 
      });
         return false;
     });
  </script>
</body>
</html>