<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Índice del Proyecto</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif; line-height: 1.6; padding: 2em; background-color: #f4f4f9; color: #333; }
        .container { max-width: 800px; margin: 0 auto; background: #fff; padding: 2em; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
        h1 { color: #5a67d8; }
        ul { list-style-type: none; padding: 0; }
        li { margin: 0.8em 0; border-bottom: 1px solid #eee; padding-bottom: 0.8em; }
        a { text-decoration: none; color: #337ab7; font-weight: bold; font-size: 1.1em; }
        a:hover { color: #23527c; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Índice de Archivos del Proyecto</h1>
        <p>Los siguientes archivos se han detectado automáticamente en esta carpeta:</p>
        <ul>
            <?php
                // Lee todos los archivos y carpetas del directorio actual '.'
                $files = scandir('.');

                // Recorre cada archivo encontrado
                foreach ($files as $file) {
                    // Excluye el directorio actual, el directorio padre y este mismo archivo
                    if ($file !== '.' && $file !== '..' && $file !== 'index.php') {
                        // Crea un elemento de lista con un enlace al archivo
                        echo "<li><a href='{$file}'>{$file}</a></li>";
                    }
                }
            ?>
        </ul>
    </div>
</body>
</html>