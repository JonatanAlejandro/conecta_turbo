<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Evaluación</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

<div class="container mt-5">

    <!-- Encabezado -->
    <div class="text-center mb-4">
        <h2>Evaluación Básica TIC</h2>

        <p class="text-muted">
            Responde las siguientes preguntas sobre alfabetización digital.
        </p>
    </div>

    <!-- Formulario -->
    <form>

        <!-- Pregunta 1 -->
        <div class="mb-4">

            <label class="form-label">
                1. ¿Qué significa TIC?
            </label>

            <input 
                type="text" 
                class="form-control"
                placeholder="Escribe tu respuesta"
            >

        </div>

        <!-- Pregunta 2 -->
        <div class="mb-4">

            <label class="form-label">
                2. ¿Qué navegador web conoces?
            </label>

            <input 
                type="text" 
                class="form-control"
                placeholder="Ejemplo: Chrome"
            >

        </div>

        <!-- Pregunta 3 -->
        <div class="mb-4">

            <label class="form-label">
                3. ¿Qué herramienta sirve para videollamadas?
            </label>

            <select class="form-select">

                <option>Seleccione una opción</option>
                <option>Zoom</option>
                <option>Excel</option>
                <option>Paint</option>

            </select>

        </div>

        <!-- Botón -->
        <button class="btn btn-primary w-100">
            Enviar Evaluación
        </button>

    </form>

</div>

<script src="js/scripts.js"></script>

</body>
</html>