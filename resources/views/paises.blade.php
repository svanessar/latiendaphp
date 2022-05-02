<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap-reboot.min.css" integrity="sha512-ioOlrrQQ3fZN/A7N2rZVm6JXp/Lg7xtda9OaRKornjBcuTW/UqIhTlPyngcGQGrQTOhJgmSltKM4v3Ne03WPug==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<style type="text/css">
    body{
        background-color: #F2DFFE; 
    }
    h1{
        text-aling: center;
        color: #34236E;
       
    }
  
</style>
<body>
    <h1><em><center>paises de la region</center></h1>
    <table class="table table-striped">
        <thead> 
            <tr bgcolor="#3BBAFE">
                <th>
                    pais
                </th>
                <th>
                    capital
                </th>
                <th>
                    moneda
                </th>
                <th>
                    poblacion
                </th>
                <th>ciudades</th>
            </tr>
           
        </thead>
        <tbody>
            @foreach($paises as $pais => $infopais)
            <tr>
                <td rowspan='{{count($infopais["ciudades"])}}' >
                {{$pais}}
            </td>
                <td rowspan='{{count($infopais["ciudades"])}}' >
                    {{$infopais["capital"]}}
                </td>
                <td rowspan='{{count($infopais["ciudades"])}}' >
                    {{$infopais["moneda"]}}</td>
                <td rowspan='{{count($infopais["ciudades"])}}' >{{$infopais["poblacion"]}}

                </td>
                @foreach($infopais["ciudades"] as $cuidad)
                <tr>
                    <td>{{ $cuidad }}</td>
                </tr>
                @endforeach
            </tr>

            @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
</body>
</html>