 <link href="{{asset('css/node-home.css')}}" rel="stylesheet">
 <script type="javascript" src="{{asset('js/node-home.js')}}"></script>
<div class="filter-buttons">
  <div class="list-view-button"><i class="fa fa-bars" aria-hidden="true"></i> List view</div>
  <div class="grid-view-button"><i class="fa fa-th-large" aria-hidden="true"></i> Grid view</div>
  <div class="list-view-button">
  {{-- <form action="{{URL::to('')}}" method="get"> --}}
  	<form action="{{route('home')}}" method="get">
  	<button class="btn btn-warning" type="submit">Back</button>
  </form>
  </div>
</div>

<ol class="list list-view-filter">
 <a href=""><li>Introduction To Node-JS</li></a> 
 <a href=""><li>Install Node-enviorment</li></a> 
 <a href=""><li>Create Node Project</li></a>  
 <a href=""><li>Command List</li></a> 
 <a href=""><li>Node helpers</li></a> 
 <a href=""><li>Mysql Connection</li></a>  
<a href=""><li>Mongodb</li></a>  
<a href=""><li>Mongodb Install</li></a>  
</ol>