<html>
<head>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }

        body {
            margin: 3cm 2cm 2cm;
        }

        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2a0927;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2a0927;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>
<body>
<header>
    <h1>Listado de Pedido</h1>
</header>

<main>
	<table border="1">
		<tr>
            <th>Empresa: </th>
            <th>Ubicación: </th>
            <th>Teléfono: </th>
			<th>Fecha: </th>
        </tr>
        <tr>
            <th>WeirdoComics</th>
            <th>Querétaro, Centro</th>
            <th>442 345 6758</th>
			<th>07/12/2022</th>
        </tr>
    </table>

    <h1>Contenido</h1>
	<table border="1">
		<tr>
            <th>Le atendió: </th>
            <th>No. Empleado: </th>
            <th>Rol: </th>
        </tr>
        <tr>
            <th>{{$users->nombre}}</th>
            <th>{{$users->noEmpleado}}</th>
            <th>{{$users->rol}}</th>
        </tr>
    </table>

	<h1>Meteriales Requeridos</h1>
	<table border="1">
		<tr>
            <th>Producto: </th>
            <th>Descripción: </th>
            <th>Cantidad: </th>
        </tr>
		@foreach($ticket as $tick)
        <tr>
            <th>{{$tick->nombre_tipo}}</th>
            <th>{{$tick->company_descripcion}}</th>
            <th>{{$tick->cantidad}}</th>
        </tr>
		@endforeach
    </table>

</main>

<footer>
    <h1>WeirdoComics</h1>
</footer>
</body>
</html>