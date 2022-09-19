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
<body>
<h1>Salon information all</h1>
{!! link_to('create_table', 'Add Salon Info', ['class' => 'btn btn-primary']) !!}
        @foreach($salon_data as $data)
            <article>
                ============================<br>
                Salon-Name:{{$data->salon_name}}
                <br>
                Salon-info:{{$data->salon_info}}
                <br>
                ============================<br>
            </article>
        @endforeach
        {!! link_to('create_menu', 'Add Menu', ['class' => 'btn btn-primary']) !!}
        @foreach($menu_data as $data)
            <article>
                ============================<br>
                Salon-menu:{{$data->menu_info}}
                <br>
                ============================<br>
            </article>
        @endforeach
</body>
</html>