@if($errors->any())
  <div class="alert alert-danger">
  <strong>Please review the error</strong>
    <ul>
      @foreach($errors->all() as $error)
        <li>
          {{ $error }}
        </li>
      @endforeach
    </ul> 
  </div>
@endif

@if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

@if(Session::has('warning'))
    <div class="alert alert-danger">
        {{ Session::get('warning') }}
    </div>
@endif