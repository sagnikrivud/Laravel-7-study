 <link href="{{asset('css/home.css')}}" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">
 <center>
    @include('layouts/header')
<div class="student-profile py-4">
  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" src="https://placeimg.com/640/480/arch/any" alt="">
            <h3>{{Auth::user()->name}}</h3>

          </div>
          <div class="card-body">
            <p class="mb-0"><strong class="pr-1">Student ID:</strong>321000001</p>
            <p class="mb-0"><strong class="pr-1">Class:</strong>4</p>
            <p class="mb-0"><strong class="pr-1">Section:</strong>A</p>
          </div>
        </div>
        {{-- logout --}}
        <div class="card-body pt-0">
            <table class="table table-bordered">
            <div class="button">
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button class="btn btn-danger" type="submit"><i class="fas fa-thumbs-down"></i></button>
                </form>
            </div>
            </table>
        </div>
            {{-- logout --}}
      </div>
      <div class="col-lg-8">
        <div class="card shadow-sm">
          <div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>General Information</h3>
          </div>
          <div class="card-body pt-0" style="float: right;">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Role</th>
                <td width="2%">:</td>
                <td>{{AUth::user()->role->display_name}}</td>
              </tr>
              <tr>
                <th width="30%">Academic Year</th>
                <td width="2%">:</td>
                @php 
                $year = Auth::user()->created_at;
                $year = date('d-m-Y',strtotime($year));
                @endphp
                <td>{{$year}}</td>
              </tr>
              <tr>
                <th width="30%">Gender</th>
                <td width="2%">:</td>
        <td><span class="badge badge-danger">{{Auth::user()->gender}}</span></td>
              </tr>
              <tr>
                <th width="30%">Email</th>
                <td width="2%">:</td>
                <td><input style="background-color: #A5D8C9" type="email" name="email" readonly="" id="email" value="{{Auth::user()->email}}" onclick="allt()"></td>
              </tr>
              <tr>
                <th width="30%">Password</th>
                <td width="2%">:</td>
                <td><input type="Password" name="password" id="password"></td>
              </tr>
              <tr>
                <th width="30%">Compition</th>
                <td width="2%">:</td>
                <td><select name="subject" id="subject" onchange="su_submit()">
                    <option>-Select-</option>
                    <option value="1">Node-js</option>
                    <option value="2">Cylon-js</option>
                </select></td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</center>
<!-- /Student Profile -->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    function su_submit()
    {
        var subject = $('#subject').val();
        var csrf = $('#csrf-token').attr('content');
        $.ajax({
            type    : "post",
            url     : "/action",
            data    : {subject:subject, _token:csrf},
            success : function(data)
            {

            }
        })
        swal("", "You have submitted your choise!", "success");
    }

    function allt()
    {
        swal("","You can't Edit your contact email","warning");
    }
</script>