<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD Estudiantes 💖</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fuente bonita -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-pink-50 text-gray-700">

    <!-- 🚨 PRUEBA -->
    <h1 style="color:red; text-align:center;">PRUEBA</h1>

    <!-- 🌸 Navbar -->
    <nav class="bg-gradient-to-r from-pink-400 to-pink-300 shadow-lg">
        <div class="container mx-auto flex justify-between items-center p-4">

            <h1 class="text-xl font-semibold text-white">
                💖 CRUD Colegio
            </h1>

            <div class="space-x-6">
                <a href="{{ route('estudiantes.index') }}"
                   class="text-white hover:text-pink-100 transition 
                   {{ request()->routeIs('estudiantes.*') ? 'underline font-semibold' : '' }}">
                    ✨ Estudiantes
                </a>

                <a href="{{ route('carreras.index') }}"
                   class="text-white hover:text-pink-100 transition 
                   {{ request()->routeIs('carreras.*') ? 'underline font-semibold' : '' }}">
                    🎓 Carreras
                </a>
            </div>
        </div>
    </nav>

    <!-- 🌷 Contenido -->
    <div class="container mx-auto mt-10 px-4">

        <div class="bg-white p-6 rounded-2xl shadow-lg">
            @yield('content')
        </div>

    </div>

    <!-- SweetAlert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- 💖 Alertas bonitas -->
    @if(session('success'))
    <script>
        Swal.fire({
            title: '💖 CRUD Colegio',
            text: "{{ session('success') }}",
            icon: 'success',
            confirmButtonColor: '#ec4899',
            background: '#fff1f2',
            color: '#831843'
        });
    </script>
    @endif

    <!-- 🗑️ Confirmación eliminar -->
    <script>
    function confirmarEliminacion(id, tipo = 'carrera') {

        let mensaje = tipo === 'estudiante' 
            ? '¿Eliminar este estudiante? 🥺' 
            : '¿Eliminar esta carrera? 🥺';

        let formId = tipo === 'estudiante'
            ? 'form-eliminar-estudiante-' + id
            : 'form-eliminar-' + id;

        Swal.fire({
            title: '💔 Confirmación',
            text: mensaje,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#ec4899',
            cancelButtonColor: '#9ca3af',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar',
            background: '#fff1f2',
            color: '#831843'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(formId).submit();
            }
        });
    }
    </script>

</body>
</html>