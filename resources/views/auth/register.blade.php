 <link href="{{asset('css/register.css')}}" rel="stylesheet">
 <script type="text/javascript" src="{{asset('js/register.js')}}"></script>
<body background="{{asset('images/source.gif')}}">
<div class="row">
  <section class="section">
    <header>
      <h3>Register</h3>
      <h4>Please fill your information bellow</h4>
    </header>
    <main>
<form action="{{route('create')}}" method="post">
        @csrf
        <div class="form-item box-item">
          <span id="error"></span>
          <input type="text" name="name" placeholder="Name" id="name">
         {{--  <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small> --}}
        </div>
        <div class="form-item box-item">
          <span id="error"></span>
          <input type="email" name="email" placeholder="Email" data-email data-required id="email">
        </div>
        <div class="form-item box-item">
          <div class="form-item-triple">
            <div class="radio-label"> 
              <label class="label">Gender</label>
              <span id="error"></span>
            </div>
            <div class="form-item"> 

              <input id="gender" type="radio" name="gender" value="Male" data-once>
              <label for="Male">Male</label>
            </div>
            <div class="form-item"> 

            <input id="gender" type="radio" name="gender" value="Female" data-once>
              <label for="Female">Female</label>
            </div>
          </div>
         {{--  <small class="errorOnce"><i class="fa fa-asterisk" aria-hidden="true"></i> choose at least one</small> --}}
        </div>
        
        <div class="form-item box-item">
          <span id="error"></span>
          <input type="text" name="address" placeholder="Address" data-required id="address">
      
        </div>
        <div class="form-item-double box-item">
       
          <div class="form-item">
            <span id="error"></span>
            <input type="password" name="Password" placeholder="Password" data-required data-number id="password">
            
          </div>
        </div>
        <div class="form-item box-item">
          <span id="error"></span>
          <input type="text" name="mobile" placeholder="Phone" data-required data-number data-count="10" id="mobile">
        
        </div>
        <div class="form-item">
         {{--  <span>Submit</span> --}}
         <input type="submit" name="" value="Submit" id="submit" class="submit">
        </div>
      </form>
    </main>
    <footer>
 @include('layouts/footer')
    </footer>
    
    <i class="wave"></i>
  </section>
</div>
</body>
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script>
  function form_submit() 
  {
    //alert('hi');
  var name     = $('#name').val();
  var email    = $('#email').val();
  var gender   = $('#gender').val();
  var address  = $('#address').val();
  var password = $('#password').val();
  var mobile   = $('#mobile').val(); 
if(name=='' && email=='' && gender=='' && address=='' && password=='' && mobile=='') {
    return false;
    $('#error').show();
    $('#error').html('<strong><font color="red">Please fill this</font></strong>');
    

        }else{

    return true; 
     $('#error').show();
     $('#error').html('<strong>Please fill this</strong>');


        }
  }
</script>