<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-size: cover;
            background-attachment: fixed;
            background-color: rgba(255, 255, 255, 0.8);
            background-blend-mode: color;
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen text-center">
    <div class="bg-white bg-opacity-70 p-10 rounded-xl shadow-xl">

        <h1 class="text-4xl font-bold mb-6">Welcome to Our Landing Page</h1>
        <p class="mb-6 text-lg">Your gateway to something awesome.</p>
        <a href="{{ url('blog') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition mx-2">
            blog
        </a>
        <a href="{{ url('template1') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition mx-2">
            Template 1
        </a>
        <a href="{{ url('uts') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition mx-2">
            uts
        </a>
        <a href="{{ url('pertama') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition mx-2">
            Pertama
        </a>
        <a href="{{ url('js1') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition mx-2">
            js1
        </a>
        <a href="{{ url('js2') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition mx-2">
            js2
        </a>
        <a href="{{ url('index') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition mx-2">
            index
        </a>
    </div>
</body>
</html>
