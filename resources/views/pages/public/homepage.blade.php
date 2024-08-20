@extends('layouts.public.default')

@section('page.content')
<div class="flex flex-col justify-center items-center h-[calc(100dvh)] md:h-screen w-full overflow-y-auto bg-gradient-to-br from-blue-600 to-indigo-600 text-white p-4">
    <h1 class="text-6xl xl:text-9xl text-center">Florian Bernard</h1>

    <div class="flex flex-col gap-4 md:gap-8 font-montserrat">
        <div class="flex flex-wrap text-center justify-center items-center gap-2">
            <p>Développeur web spécialiste Laravel</p>
            <img src="{{ Vite::image('logos/laravel.svg') }}" alt="Laravel" class="w-8 h-8 object-contain">
        </div>
    </div>

    <div class="grid md:grid-cols-3 items-center justify-center gap-4 md:gap-8 mt-10 md:mt-14 p-4 rounded-md bg-neutral-50 text-neutral-700 border-dashed shadow-lg font-montserrat">
        <a href="https://github.com/Cav0n" class="flex items-center justify-center gap-2 p-2 border rounded shadow-sm bg-neutral-100 transition-all duration-300 hover:bg-blue-700 hover:text-neutral-100 group" target="_blank" rel="noopener">
            <img src="{{ Vite::image('logos/github.svg') }}" alt="GitHub" class="w-6 h-6 object-contain group-hover:invert transition-all duration-200">
            <p>@Cav0n</p>
        </a>
        <a href="https://www.linkedin.com/in/florian-bernard-/" class="flex items-center justify-center gap-2 p-2 border rounded shadow-sm bg-neutral-100 transition-all duration-300 hover:bg-blue-700 hover:text-neutral-100 group" target="_blank" rel="noopener">
            <img src="{{ Vite::image('logos/linkedin.png') }}" alt="LinkedIn" class="w-6 h-6 object-contain group-hover:grayscale transition-all duration-200">
            <p>@florian-bernard</p>
        </a>
        <a href="https://www.malt.fr/profile/bernardflorian" class="flex items-center justify-center gap-2 p-2 border rounded shadow-sm bg-neutral-100 transition-all duration-300 hover:bg-blue-700 hover:text-neutral-100" target="_blank" rel="noopener">
            <img src="{{ Vite::image('logos/malt.png') }}" alt="LinkedIn" class="w-6 h-6 object-contain">
            <p>@bernardflorian</p>
        </a>
    </div>
</div>
@endsection
