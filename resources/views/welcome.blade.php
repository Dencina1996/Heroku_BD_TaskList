<!DOCTYPE html>
<html>
<head>
    <title>TESTING</title>
    <style type="text/css">
        table { border-collapse: collapse;
        }
        table, tr, td { border: 1px solid black;
        }
    </style>
</head>
<body>
    <table border="1px">
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
                <td>
                    @if({{$data->status}} == 1)
                        Fet
                    @else
                        Pendent
                    @endif
                </td>
            </tr>
         @endforeach
     </table>
</body>
</html>