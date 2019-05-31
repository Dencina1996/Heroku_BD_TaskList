<!DOCTYPE html>
<html>
<head>
    <title>TESTING</title>
</head>
<body>
    <table border="15px">
        <tr>
            <td>Tasca</td>
            <td>Descripció</td>
            <td>Fet</td>
            <td>Esborrar</td>
        </tr>
         @foreach($mydata as $data)
            <tr>
                <td>
                    {{$data->task}}
                </td>
                <td>
                    {{$data->description}}
                </td>
            </tr>
         @endforeach
     </table>
</body>
</html>