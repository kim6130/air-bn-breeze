<!-- resources/views/partials/navbar.blade.php -->
<nav class="bg-gray-800 text-white p-4">
    <ul class="flex space-x-4">
        <li><a href="{{ route('properties') }}" class="hover:underline">Properties</a></li>
        <li><a href="{{ route('pending') }}" class="hover:underline">Pending Bookings</a></li>
        <li><a href="{{ route('accepted') }}" class="hover:underline">Accepted Bookings</a></li>
        <li><a href="{{ route('calendar') }}" class="hover:underline">Calendar</a></li>
    </ul>
</nav>
