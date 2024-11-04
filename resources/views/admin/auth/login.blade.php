<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
<div class="w-full max-w-md bg-white rounded-lg shadow-md p-8">
    <h2 class="text-2xl font-semibold text-gray-700 text-center mb-6">Login</h2>
    <form action="{{ route('admin.login.post') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="email" class="block text-gray-600 text-sm font-medium mb-2">Email</label>
            <input type="email" id="email" name="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your email">
        </div>
        <div class="mb-6">
            <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password</label>
            <input type="password" id="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Enter your password">
        </div>
        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 rounded-md transition duration-200">
            Login
        </button>
    </form>
</div>
</body>
</html>
