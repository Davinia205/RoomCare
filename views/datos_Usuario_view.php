<!DOCTYPE html>
<html lang="en">
    
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--bootstrap 4 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<!DOCTYPE html>
<html>
<head>
    <title>Detalle Usuario</title>
    <style>
      body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.table-responsive {
    width: 100%;
    height: 400px; /* Set a fixed height for the table container */
    overflow: auto;
    position: relative;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    padding: 12px 15px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

th {
    background-color:#0DCAF0;
    position: sticky;
    top: 0; /* Keep the header at the top */
    z-index: 10;
    color: white
}

tr:hover {
    background-color: #f1f1f1;
}

@media (max-width: 600px) {
    table, thead, tbody, th, td, tr {
        display: block;
    }

    thead tr {
        display: none;
    }

    tr {
        margin-bottom: 15px;
    }

    td {
        text-align: right;
        padding-left: 50%;
        position: relative;
    }

    td::before {
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 15px;
        font-weight: bold;
        text-align: left;
    }
}
}
    </style>
</head>
<body>

<center><p><b>Listado de Usuarios</b></p></center>

<table>
    <tr>
        <th>Usuario</th>
        <th>Contraseña</th>
        <th>Nombre</th>
        <th>ID Hotel</th>
        <th>Tipo</th>
        <th>Cargo</th>


    </tr>
