
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">


{{-- @include('layouts.header') --}}
<div class="flex font-class flex-col">
    @yield('content')
    </div>
<style>
    .white-opacity{
        color: rgba(255, 255, 255, 0.7);
    }
    .white-opacity-60{
        color: rgba(255, 255, 255, 0.6);
    }
    .font-class {
    font-family: 'Inter', sans-serif;
}
</style>
