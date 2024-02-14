<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Player</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto px-4 py-10">
        <div class="max-w-md mx-auto bg-gray-200 p-8 rounded-lg shadow-md">
            <h1 class="text-center text-2xl font-bold mb-6 text-gray-800">Edit Player</h1>
            <form method="post" action="{{route('player_update', ['player' => $player])}}">
                @csrf
                @method('put')
                
                <div class="mb-4">
                    <label for="Name" class="font-bold">Name:</label>
                    <input type="text" class="form-control mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0" id="name" name="Name" placeholder="Enter player name" value="{{$player->Name}}">
                </div>
                
                <div class="mb-4">
                    <label for="Team" class="font-bold">Team:</label>
                    <input type="text" class="form-control mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0" id="team" name="Team" placeholder="Enter player's team" value="{{$player->Team}}">
                </div>
                
                <div class="mb-4">
                    <label for="Jersey_Number" class="font-bold">Jersey Number:</label>
                    <input type="number" class="form-control mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0" id="jersey_number" name="Jersey_Number" placeholder="Enter player's jersey number" value="{{$player->Jersey_Number}}">
                </div>
                
                <div class="mb-4">
                    <label for="Position" class="font-bold">Position:</label>
                    <input type="text" class="form-control mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0" id="position" name="Position" placeholder="Enter player's position" value="{{$player->Position}}">
                </div>
                
                <div class="mb-4">
                    <label for="Date_of_birth" class="font-bold">Date of Birth:</label>
                    <input type="date" class="form-control mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0" id="dob" name="Date_of_birth" value="{{$player->Date_of_birth}}">
                </div>
                
                <div class="mb-6">
                    <label for="Nationality" class="font-bold">Nationality:</label>
                    <input type="text" class="form-control mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0" id="nationality" name="Nationality" placeholder="Enter player's nationality" value="{{$player->Nationality}}">
                </div>
                
                <button type="submit" class="w-full bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-md transition duration-300">Update Player</button>
            </form>
        </div>
    </div>
</body>
</html>
