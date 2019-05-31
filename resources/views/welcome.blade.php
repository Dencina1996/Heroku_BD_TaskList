<!DOCTYPE html>
<html>
<head>
    <title>Dencina Task List - Heroku & Laravel</title>
    <style type="text/css">
        table { border-collapse: collapse;
        }
        table, tr, td { border: 1px solid black;
        }
        div {   background-color: #d20b5d;
                height: auto;
                padding: 10px;
                text-align: right;
                clear: both;
                width: 300px;
                font-weight: bold;
                color: white;
                border: solid 3px black;
        }
    </style>
</head>
<body>
    <div>
        <h2 style="text-align: center; color: white;">Afegir tasca</h2>
            <form action="/add" method="POST">
                @csrf
                <label>Tasca: </label><input type="text" name="task">
                <br>
                <label>Descripció: </label><input type="text" name="description">
                <br>
                <input type="submit" value="Afegir nova tasca" style="background-color: grey">
            </form>
        </div>
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
                    <form action="/done/{{$remaining->id}}" method="POST">
                        @csrf
                        <input type="submit" value="" style="width: 100%; border:none;color:transparent;">
                    </form>
                </td>
                <td>
                    <form action="/delete/{{$remaining->id}}" method="POST">
                        @csrf
                        <input type="submit" value="Esborrar">
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
                    <form action="/delete/{{$done->id}}" method="POST">
                        @csrf
                        <input type="submit" value="Esborrar">
                    </form>
                </td>
            </tr>
         @endforeach
     </table>
</body>
</html>