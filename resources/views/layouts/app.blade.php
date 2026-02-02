<!DOCTYPE html>
<html>

<head>
  <title>Laravel 10 Task List App</title>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  <script src="//unpkg.com/alpinejs" defer></script>

  @yield('style')
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
  <h1 class="mb-4 text-2xl">@yield('title')</h1>

  {{-- Flash message --}}
  @if (session('success'))
    <div x-data="{ flash: true }" x-show="flash"
         class="relative mb-10 rounded border border-green-400 bg-green-100 px-4 py-3 text-green-700"
         role="alert">
      <strong class="font-bold">Success! </strong>
      <span>{{ session('success') }}</span>

      <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" @click="flash = false">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none"
             viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             class="h-6 w-6 cursor-pointer text-green-700">
          <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
  @endif

  {{-- Main content --}}
  <div>
    @yield('content')
  </div>
</body>

</html>
