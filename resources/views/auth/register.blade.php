<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
        }

        .error {
            color: #dc2626;
            font-size: 14px;
        }

        .success {
            color: #16a34a;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .campo {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <h2>Formulario de Registro</h2>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <form action="{{ route('register.store') }}" method="POST">
        @csrf

        <div class="campo">
            <label for="name">Nombre Completo:</label>

            <input
                type="text"
                id="name"
                name="name"
                value="{{ old('name') }}"
            >

            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="campo">
            <label for="email">Correo Electrónico:</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
            >

            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="campo">
            <label for="password">Contraseña:</label>

            <input
                type="password"
                id="password"
                name="password"
            >

            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror
        </div>

        <div class="campo">
            <label for="password_confirmation">
                Confirmar Contraseña:
            </label>

            <input
                type="password"
                id="password_confirmation"
                name="password_confirmation"
            >
        </div>

        <button type="submit">
            Registrarse
        </button>

    </form>

</body>

</html>