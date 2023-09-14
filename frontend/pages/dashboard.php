
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Agrega los enlaces a los archivos CSS de Tailwind CSS -->
    <link href="/css/output.css" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body class="bg-gray-100">

    <!-- Menú lateral -->
    <aside class="bg-blue-900 text-white h-screen w-64 fixed left-0 top-0">
        <div class="py-4 px-6">
            <h2 class="text-2xl font-semibold">Dashboard</h2>
        </div>

        <!-- Enlace para ir al perfil -->
        <ul class="py-4">
            <li class="px-6 py-2 hover:bg-blue-800">
                <a href="./profile.php" class="block">Profile</a>
            </li>
        </ul>

        <!-- Botón de cerrar sesión -->
        <div class="absolute bottom-4 w-full">
            <a href="../api/logout" class="block text-center text-blue-500 hover:underline">Logout</a>
        </div>
    </aside>

    <!-- Contenido principal -->
    <main class="ml-64 p-6">
        <!-- Navbar -->
        <header class="bg-blue-900 py-4 px-6">
            <!-- Botón de menú hamburguesa para cerrar sesión -->
            <button id="toggleMenu" class="text-white text-xl">&#9776;</button>
        </header>

        <!-- Contenido del dashboard -->
        <div class="bg-white p-6 rounded-lg shadow">
            <img src="/welcome.jpg">
        </div>
    </main>

    <!-- JavaScript para alternar el menú lateral -->
    <script>
        const toggleMenuButton = document.getElementById('toggleMenu');
        const aside = document.querySelector('aside');
        const main = document.querySelector('main');

        toggleMenuButton.addEventListener('click', () => {
            aside.classList.toggle('hidden');
            main.classList.toggle('ml-64');
        });
    </script>
</body>

</html>
