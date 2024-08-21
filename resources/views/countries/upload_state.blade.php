<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Datos de Estados</title>
</head>
<body>
    <h1>Subir Datos de Estados</h1>
    
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <form action="{{ route('countries.upload.state.process') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="sql_file" accept=".txt" required>
        <button type="submit">Subir y Procesar</button>
    </form>
</body>
</html>
