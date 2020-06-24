@if(count($errors) > 0)
@foreach($errors->all() as $error)
<div class="row d-flex justify-content-center">
    <div class="alert alert-danger">
        {{$error}}
    </div>
</div>
@endforeach
@endif
