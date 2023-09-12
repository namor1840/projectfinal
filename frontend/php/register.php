<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Incluir archivo de estilos CSS -->
    <link href="./css/output.css" rel="stylesheet">
    <title>Register</title>
</head>

<body>
    <!-- Contenedor principal -->
    <div class="min-h-screen flex flex-wrap justify-center sm:content-center font-['Open_Sans']">
        <!-- Contenedor del formulario de registro -->
        <div class="w-full sx:max-w-ssx p-6 sm:p-12 sm:border border-gray-BD rounded-3xl text-gray-33">

            <!-- Mostrar logotipo "devchallenges" -->
            <img class="ms-1" src="./svg/devchallenges.svg" alt="logo">

            <!-- Título -->
            <div class="my-8">
                <h3 class="font-semibold text-lg leading-snug">Register</h3>
            </div>

            <!-- Formulario de registro -->
            <form action="#" method="post" class="flex flex-col gap-4 relative text-gray-500">
                <!-- Campo para el nombre -->
                <div class="flex items-center gap-3 border border-gray-BD rounded-lg p-3 ps-4">
                    <div class="w-4"><img src="./svg/user.svg" alt="logo"></div>
                    <input class="outline-none w-full" type="text" name="name" autocomplete="off"
                        placeholder="Name" id="name" required>
                </div>
                <!-- Campo para el correo electrónico -->
                <div class="flex items-center gap-3 border border-gray-BD rounded-lg p-3 ps-4">
                    <div class="w-4"><img src="./svg/email.svg" alt="logo"></div>
                    <input class="outline-none w-full" type="email" name="email" autocomplete="off"
                        placeholder="Email" id="email" required>
                </div>
                <!-- Campo para la contraseña -->
                <div class="flex items-center gap-3 border border-gray-BD rounded-lg p-3 ps-4">
                    <div class="w-4"><img src="./svg/password.svg" alt="logo"></div>
                    <input class="outline-none w-full" type="password" name="password" autocomplete="off"
                        placeholder="Password" id="password" required>
                </div>

                <!-- Mostrar mensaje de error si está configurado -->
                <p id="msj" class="text-red-500 w-full text-center absolute transform duration-500 ease-in-out mb-8 bottom-8"></p>

                <!-- Botón para enviar el formulario -->
                <button onclick="register()" class="w-full p-1.5 mt-2 bg-blue-500 rounded-lg text-sm leading-normal font-semibold text-white"
                    type="button">Register</button>
            </form>

            <!-- Enlace para volver al inicio de sesión -->
            <div class="mt-4 text-center">
                <a href="../index.php" class="text-blue-500">Back to Login</a>
            </div>

        </div>
    </div>

    <script>
        async function register() {
            const name = document.getElementById("name").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            const response = await fetch('http://localhost:8000/api/register', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    name: name,
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
