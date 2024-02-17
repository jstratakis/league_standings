<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h1 class="text-2xl font-bold text-center mb-4">LOGIN</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label for="email" class="sr-only">Username</label>
                <input id="email" type="email" name="email" required autofocus autocomplete="username" placeholder="Username" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="mb-4">
                <label for="password" class="sr-only">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password" class="w-full p-2 border border-gray-300 rounded">
            </div>
            <div class="flex items-center justify-between mb-4">
                <div class="flex items-center">
                    <input id="remember_me" type="checkbox" name="remember" class="text-indigo-600 focus:ring-indigo-500 rounded border-gray-300">
                    <label for="remember_me" class="ml-2 block text-sm text-gray-600">Remember me</label>
                </div>
                <a href="{{ route('password.request') }}" class="text-sm text-gray-600 hover:text-gray-900">Forgot?</a>
            </div>
            <button type="submit" class="w-full p-3 text-white bg-indigo-600 rounded hover:bg-indigo-700 focus:outline-none focus:ring">LOGIN</button>
        </form>
    </div>
</body>
</html>
