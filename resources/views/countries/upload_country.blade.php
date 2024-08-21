<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Datos de Países</title>
</head>
<body>
    <h1>Subir Datos de Países</h1>
    
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('countries.upload.country.process') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="sql_file" accept=".txt" required>
        <button type="submit">Subir y Procesar</button>
    </form>
</body>
</html>
