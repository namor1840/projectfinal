<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Incluir archivo de JS y estilos CSS -->
    <script src="../js/funciones.js"  defer></script>
    <link href="../css/output.css" rel="stylesheet">
    <title>Register</title>
</head>

<body>
    <!-- Contenedor principal -->
    <div class="min-h-screen flex flex-wrap justify-center sm:content-center font-['Open_Sans']">
        <!-- Contenedor del formulario de registro -->
        <div class="w-full sm:max-w-ssx p-6 sm:p-12 sm:border border-gray-BD rounded-3xl text-gray-33">

            <!-- Mostrar logotipo "devchallenges" -->
            <img class="ms-2" src="../svg/devchallenges.svg" alt="logo" >

            <!-- Título y descripción -->
            <div class="my-8">
                <h3 class="font-semibold text-lg leading-snug">Join thousands of learners from around the world</h3>
                <p class="mt-3 text-base leading-snug">Master web development by making real-life projects. There are multiple paths for you to choose</p>
            </div>

            <!-- Formulario de registro -->
            <form action="#" method="post" class="flex flex-col relative gap-4 text-gray-500">
                <!-- Campo para el correo electrónico -->
                <div class="flex items-center gap-3 border border-gray-BD rounded-lg p-3 ps-4">
                    <div class="w-4" ><img  src="../svg/email.svg" alt="logo"></div>
                    <input class="outline-none w-full" type="email" autocomplete="off" name="email" id="email" placeholder="Email" required >
                </div>
                
                <!-- Campo para la contraseña -->
                <div class="flex items-center gap-3 border border-gray-BD rounded-lg p-3 ps-4">
                    <div class="w-4"><img src="../svg/password.svg" alt="logo"></div>
                    <input class="outline-none w-full" type="password" autocomplete="off" name="password" id="password" placeholder="Password" required >
                </div> 

                <!-- Mostrar mensaje de error si está configurado -->
                <p id="msj" class="text-red-500 w-full text-center absolute transform duration-500 ease-in-out mb-8 bottom-8 " ></p>

                <!-- Botón para enviar el formulario -->
                <button onclick="register()" class="w-full p-1.5 mt-2 bg-blue-500 rounded-lg text-sm leading-normal font-semibold text-white" type="button">Start Coding Now</button>
            </form>
            
            <!-- Sección de registro con redes sociales -->
            <div class="mt-8 flex flex-col gap-6 items-center text-sm text-gray-500">
                <span class="w-fit">or continue with these social profile</span>
                <div class="w-fit  flex gap-5">
                    <button><img src="../svg/Google.svg" alt="logo"></button>
                    <button><img src="../svg/Facebook.svg" alt="logo"></button>
                    <button><img src="../svg/Twitter.svg" alt="logo"></button>
                    <button><img src="../svg/Gihub.svg" alt="logo"></button>
                </div>
                <p class="w-fit text-[17px] text-gray-33">Already a member? <a href="../index.php" class="text-blue-500">Login</a></p>
            </div>

        </div>
    </div>

    <script>
        async function register() {
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            const response = await fetch('http://localhost:8000/api/register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    email: email,
                    password: password,
                }),
            });

            const data = await response.json();

            if (response.ok) {
                // Éxito: Redirigir a la página de perfil o realizar alguna acción
                console.log('Registro exitoso');
                // Puedes redirigir al usuario o realizar otras acciones aquí
            } else {
                // Error: Mostrar mensaje de error
                const errorMessage = data.message || 'Error de registro';
                document.getElementById("msj").textContent = errorMessage;
            }
        }
    </script>
</body>

</html>
