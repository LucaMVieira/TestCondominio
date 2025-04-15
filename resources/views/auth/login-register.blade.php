<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login / Cadastro</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white flex justify-center items-center h-screen">
  <div class="bg-gray-800 p-8 rounded-xl shadow-lg w-full max-w-md">
    <h2 class="text-3xl font-bold mb-4 text-center">Login</h2>
    <form action="{{ route('auth.login') }}" method="POST" class="mb-8">
      @csrf
      <input type="email" name="email" placeholder="Email" required class="w-full mb-3 p-3 rounded bg-gray-700 text-white placeholder-gray-400 border border-gray-600">
      <input type="password" name="password" placeholder="Senha" required class="w-full mb-3 p-3 rounded bg-gray-700 text-white placeholder-gray-400 border border-gray-600">
      <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 p-3 rounded text-white font-semibold">Entrar</button>
    </form>

    <h2 class="text-2xl font-bold mb-4 text-center">Cadastro</h2>
    <form action="{{ route('auth.register') }}" method="POST">
      @csrf
      <input type="text" name="name" placeholder="Nome" required class="w-full mb-3 p-3 rounded bg-gray-700 text-white placeholder-gray-400 border border-gray-600">
      <input type="email" name="email" placeholder="Email" required class="w-full mb-3 p-3 rounded bg-gray-700 text-white placeholder-gray-400 border border-gray-600">
      <input type="password" name="password" placeholder="Senha" required class="w-full mb-3 p-3 rounded bg-gray-700 text-white placeholder-gray-400 border border-gray-600">
      <input type="password" name="password_confirmation" placeholder="Confirme a senha" required class="w-full mb-3 p-3 rounded bg-gray-700 text-white placeholder-gray-400 border border-gray-600">
      <select name="role" required class="w-full mb-3 p-3 rounded bg-gray-700 text-white border border-gray-600">
        <option value="">Selecione o tipo</option>
        <option value="sindico">Síndico</option>
        <option value="admin">Admin</option>
      </select>
      <button type="submit" class="w-full bg-green-600 hover:bg-green-700 p-3 rounded text-white font-semibold">Cadastrar</button>
    </form>

    @if ($errors->any())
      <div class="mt-4 text-red-400 text-sm">
        <ul class="list-disc list-inside">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  </div>
</body>
</html>
