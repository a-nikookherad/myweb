@if(Session('msg'))
<div class="alert  alert-success alert-dismissible">
    <span class="close" data-dismiss="alert">&times;</span>
    <p style="padding-right: 20px;">{{Session('msg')}}</p>
</div>
@endif
