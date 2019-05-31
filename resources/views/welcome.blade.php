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
                <input type="submit" value="Afegir nova tasca" style="background-color: white; color: black; text-align: center; margin: auto; margin-top: 20px; outline: none; border: solid 2px black; font-weight: bold;">
            </form>
        </div>
    <h2>Tasques per fer</h2>
    <table border="1px">
        <tr style="background-color: grey">
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
                <td style="background-color: red" onmouseover="this.style.color='green';">
                    <form action="/done/{{$remaining->id}}" method="POST">
                        @csrf
                        <input type="submit" value="" style="width: 100%; border:none;color:transparent; background-color: red;">
                    </form>
                </td>
                <td>
                    <form action="/delete/{{$remaining->id}}" method="POST">
                        @csrf
                        <input type="submit" value="Esborrar">
                    </form>
                </td>
            </tr>
            <b>* Pulsa sobre la casella "fet" en vermell per a acabar la tasca</b>
         @endforeach
     </table>
     <h2>Tasques fetes</h2>
     <table border="1px">
        <tr style="background-color: grey">
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