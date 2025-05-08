<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AirBnBreeze</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- You can add any custom styles here -->
    <style>
        /* Custom styles can go here if needed */
    </style>
</head>

<body class="antialiased text-gray-800 bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-white shadow-md py-4">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex-shrink-0 text-xl font-semibold text-gray-800">AirBnBreeze</div>
                    <div class="hidden sm:block sm:ml-6">
                        <div class="flex space-x-4">
                            <!-- Links to other pages -->
                            <a href="/properties" class="text-gray-700 hover:text-blue-500 px-3 py-2 rounded-md text-lg font-medium">Properties</a>
                            <a href="/pending" class="text-gray-700 hover:text-blue-500 px-3 py-2 rounded-md text-lg font-medium">Pending</a>
                            <a href="/accepted" class="text-gray-700 hover:text-blue-500 px-3 py-2 rounded-md text-lg font-medium">Accepted</a>
                            <a href="/calendar" class="text-gray-700 hover:text-blue-500 px-3 py-2 rounded-md text-lg font-medium">Calendar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="/properties" class="text-gray-700 hover:text-blue-500 block px-3 py-2 rounded-md text-base font-medium">Properties</a>
                <a href="/pending" class="text-gray-700 hover:text-blue-500 block px-3 py-2 rounded-md text-base font-medium">Pending</a>
                <a href="/accepted" class="text-gray-700 hover:text-blue-500 block px-3 py-2 rounded-md text-base font-medium">Accepted</a>
                <a href="/calendar" class="text-gray-700 hover:text-blue-500 block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
            </div>
        </div>
    </nav>

    <!-- Main content area -->
    <div class="container mx-auto p-4">
        @yield('content') <!-- Page-specific content will go here -->
    </div>

</body>

</html>
