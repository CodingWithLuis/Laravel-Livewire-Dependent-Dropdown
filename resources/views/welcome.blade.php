<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    @livewireStyles
</head>

<body>
    <div class="grid place-items-center h-screen">
        <div class="py-4 px-8 bg-white shadow-lg rounded-lg">
            <div class="mb-4 mt-4">
                <h2 class="text-gray-800 text-3xl font-semibold">Laravel Livewire Dependent Dropdown</h2>
            </div>
            <livewire:country-dropdown />
        </div>
    </div>

    @livewireScripts
</body>

</html>
