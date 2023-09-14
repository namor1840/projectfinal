<?php
// Importar el archivo de configuración de la API y el cliente HTTP (ajusta la ruta según sea necesario)
require_once('../api/config.php');
require_once('../api/HttpClient.php');

// Obtener el token de acceso (asegúrate de que el token se haya establecido previamente)
$token = $_SESSION['access_token'] ?? null;

// Verificar si el token de acceso está presente
if (!$token) {
    header("Location: ../index.php"); // Redirigir al usuario si no está autenticado
    die();
}

// URL de la API para obtener los datos del usuario (ajusta la ruta según tu configuración)
$userApiUrl = 'http://localhost:8000/api/user';

// Crear una instancia del cliente HTTP
$client = new HttpClient();

// Enviar una solicitud GET a la API para obtener los datos del usuario
$response = $client->get($userApiUrl, [], [
    'Authorization: Bearer ' . $token,
]);
try {
    // Código que puede causar un error HTTP 500
} catch (Exception $e) {
    // Manejo de excepciones
    echo 'Error: ' . $e->getMessage();
}

// Verificar si la solicitud fue exitosa
if ($response['status_code'] === 200) {
    $userData = json_decode($response['body'], true);
    // Los datos del usuario ahora se encuentran en $userData
} else {
    // Manejar el error de alguna manera (por ejemplo, redirigir al usuario a la página de inicio de sesión)
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
    <title>Profile</title>
</head>

<body>
    <!-- Contenedor principal -->
    <div class="min-h-screen sx:px-4 flex flex-col items-center font-['Noto_Sans'] bg-gray-50 ">

        <?php include "./nav.php" ?>

        <!-- Encabezado para la sección de información personal -->
        <div class="w-fit text-center m-5">
            <h1 class="text-3xl">Personal info</h1>
            <h3 class="text-base font-light my-4">Basic info, like your name and photo</h3>
        </div>

        <!-- Cuadro de perfil -->
        <div id="cuadro" class="w-full max-w-3xl sx:border border-gray-BD rounded-xl text-gray-33">
            <!-- Resto de tu código HTML -->
        </div>
    </div>

</body>

</html>
