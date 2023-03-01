@include('layouts.header')

<body class="flex items-center justify-center h-screen">
    <div class="w-full max-w-xs">
        <a class="w-full bg-indigo-700 hover:bg-indigo-900 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
            href="/students">
            See All Students
        </a>
        <form method="POST"
            action="/register"
            class="bg-white drop-shadow-md hover:drop-shadow-xl rounded px-8 pt-6 pb-8 mb-4">
            <h3 class="text-center font-bold mb-2">Register For free!</h3>
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2"
                    for="name">
                    Name
                </label>
                <input
                    class="shadow border rounded w-full 
                    py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline
                    @error('name') bg-red-50 border-red-500 @enderror
                    "
                    id="name"
                    type="text"
                    name="name"
                    placeholder="Student Name">
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-bold mb-2"
                    for="password">
                    Age
                </label>
                <input
                    class="shadow appearance-none border rounded 
                    w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline
                    @error('age') bg-red-50 border-red-500 @enderror
                    "
                    id="password"
                    type="number"
                    name="age"
                    placeholder="18">
            </div>
            <div class="flex items-center justify-between">
                <button
                    class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                    type="submit">
                    Register New Student
                </button>
            </div>
        </form>
        <p class="text-center text-gray-500 text-xs">
            &copy;2023 Mohammad Makarati. All rights reserved.
        </p>
    </div>

    <script src="/js/app.js"></script>
</body>

@include('layouts.footer')
