<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>--}}
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="h-full">
<div class="min-h-full">
    <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            {{-- @auth --}}
                                <x-navbar href="/" :active="request()->is('/')"> Home</x-navbar>
                                <x-navbar href="/grade-levels" :active="request()->is('grade-levels')"> Grade Levels </x-navbar>
                            {{-- @endauth --}}
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        {{-- @guest --}}
                            <x-navbar href="/register" :active="request()->is('register')"> Register</x-navbar>
                            <x-navbar href="/login" :active="request()->is('login')"> Login</x-navbar>
                        {{-- @endguest --}}

                        {{-- @auth --}}
                            <form method="POST" action="/logout">
                                @csrf
                                <x-form-button href="/login" :active="request()->is('logout')"> Logout</x-form-button>
                            </form>
                        {{-- @endauth --}}
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <header class="relative bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
            {{-- @auth --}}
                {{-- <x-button href="/tasks/create"> Create Task</x-button> --}}
            {{-- @endauth --}}
        </div>
    </header>
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>
    </main>
</div>

</body>
</html>
