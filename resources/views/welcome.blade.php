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
    @csrf
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
                    <form action="/done" method="POST">
                        @csrf
                        <input type="hidden" name="toDone" value="{{$remaining->id}}">
                        <input type="submit">
                    </form>
                </td>
                <td>
                    <form action="/delete" method="POST">
                        @csrf
                        <input type="hidden" name="toDelete" value="{{$remaining->id}}">
                        <input type="submit">
                    </form>
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