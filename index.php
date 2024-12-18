<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Evento de Programación en JavaScript">
    <title>Evento de Programación en JavaScript</title>

    <!-- Vinculación de Tailwind CSS a través de CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fuentes de Google -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<body class="font-roboto bg-gray-50">

    <!-- Header -->
    <header class="bg-blue-600 text-white py-6">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl font-bold">¡Desafío de Programación JavaScript!</h1>
            <p class="mt-2 text-lg">Demuestra tus habilidades y gana premios increíbles</p>
        </div>
    </header>

    <!-- Sección de Descripción -->
    <section class="py-12">
        <div class="container mx-auto text-center px-4">
            <img src="javascript.jpg" alt="Evento Programación" class="mx-auto rounded-lg shadow-lg mb-6">
            <h2 class="text-3xl font-semibold text-blue-600 mb-4">¿En qué consiste el evento?</h2>
            <p class="text-lg text-gray-700 mb-4">Este evento está diseñado para poner a prueba tus habilidades en JavaScript. Los participantes deberán completar retos que pondrán a prueba su lógica, creatividad y conocimientos del lenguaje.</p>
            <p class="text-lg text-gray-700">Los mejores serán premiados con increíbles premios. ¡Demuestra tu talento y conviértete en el próximo campeón de JavaScript!</p>
        </div>
    </section>

    <!-- Sección de Premios -->
    <section class="bg-gray-200 py-12">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-semibold text-blue-600 mb-6">Premios para los Ganadores</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-bold text-blue-600 mb-4">Primer Lugar</h3>
                    <p class="text-lg text-gray-700">Un gadget tecnológico de última generación.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-bold text-blue-600 mb-4">Segundo Lugar</h3>
                    <p class="text-lg text-gray-700">Un curso en línea sobre desarrollo web avanzado.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-bold text-blue-600 mb-4">Tercer Lugar</h3>
                    <p class="text-lg text-gray-700">Una suscripción a una plataforma de aprendizaje en línea.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Formulario de Contacto -->
    <section class="py-12">
        <div class="container mx-auto text-center px-4">
            <h2 class="text-3xl font-semibold text-blue-600 mb-6">¡Contáctanos!</h2>
            <p class="text-lg text-gray-700 mb-4">Si tienes alguna pregunta, no dudes en escribirnos a través del siguiente formulario.</p>

            <form action="#" method="POST" class="max-w-lg mx-auto bg-white p-8 rounded-lg shadow-lg">
                <div class="mb-4">
                    <label for="nombre" class="block text-gray-700 font-medium">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="w-full px-4 py-2 border border-gray-300 rounded-lg mt-2" required>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium">Correo Electrónico</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg mt-2" required>
                </div>

                <div class="mb-4">
                    <label for="mensaje" class="block text-gray-700 font-medium">Mensaje</label>
                    <textarea id="mensaje" name="mensaje" class="w-full px-4 py-2 border border-gray-300 rounded-lg mt-2" rows="4" required></textarea>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg mt-4 hover:bg-blue-700">Enviar Mensaje</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-6 mt-12">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Evento de Programación JavaScript. Todos los derechos reservados.</p>
        </div>
    </footer>

</body>
</html>
