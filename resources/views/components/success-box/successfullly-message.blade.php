 @if (session()->has('message'))
     <div class="card bg-success successfully-message col-md-8 ml-3 p-2">
         {{ session()->get('message') }}
     </div>
 @endif
