 <link href="{{asset('css/about.css')}}" rel="stylesheet">
 <script src="{{asset('js/about.js')}}"></script>


<!-- Half banner with mask -->
{{-- @include('layouts/top_header') --}}
<section class="half-banner-mask white-text">
    <div class="container breadcrumbs-container d-none d-lg-block">
        {{-- <div class="top breadcrumbs">
            <span>Blog/Latest News</span>
        </div> --}}
    </div>
    <div class="container-fluid">
        <div class="row grey-bg">
            <div class="col-sm-5 my-auto banner-text-container banner-text-container--outer order-2 order-sm-1">
                <div class="banner-text-container banner-text-container--inner">
                    <h1 class="banner-heading text-center">Frequently Asked Questions</h1>

                    <div class="mustard-hr d-block d-sm-none"></div>
                    <p class="banner-text text-center">There are many benefits of using The PX Partnerships Part
                        Exchange Scheme, whether you currently offer your own scheme or not...</p>
                    <a href="https://nodejs.org/en/docs/" class="mustard-btn large-px-btn px-btn d-inline d-sm-none">Learn More</a>
                    <a href="{{URL::to('/')}}" class="mustard-btn large-px-btn px-btn d-inline d-sm-none">Home</a>
                </div>
            </div>
            <div class="col-sm-7 image order-1 order-sm-2"
        style="background-image:  url('{{asset('images/about.png')}}')">

            </div>
        </div>
    </div>
</section>
<script>
    function home()
    {
        window.location.href = "{{URL::to('/')}}";
    }
</script>
@include('layouts/footer')

<!-- / Half banner with mask 
url('https://i.ibb.co/0tyZ0w3/light-grey-mask.png'),-->