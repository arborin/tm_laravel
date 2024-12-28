<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- named slot --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Blog' }}</title>
</head>

<body>
    <x-header />
    <div class="container mx-auto">
        <main class="container mx-auto p-4 mt-4">
            {{ $slot }}
        </main>
    </div>

</body>

</html>
