<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Player</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto px-4 py-10">
        <div class="max-w-md mx-auto bg-gray-200 p-8 rounded-lg shadow-md">
            <h1 class="text-center text-2xl font-bold mb-6 text-gray-800">Create Player</h1>
            <form method="post" action="{{ route('player_store') }}">
                @csrf
                
                <div class="mb-4">
                    <label for="name" class="block font-bold">Name:</label>
                    <input type="text" id="name" name="Name" placeholder="Enter player name" required class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                </div>
                
                <div class="mb-4">
                    <label for="team" class="block font-bold">Team:</label>
                    <input type="text" id="team" name="Team" placeholder="Enter player's team" required class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                </div>
                
                <div class="mb-4">
                    <label for="jersey_number" class="block font-bold">Jersey Number:</label>
                    <input type="number" id="jersey_number" name="Jersey_Number" placeholder="Enter player's jersey number" class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                </div>
                
                <div class="mb-4">
                    <label for="position" class="block font-bold">Position:</label>
                    <input type="text" id="position" name="Position" placeholder="Enter player's position" class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                </div>
                
                <div class="mb-4">
                    <label for="dob" class="block font-bold">Date of Birth:</label>
                    <input type="date" id="dob" name="Date_of_birth" required class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                </div>
                
                <div class="mb-6">
                    <label for="nationality" class="block font-bold">Nationality:</label>
                    <input type="text" id="nationality" name="Nationality" placeholder="Enter player's nationality" class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                </div>
                
                <button type="submit" class="w-full bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-md transition duration-300">Create Player</button>
            </form>
        </div>
    </div>
</body>
</html>
