@if (Session::has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>{{Session::get('message')}}</strong>
</div>
@endif
