<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body style="padding: 20px 300px;">
<h1>新規記事投稿ページ</h1>
 
 <hr/>
 {!! Form::open(['url' => 'create_table', 'files' => true]) !!}
     <div class="form-group">
         {!! Form::label('salon_name', 'Salon Name:') !!}
         {!! Form::text('salon_name', null, ['class' => 'form-control']) !!}
     </div>
     <div class="form-group">
         {!! Form::label('salon_info', 'Salon-infomation:') !!}
         {!! Form::textarea('salon_info', null, ['class' => 'form-control']) !!}
     </div>
     <div class="form-group">
         {!! Form::label('category', 'Category(Number):') !!}
         {!! Form::input('number','category', null,['class' => 'form-control'])!!}
         <!-- {!! Form::number('category', null, ['class' => 'form-control']) !!} -->
     </div>
     <!-- <div class="form-group">
         {!! Form::label('published_date', 'Publish On:') !!}
         {!! Form::input('date', 'published_date', date('Y-m-d'), ['class' => 'form-control']) !!}
     </div> -->
     <div class="form-group">
        {!! Form::submit('Add Salon Infomation', ['class' => 'btn btn-primary form-control']) !!}
     </div>
 {!! Form::close() !!}
</body>
</html>