<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>1</th>
                <th>2</th>
                {{-- <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($applications as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->email}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
