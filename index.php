<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BMIS - Bienvenido</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>
<body class="bg-[#F4EDE2] text-[#1A1A1A]">

  <!-- NAVBAR -->
<header class="bg-white shadow-md py-4 px-6 flex justify-between items-center">
  <div class="logo">
    <img src="logo.png" alt="Logo" class="w-20 h-auto" />
  </div>
  <nav class="space-x-6 text-sm hidden md:flex">
    <a href="#" class="hover:text-[#1E726E]">Inicio</a>
    <a href="#" class="hover:text-[#1E726E]">Servicios</a>
    <a href="#" class="hover:text-[#1E726E]">Nosotros</a>
    <a href="#" class="hover:text-[#1E726E]">Contacto</a>
  </nav>
  <a href="#" class="bg-[#1E726E] text-white px-4 py-2 rounded-md font-semibold hover:bg-[#155e5b] transition">Registrarse</a>
</header>

  <!-- SECCIÓN PRINCIPAL -->
  <section class="text-center py-16 px-6 max-w-4xl mx-auto">
    <h2 class="text-[#1E726E] text-lg font-semibold uppercase mb-4">Sobre BMIS</h2>
    <p class="text-xl text-gray-800 leading-relaxed">
      BMIS (Biodigester Monitoring Intelligent System) es un sistema inteligente que permite monitorear en tiempo real la producción de biogás en biodigestores mediante sensores y asistencia por voz basada en inteligencia artificial. Está diseñado para comunidades rurales, facilitando el acceso a información clara sobre el estado del sistema a través de una aplicación móvil. Su objetivo es impulsar el uso de energías limpias, mejorar la calidad de vida y promover la sostenibilidad ambiental en zonas con acceso limitado a recursos energéticos tradicionales.
    </p>
  </section>

  <!-- ANUNCIO -->
  <section class="max-w-6xl mx-auto rounded-xl shadow-md mb-16 px-4">
  <div class="relative" style="padding-top: 56.25%;">
    <iframe class="absolute top-0 left-0 w-full h-full rounded-xl"
      src="https://www.youtube.com/embed/MDtgoxZT9oI"
      title="Anuncio Publicitario"
      frameborder="0"
      allowfullscreen>
    </iframe>
  </div>
</section>

 
 <!-- FORMULARIO + IMAGEN -->
<section class="max-w-6xl mx-auto px-6 md:grid md:grid-cols-2 gap-10 items-center pb-20">

  <!-- Imagen (solo una) -->
<div class="h-full flex items-center justify-center">
  <img src="BMIS.png" alt="Usuario llenando formulario" class="w-full object-contain max-h-[500px]" />
</div>

  <!-- Formulario -->
  <div class="bg-white p-8 rounded-lg shadow-lg w-full">
    <form action="formulario.php" method="POST" class="space-y-4">
      <h3 class="text-2xl font-bold mb-6 text-[#1E726E]">Formulario de participación BMIS</h3>

      <input type="text" name="nombre" placeholder="Nombre completo" required class="w-full px-4 py-2 border border-gray-300 rounded-md" />
      <input type="text" name="direccion" placeholder="Dirección o zona" required class="w-full px-4 py-2 border border-gray-300 rounded-md" />
      <input type="tel" name="celular" placeholder="Número de celular" required class="w-full px-4 py-2 border border-gray-300 rounded-md" />

      <label class="block font-medium text-gray-700">¿Está interesado(a) en participar en el proyecto BMIS?</label>
      <div>
        <label class="mr-4"><input type="radio" name="interes" value="Sí" required /> Sí</label>
        <label class="mr-4"><input type="radio" name="interes" value="No" /> No</label>
        <label><input type="radio" name="interes" value="Necesito más información" /> Necesito más información</label>
      </div>

      <label class="block font-medium text-gray-700">¿Tiene espacio en casa para instalar un pequeño sistema de biodigestor?</label>
      <div>
        <label class="mr-4"><input type="radio" name="espacio" value="Sí" required /> Sí</label>
        <label class="mr-4"><input type="radio" name="espacio" value="No" /> No</label>
        <label><input type="radio" name="espacio" value="No estoy seguro(a)" /> No estoy seguro(a)</label>
      </div>

      <label class="block font-medium text-gray-700">¿Desea recibir una breve capacitación sobre el uso del BMIS?</label>
      <div class="mb-4">
        <label class="mr-4"><input type="radio" name="capacitacion" value="Sí" required /> Sí</label>
        <label><input type="radio" name="capacitacion" value="No" /> No</label>
      </div>

      <button type="submit" class="bg-[#1E726E] text-white px-6 py-2 rounded-md hover:bg-[#155e5b] transition">Enviar</button>
    </form>
  </div>

</section>


  <!-- FOOTER -->
  <footer class="bg-white py-6 text-center text-sm text-gray-600 border-t">
    © 2025 BMIS. Todos los derechos reservados.
  </footer>

</body>
</html>


