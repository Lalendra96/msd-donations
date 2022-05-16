

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>SMPSRP Donations Informations</title>
      <!-- Bootstrap -->
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link rel="icon" href="/images/stateEmblem.png">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <script src="{{asset('js/bootstrap.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
   </head>
   <style>
      body{
      font-family: 'Poppins'
      }
   </style>
   <body style="padding-top: 70px">
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark text-white"> 
       <a class="navbar-brand" href="{{route('msdDonations.home')}}">
       <span class="font-weight-600"><img src="./images/stateEmblem.png" alt="" style="width: 40px;" />State Ministry of Production </span>
       <br/><small>Supply and Regulation of Pharmaceuticals </small></a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	    <div class="collapse navbar-collapse navbar-menu" id="navbarSupportedContent1">
	      <ul class="navbar-nav nav ml-auto navbar-right">
	        <li class="nav-item"> <a class="nav-link" href="#about-us">About us</a> </li>
	        <li class="nav-item"> <a class="nav-link" href="#donation">Donations</a> </li>
          </ul>
       </div>
       <p class="text-right mb-0"><a class="btn btn-danger btn-two" href="{{config('externalUrl.stockurl')}}" role="button" target="_blank">Stock Mgmt. Login</a> </p>
  </nav>
      <div class="container">
         <div class="row">
            <div class="col-md-4">
               &nbsp;
            </div>
            <div class="col-md-4">
               &nbsp;
            </div>
            <div class="col-md-4">
               &nbsp;
            </div>
         </div>
      </div>
      <div class="container">
         <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8" style="margin-top: 1cm; margin-bottom: 2cm;">
               <form id="addDonations" name="addDonations" autocomplete="off" method="POST" action="{{route('msdDonations.addDonationInformation')}}">
                  @csrf
                  <legend>Donations Information</legend>
                  <div class="form-group">
                     <label class="col-sm-2 control-label">Title<sup style="color:red">*</sup></label>
                     <select class="form-control" name="title" id="title">
                        <option value='-' selected>Select</option>
                        <option value='Mr.'>Mr.</option>
                        <option value='Mrs.'>Mrs.</option>
                        <option value='Miss.'>Miss.</option>
                        <option value='Dr.'>Dr.</option>
                        <option value='Prof.'>Prof.</option>
                        <option value='Rev.'>Rev.</option>
                        <option value='Ven.'>Ven.</option>
                     </select>
                  </div>
                  <br>
                  <div class="form-group">
                     <label class="col-sm-2 control-label">Donar's Name<sup style="color:red">*</sup></label>
                     <input type="text" autocomplete="off" class="form-control txtOnly" name="donar_name" placeholder="Please enter your name" required>
                  </div>
                  <br>
                  <div class="form-group">
                     <label class="col-sm-2 control-label">Donation Amount<sup style="color:red">*</sup></label>
                     <div class="input-group">
                        <select name="currency" id="currency" class="form-control" required>
                        </select>
                        <input type="number" autocomplete="off" class="form-control" name="donar_amount" min="1" placeholder="Please enter your Amount" required>
                     </div>
                  </div>
                  <br>
                  <div class="form-group">
                     <label class="col-sm-2 control-label">Donar's Country<sup style="color:red">*</sup></label>
                     <input list="country" name="donar_country" id="countryList" class="form-control">
                     <datalist id="country">
                     </datalist>
                  </div>
                  <br>
                  <div class="form-group">
                     <label class="col-sm-2 control-label">Contact No.<sup style="color:red">*</sup></label>
                     <input type="text" autocomplete="off" class="form-control" name="donar_contact" placeholder="Please enter your Contact Details" required maxLength="20">
                  </div>
                  <br>
                  <div class="form-group">
                     <label class="col-sm-2 control-label">Donar's Email.</label>
                     <input type="email" autocomplete="off" class="form-control" name="donar_email" placeholder="Please enter your Email Address" required>
                  </div>
                  <br><br>
                  <div class="form-group">
                     <button id="submitElm" style="display:inline-block" class="btn btn-outline-success" type="submit">Donate</button>
                     <input type="reset" class="btn btn-outline-danger">
                  </div>
               </form>
            </div>
            <div class="col-md-2">&nbsp;</div>
         </div>
      </div>
      <footer class="text-center bg-dark text-white">
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <p>Copyright ©  State Ministry of Production, Supply and Regulation of Pharmaceuticals 2022. All rights reserved.</p>
               </div>
            </div>
         </div>
      </footer>
      <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" type="text/javascript"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
      <script type="text/javascript">
         $.ajaxSetup({
         headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
         });
         
         $(document).ready(function() {
           
           $('.telephone').keypress(function(e) {
               //if the letter is not digit then display error and don't type anything
               if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                   //display error message
                   toastr.error("Only Numbers Allowed! Please Refrain from Characters")
                   return false;
               }
           });

           $.ajax({
					url: "{{ route('msdDonations.common.countrylist') }}",
                    type: "post",
                    delay: 250,
                    dataType: 'json',
                    data:{
            			"_token": "{{ csrf_token() }}",
                    },success: function(data) {
						   let countryStr = "<option value='-' selected>Select Country</option>";
						   for(let country = 0; country < data.length; country++){
							
							countryStr += "<option value='"+data[country].countryName+"'>"+data[country].countryName+"</option>";
						}
						document.getElementById('country').innerHTML=countryStr;
					}
				});

            $.ajax({
					url: "{{ route('msdDonations.common.currencylist') }}",
                    type: "post",
                    delay: 250,
                    dataType: 'json',
                    data:{
            			"_token": "{{ csrf_token() }}",
                    },success: function(data) {
						   let currencyStr = "<option value='-' selected>Select Your Currency</option>";
						   for(let currency = 0; currency < data.length; currency++){
							
                        currencyStr += "<option value='"+data[currency].currencyName+"'>"+data[currency].currencyName+"</option>";
						}
						document.getElementById('currency').innerHTML=currencyStr;
					}
				});
         
         });
         
         // $(function(){
         $('#addDonations').on('submit', function(e){
            e.preventDefault();
         
            if(document.getElementById('title').value == "-"){
               toastr.error("Please Select Your Title");
            }else{
               let form = this;

               let formData = new FormData(form);
         
               $('#submit-btn').attr('disabled','disabled');
               
               $.ajax({
                  url: $(form).attr("action"),
                  method: $(form).attr("method"),
                  data: formData,
                  headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                  dataType: 'json',
                  processData:false,
                  contentType:false,
                  success:function(data){
                     if(data.success == true){
         	            toastr.success(data.message);
                     }else{
         	            toastr.error(data.message);
                     }
                     document.getElementById('addDonations').reset();
                  }
              })
            }
         
               
        });
        
      </script>
   </body>
</html>

