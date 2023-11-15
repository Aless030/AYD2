<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Nuevo Estudiante - Instituto Educativo Wex</title>
    <!-- Incluye Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Incluye CSS personalizado -->
    <link rel="stylesheet" href="styles.css ">





    <!--    ESTILOS-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

    <link href="login.php" rel="" />
    <script>
        function mostrarModal() {
            var modal = document.getElementById('modal');
            modal.style.display = 'block';
        }

        function cerrarModal() {
            var modal = document.getElementById('modal');
            modal.style.display = 'none';
        }
    </script>
    <style>
        .modal-contenido {
            background-color: white;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 20%;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

        }

        .cerrar {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .cerrar:hover,
        .cerrar:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        /* Estilos generales para el carrusel y los formularios */
        .carousel-container {
            width: 500px;
            overflow: hidden;
            margin: 0 auto;
        }

        .carousel {
            display: flex;
            transition: transform 0.5s;
        }

        .slide {
            flex: 0 0 100%;
            width: 500px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            display: none;
        }

        .titulo-pagina {
            font-size: 80px;
            font-weight: bold;

            /* Cambia el color según tu preferencia */
            text-align: left;
            /* Otros estilos adicionales según tus necesidades */
        }

        body {
            background-color: #000000;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll" style="background-color: orange;">
        <div class="container"><a class="navbar-brand" href="index.php"><img src="assets/img/LOGO.png" height="50" alt="logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
            <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#home">Home</a></li>
                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#service">Register</a></li>
                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#booking">Information</a></li>
                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#testimonial">+</a></li>
                    <li class="nav-item px-3 px-xl-4"><a class="nav-link fw-medium" aria-current="page" href="#!">+</a></li>
                    <li class="nav-item px-3 px-xl-4"><a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" href="#!" onclick="mostrarModal()"><i class="bi bi-person-circle">Admin</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <section style="padding-top: 100px;" id="home">
        <div class="bg-holder" style="background-image:url(assets/img/hero/hero-bg.svg);">
        </div>
        <!--/.bg-holder-->

        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 hero-img" src="assets/img/fondo.jpg" alt="hero-header" style="width: 50%;" /></div>
                <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
                    <h4 class="fw-bold  mb-3" style="color: #F8F8FF;">Bienvenido a</h4>
                    <h1 class="titulo-pagina" style="color: white;">Instituto Educativo Wex</h1> <br>
                    <h5 style="color: white;" class="mb-4 fw-medium d-none d-xl-block">
                        <p>En el Instituto Educativo Wex, nuestro compromiso es brindar una educación de calidad que
                            forme a líderes del mañana. <br /><br class="d-none d-xl-block" />"Educacion Inteligente"</p>
                    </h5>

                    <div class="text-center text-md-start"> <a class="btn btn-primary btn-lg me-md-4 mb-3 mb-md-0 border-0 primary-btn-shadow" href="#!" role="button">Conocer mas...</a>

                    </div>
                </div>
            </div>
        </div>
    </section>










    <div id="modal" class="modal">
        <div class="modal-contenido ">
            <span class="cerrar" onclick="cerrarModal()">&times;</span>
            <h2 style="color: black;">Administrador</h2>
            <div id="error-message"></div> <!-- Agrega un contenedor para mostrar el mensaje de error -->
            <form method="POST" action="login.php" onsubmit="return validarAdmin()">
                <label for="usuario" style="color: black">Usuario:</label>
                <input type="text" class="form-control" name="usuario" required><br><br>
                <label for="contraseña" style="color: black;">Contraseña:</label>
                <input type="password" class="form-control" name="contraseña" required><br><br>
                <input type="submit" name="submit" class="btn btn-primary" value="Iniciar sesión">
            </form>
        </div>
    </div>



    <div class="carousel-container pt-5 pt-md-5" id="service">
        <h2 class="text-center" style="color: #e0e0e0;">Registro de Nuevo Estudiante</h2>
        <p class="text-center" style="color: #e0e0e0;">Por favor, complete el formulario de inscripción a continuación:</p>
        <div class="carousel">
            <form id="fullForm" action="procesar_registro.php" method="post" onsubmit="return validarFormularioActual()">
                <div class="slide card p-4 custom-width" id="slide1" style="display: block; border: 4px solid orange; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);background-color: black;color: #e0e0e0;">

                    <!-- Contenido del primer formulario -->
                    <div class="form-group">
                        <label for="nombre">Nombre Completo:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                    </div>
                    <div class="form-group">
                        <label for="genero">Género:</label>
                        <select class="form-control" id="genero" name="genero" required>
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Número de Teléfono:</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Direccion:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Correo Electronico:</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>
                    <div class="form-group">
                        <label for="nacionalidad">Nacionalidad:</label>
                        <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" required>
                    </div>
                    <div class="form-group">
                        <label for="estado_civil">Estado Civil:</label>
                        <select class="form-control" id="estado_civil" name="estado_civil" required>
                            <option value="Soltero">Soltero</option>
                            <option value="Casado">Casado</option>
                            <option value="Divorciado">Divorciado</option>
                            <option value="Viudo">Viudo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="numero_identificacion">Número de Identificación:</label>
                        <input type="text" class="form-control" id="numero_identificacion" name="numero_identificacion" required>
                    </div>
                    <div class="form-group">
                        <label for="foto_perfil">Foto de Perfil:</label>
                        <input type="file" class="form-control-file" id="foto_perfil" name="foto_perfil" accept=".jpg, .jpeg, .png" required>
                        <small>(Subir una foto de perfil)</small>
                    </div>
                </div>
                <div class="slide card p-4 custom-width" id="slide2" style="display: none; border: 4px solid orange; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);background-color: black;color: #e0e0e0;">
                    <!-- Contenido del segundo formulario -->
                    <div class="form-group">
                        <label for="institucion_anterior">Institución Educativa Anterior:</label>
                        <input type="text" class="form-control" id="institucion_anterior" name="institucion_anterior" required>
                    </div>
                    <div class="form-group">
                        <label for="nivel_educativo_anterior">Año de Egreso:</label>
                        <input type="text" class="form-control" id="añoegreso" name="añoegreso" required>
                    </div>
                    <div class="form-group">
                        <label for="programa_academico">Programa Académico de Interes:</label>
                        <input type="text" class="form-control" id="programa_academico" name="programa_academico" required>
                    </div>
                    <!-- Resto de campos del segundo formulario -->
                </div>
                <!-- ... (resto de formularios) ... -->
                <div class="slide card p-4 custom-width" id="slide3" style="display: none; border: 4px solid orange; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);background-color: black;color: #e0e0e0;">
                    <!-- Contenido del segundo formulario -->
                    <div class="form-group">
                        <label for="documentos_identificacion">Documentos de Identificación:</label>
                        <input type="file" class="form-control-file" id="documentos_identificacion" name="documentos_identificacion" accept=".pdf, .jpg, .png" required>
                        <small>(Subir copia de cédula, pasaporte, etc.)</small>
                    </div>
                    <!-- Nuevos Campos de Documentación XD-->
                    <div class="form-group">
                        <label for="certificado_nacimiento">Certificado de Nacimiento:</label>
                        <input type="file" class="form-control-file" id="certificado_nacimiento" name="certificado_nacimiento" accept=".pdf, .jpg, .png" required>
                        <small>(Subir copia del certificado de nacimiento)</small>
                    </div>
                    <div class="form-group">
                        <label for="certificados_bachiller">Certificados de Bachiller:</label>
                        <input type="file" class="form-control-file" id="certificados_bachiller" name="certificados_bachiller" accept=".pdf, .jpg, .png" required>
                        <small>(Subir copias de certificados de grados anteriores)</small>
                    </div>
                    <div class="form-group">
                        <label for="carta_recomendacion">Carta de Recomendación:</label>
                        <input type="file" class="form-control-file" id="carta_recomendacion" name="carta_recomendacion" accept=".pdf, .jpg, .png">
                        <small>(Subir carta de recomendación, si es necesario)</small>
                    </div>
                    <!-- Resto de campos del segundo formulario 3 XD -->
                </div>
                <div class="text-center">
                    <button type="button" id="prev" class="btn btn-primary" style="background-color: orange;width:20%; display: none;">Anterior</button>
                    <button type="button" id="next" class="btn btn-primary" style="background-color: orange; width:20%">Siguiente</button>
                    <button type="submit" class="btn btn-primary" style="background-color: orange; display: none;">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const formCount = 3;
        let currentForm = 1;

        //mis eventos para el botón "Siguiente" y "Anterior"
        document.getElementById('next').addEventListener('click', function() {
            if (validarFormularioActual()) {
                if (currentForm < formCount) {
                    document.getElementById('slide' + currentForm).style.display = 'none';
                    currentForm++;
                    document.getElementById('slide' + currentForm).style.display = 'block';

                    document.getElementById('prev').style.display = 'block';
                    if (currentForm === formCount) {
                        document.getElementById('next').style.display = 'none';
                        document.querySelector('form button[type="submit"]').style.display = 'block';
                    }
                }
            }
        });

        document.getElementById('prev').addEventListener('click', function() {
            if (currentForm > 1) {
                document.getElementById('slide' + currentForm).style.display = 'none';
                currentForm--;
                document.getElementById('slide' + currentForm).style.display = 'block';

                document.getElementById('next').style.display = 'block';
                if (currentForm === 1) {
                    document.getElementById('prev').style.display = 'none';
                }
            }
        });

        function validarFormularioActual() {
            const currentSlide = document.getElementById('slide' + currentForm);
            const requiredFields = currentSlide.querySelectorAll('[required]');
            let isValid = true;

            requiredFields.forEach(field => {
                if (field.value.trim() === '') {
                    isValid = false;
                    field.classList.add('campo-invalido');
                } else {
                    field.classList.remove('campo-invalido');
                }
            });

            if (!isValid) {
                alert('Por favor, complete todos los campos requeridos.');
            }

            return isValid;
        }

        function validarAdmin() {

            var usuario = document.getElementsByName('usuario')[0].value;
            var contraseña = document.getElementsByName('contraseña')[0].value;

            if (usuario !== "admin" || contraseña !== "admin123") {
                var errorMessage = document.getElementById('error-message');
                errorMessage.innerText = "Credenciales inválidas. Por favor, inténtalo nuevamente.";
                return false; // Evita que el formulario se envíe
            }

        }
    </script>

    <!-- Incluye Bootstrap JS (opcional, solo si necesitas funcionalidades específicas de Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>