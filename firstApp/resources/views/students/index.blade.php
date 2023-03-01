@include('layouts.header')

<body class="flex items-center justify-center h-screen">
    <div class="w-full max-w-md relative overflow-x-auto shadow-md sm:rounded-lg">
        <h3 class="text-center font-bold mb-2">All Students Regitser</h3>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col"
                        class="px-6 py-3 text-center">
                        Student Name
                    </th>
                    <th scope="col"
                        class="px-6 py-3 ">
                        Age
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $student->name }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $student->age }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="/js/app.js"></script>
</body>

@include('layouts.footer')
