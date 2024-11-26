<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>Document</title>
</head>
<body>

    <div class="min-h-full">
        <x-admin-navbar></x-admin-navbar>
        <x-admin-sidebar><x-admin-sidelink></x-admin-sidelink></x-admin-sidebar>
    
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                {{$slot}}
            </div>
        </main>
    </div>
    
</body>
</html>