<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Submit Bootstrap Contact Form in Laravel 5 using toastr notifications jquery</title>
   
    <link rel="stylesheet" href="http://www.expertphp.in/css/bootstrap.css" type="text/css" media="all" />
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="http://demo.expertphp.in/js/jquery.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<body>
<div class="container">
<div class="panel panel-primary">
 <div class="panel-heading">Submit Contact Form in Laravel 5 using toastr notifications jquery</div>
  <div class="panel-body"> 
       {!! Form::open(array('route' => 'postcontact','method'=>'POST')) !!}
               <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                        {!! $errors->first('name', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                </div>
                 <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email:</strong>
                        {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                        {!! $errors->first('email', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Message:</strong>
                        {!! Form::textarea('message', null, array('placeholder' => 'Message','class' => 'form-control','style'=>'height:100px')) !!}
                        {!! $errors->first('message', '<p class="alert alert-danger">:message</p>') !!}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                {!! Form::submit('Save',['class'=>'btn btn-success']) !!}
                </div>
        {!! Form::close() !!}
    </div>
</div>
</div>
<script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>
</body>
</html>