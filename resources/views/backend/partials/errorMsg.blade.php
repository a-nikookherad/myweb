@if(Session('errorMsg'))
    <div class="alert alert-danger alert-dismissible">
        <span class="close" data-dismiss="alert">&times;</span>
        <p style="padding-right: 20px;">{{Session('errorMsg')}}</p>
    </div>
@endif