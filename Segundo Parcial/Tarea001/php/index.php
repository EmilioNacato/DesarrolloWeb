<!-- Section: Design Block -->
<section class=" text-center text-lg-start">
    <style>
        .rounded-t-5 {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }

        @media (min-width: 992px) {
            .rounded-tr-lg-0 {
                border-top-right-radius: 0;
            }

            .rounded-bl-lg-5 {
                border-bottom-left-radius: 0.5rem;
            }
        }
    </style>
    <div class="card mb-3">
        <div class="row g-0 d-flex align-items-center">
            <div class="col-lg-4 d-none d-lg-flex">
                <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
                    class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
            </div>
            <div class="col-lg-8">
                <div class="card-body py-5 px-md-5">

                <form method="POST" action="php/login.php" onsubmit="return validarFormulario()">
                        <div class="form-group">
                            <label for="username">Usuario:</label>
                            <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp"
                            placeholder="Ingresa el usuario">
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                        </div>

                        <!-- 2 column grid layout for inline styling -->
                        <div class="row mb-4">
                            <div class="col d-flex justify-content-center">
                                <!-- Checkbox -->

                            </div>

                        </div>

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary">Enviar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section: Design Block -->


<form method="POST" action="php/login.php">


    
</form>

<script>
    function validarFormulario() {
        // Obtener los valores de los campos de usuario y contraseña
        var username = document.getElementById("username").value;
        var password = document.getElementById("password").value;

        // Verificar que los campos no estén vacíos
        if (username.trim() === '' || password.trim() === '') {
            alert("Todos los campos son obligatorios");
            return false; // Detener el envío del formulario
        }

        // Verificar la longitud del campo de usuario
        if (username.length < 2 || username.length > 15) {
            alert("El usuario debe tener entre 2 y 15 caracteres");
            return false; // Detener el envío del formulario
        }

        // Verificar la longitud del campo de contraseña
        if (password.length < 2 || password.length > 15) {
            alert("La contraseña debe tener entre 2 y 15 caracteres");
            return false; // Detener el envío del formulario
        }

        // Si todas las validaciones son exitosas, puedes enviar el formulario
        return true;
    }
</script>