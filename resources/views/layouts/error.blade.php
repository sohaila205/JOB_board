@if (isset($errors))
  @if (count($errors) > 0)
  <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        @foreach ($errors->all() as $error)
            <strong>{{$error}}</strong>
        @endforeach
    </div>
  @endif
@endif