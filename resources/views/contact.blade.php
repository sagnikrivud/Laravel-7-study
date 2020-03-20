 <link href="{{asset('css/contact.css')}}" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

<form action="{{route('snet_contact')}}" method="post">
	@csrf
		<input name="name" placeholder="What is your name?" class="name" required />
		<input name="email" placeholder="What is your email?" class="email" type="email" required />
    <textarea rows="4" cols="50" name="message" placeholder="Please enter your message" class="message" required></textarea>
   {{--  <input name="submit" class="btn" type="submit" value="Send" style="
    float: left" /> --}}
    <button type="submit" class="btn" style="float: left" name="submit"><i class="fa fa-paper-plane" aria-hidden="false"></i></button>
    <a href="{{URL::to('/')}}" class="btn" style="width: 95px; height: 22px; float: left;"><i class="far fa-hand-point-left" style="float: right;"></i></a>

</form>
<div class="footer">
 @include('layouts/footer')
</div>
