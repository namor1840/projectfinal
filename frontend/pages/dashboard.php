<?php
// Iniciar sesión y redirigir a la página de inicio de sesión si no hay una sesión activa
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../index.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Incluir fuentes de Google y archivo de estilos CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@100;300;400;500;700;900&display=swap">
    <link href="../css/output.css" rel="stylesheet" />
    <title>Dashboard</title>
</head>

<body>
    <!-- Contenedor principal -->
    <div class="min-h-screen sx:px-4 flex flex-col items-center font-['Noto_Sans'] bg-gray-50 ">

        <?php include "./nav.php" ?>

        <!-- Contenido del dashboard -->
        <div class="w-full max-w-3xl sx:border border-gray-BD rounded-xl text-gray-33">
            <!-- Encabezado -->
            <div class="px-5 sm:px-12 py-8 relative flex flex-row justify-between items-center">
                <div>
                    <h3 class="font-normal text-xl leading-snug text-black">Dashboard</h3>
                </div>
            </div>

            <!-- Enlaces de navegación -->
            <div class="px-5 sm:px-12 py-4">
                <ul class="text-gray-33 text-lg">
                    <li class="mb-3">
                        <a href="./profile_edit.php" class="text-blue-500 hover:underline">Editar Perfil</a>
                    </li>
                    <li>
                        <a href="../php/logout.php" class="text-red-500 hover:underline">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
