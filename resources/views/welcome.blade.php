<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
    <style type="text/css">
        table { border-collapse: collapse;
        }
        table, tr, td { border: 1px solid black;
        }
    </style>
</head>
<body>
    <h2>Tasques per fer</h2>
    <table border="1px">
        <tr>
            <td>Tasca</td>
            <td>Descripció</td>
            <td>Fet</td>
            <td>Esborrar</td>
        </tr>
         @foreach($remaining as $remaining)
            <tr>
                <td>
                    {{$remaining->task}}
                </td>
                <td>
                    {{$remaining->description}}
                </td>
                <td style="background-color: red">
                </td>
                <td>
                    <a href="/{{$remaining->id}}">Esborrar</a>
                </td>
            </tr>
         @endforeach
     </table>
     <h2>Tasques fetes</h2>
     <table border="1px">
        <tr>
            <td>Tasca</td>
            <td>Descripció</td>
            <td>Fet</td>
            <td>Esborrar</td>
        </tr>
         @foreach($done as $done)
            <tr>
                <td>
                    {{$done->task}}
                </td>
                <td>
                    {{$done->description}}
                </td>
                <td style="background-color: green">
                </td>
                <td>
                    <a href="/delete/{{$remaining->id}}">Esborrar</a>
                </td>
            </tr>
         @endforeach
     </table>
</body>
</html>