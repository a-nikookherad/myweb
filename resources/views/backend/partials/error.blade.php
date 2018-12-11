@if($errors->any())
    <div class="alert alert-dismissible alert-danger text-right">
        <i class="close" data-dismiss="alert">&times;</i>
        @foreach($errors->all() as $error)
            <p style="padding-right: 20px;">{{$error}}</p>
        @endforeach
    </div>
@endif
