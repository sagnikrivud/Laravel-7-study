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
      <form action="" method="post">
        @csrf
        <div class="form-item box-item">
          <input type="text" name="name" placeholder="Name" data-required>
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
        </div>
        <div class="form-item box-item">
          <input type="email" name="email" placeholder="Email" data-email data-required>
          <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
          <small class="errorEmail"><i class="fa fa-asterisk" aria-hidden="true"></i> email is not valid</small>
        </div>
        <div class="form-item box-item">
          <div class="form-item-triple">
            <div class="radio-label"> 
              <label class="label">Gender</label>
            </div>
            <div class="form-item"> 
              <input id="Male" type="radio" name="gender" value="Male" data-once>
              <label for="Male">Male</label>
            </div>
            <div class="form-item"> 
              <input id="Female" type="radio" name="gender" value="Female" data-once>
              <label for="Female">Female</label>
            </div>
          </div>
          <small class="errorOnce"><i class="fa fa-asterisk" aria-hidden="true"></i> choose at least one</small>
        </div>
        {{-- <div class="form-item box-item">
          <div class="form-item-triple">
            <div class="radio-label"> 
              <label class="label">Type</label>
            </div>
            <div class="form-item"> 
              <input id="sponsored" type="radio" name="gender2" value="sponsored" data-once>
              <label for="sponsored">sponsored</label>
            </div>
            <div class="form-item"> 
              <input id="paid" type="radio" name="gender2" value="paid" data-once>
              <label for="paid">paid</label>
            </div>
          </div>
          <small class="errorOnce"><i class="fa fa-asterisk" aria-hidden="true"></i> choose at least one</small>
        </div> --}}
        <div class="form-item box-item">
          <input type="text" name="address" placeholder="Address" data-required>
          {{-- <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small> --}}
        </div>
        <div class="form-item-double box-item">
         {{--  <div class="form-item ">
            <input type="text" name="strNumber" placeholder="Str Number" data-required data-number>
            <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
            <small class="errorNum"><i class="fa fa-asterisk" aria-hidden="true"></i> must be a number</small>
          </div> --}}
          <div class="form-item">
            <input type="text" name="zCode" placeholder="Zip Code" data-required data-number>
            {{-- <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="true"></i> required field</small>
            <small class="errorNum"><i class="fa fa-asterisk" aria-hidden="true"></i> must be a number</small> --}}
          </div>
        </div>
        <div class="form-item box-item">
          <input type="text" name="phone" placeholder="Phone" data-required data-number data-count="10">
        {{--   <small class="errorReq"><i class="fa fa-asterisk" aria-hidden="false"></i> required field</small>
          <small class="errorNum"><i class="fa fa-asterisk" aria-hidden="false"></i> must be a number</small>
          <small class="errorChar"><i class="fa fa-asterisk" aria-hidden="false"></i> must be 10 digits</small> --}}
        </div>
        <div class="form-item">
         {{--  <span>Submit</span> --}}
         <input type="submit" name="" value="Submit"  id="submit" class="submit">
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