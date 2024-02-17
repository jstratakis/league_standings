<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Team</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head> 
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto px-4 py-10">
        <div class="max-w-md mx-auto bg-gray-200 p-8 rounded-lg shadow-md">
            <h1 class="text-center text-2xl font-bold mb-6 text-gray-800">Create Player</h1>
            <form method="post" action="{{ route('team.store') }}">
                @csrf
                
                <div class="mb-4">
                    <label for="name" class="block font-bold">Name:</label>
                    <input type="text" id="name" name="Name" placeholder="Enter team's name" required class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                </div>
                
                <div class="mb-4">
                    <label for="Coach" class="block font-bold">Coach:</label>
                    <input type="text" id="Coach" name="Coach" placeholder="Enter team's coach" required class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                </div>
                
                <div class="mb-4">
                    <label for="Points" class="block font-bold">Points:</label>
                    <input type="number" id="Points" name="Points" placeholder="Enter team's points" class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                </div>
                
                <div class="mb-4">
                    <label for="Games" class="block font-bold">Games:</label>
                    <input type="number" id="Games" name="Games" placeholder="Enter team's games" class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                </div>
                
                <div class="mb-4">
                    <label for="Victories" class="block font-bold">Victories:</label>
                    <input type="number" id="Victories" name="Victories" required placeholder="Enter team's victories" class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                </div>
                
                <div class="mb-6">
                    <label for="Defeats" class="block font-bold">Defeats:</label>
                    <input type="number" id="Defeats" name="Defeats" placeholder="Enter team's defeats" class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                </div>
                
                <button type="submit" class="w-full bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-md transition duration-300">Create team</button>
            </form>
        </div>
    </div>
</body>
</html>
