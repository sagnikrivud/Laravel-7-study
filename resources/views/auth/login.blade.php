<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <!-- <link rel="stylesheet" href="Style.css"> -->
        <link href="{{asset('css/login.css')}}" rel="stylesheet">
        <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  {{-- csrf attribute --}}
  <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body>
            <form class="Box" action="{{route('login')}}" method="POST" id="">
            
                @csrf
                <div id="error" style="display: none"></div>
                <h1>Login</h1>
                <input type="text" name="email" placeholder="email" id="email">
                <input type="password" name="password" placeholder="Password" id="password" onblur="logged()">
                <input type="submit" value="Login" onclick="">
                <a href="{{route('back')}}" class="back"><i class="fa fa-arrow-left" aria-hidden="false"></i></a>
                  @include('layouts/footer')
            </form>
    </body>

</html>

<script>
    function logged()
    {
  // alert('hi');
    var email     = $('#email').val();
    var password  = $('#password').val();
    var csrftoken = $('#csrf-token').attr('content');
    $.ajax({
        type    : "POST",
        url     : "{{route('login_check')}}",
        data    : {email:email, password:password, _token:csrftoken},
        success : function(data)
        {
             if(data.trim()=='not')
             {

            $('#error').show();
            $('#error').html('<strong><font color="red">Not Match</font></strong>');

             }else{

            $('#error').show();
            $('#error').html('<strong><font color="green">Match</font></strong>');
             }
        }
    });
    }

</script>