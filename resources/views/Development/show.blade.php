<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>{{$project->name}}</h1>
    <table class="table table-striped">
        <tr>
            <th>description</th>
            <td>{{$project->description}}</td>
        </tr>
    </table>
<div>
</body>
</html>