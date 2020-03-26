@if ( $errors->{ $bag ?? 'default' }->any() )
  <div class="field mt-3">
    <ul class="list-none">
      @foreach( $errors->{ $bag ?? 'default' }->all() as $error )
        <li class="text-sm text-red-600 mb-3">{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif