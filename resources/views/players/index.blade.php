<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Players List</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto mt-10 mb-10">
        <div class="flex justify-between items-center mb-6">
            <!-- Moved the Create Player link to the left side -->
            <a href="{{ route('player.create') }}" class="bg-gray-500 bg-opacity-50 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
            Create Player
            </a>
            <h1 class="text-2xl font-bold text-gray-800">LEAGUE ROSTER</h1>
            <!-- Placeholder for aligning the title to the center -->
            <div></div>
        </div>
        <div class="bg-white shadow overflow-hidden rounded-lg">
            <table class="min-w-full leading-normal">
                <thead>
                    <tr class="bg-gray-800 text-white uppercase text-sm leading-normal">
                        <th class="py-3 px-5 text-left">Name</th>
                        <th class="py-3 px-5 text-left">Team</th>
                        <th class="py-3 px-5 text-left">Jersey Number</th>
                        <th class="py-3 px-5 text-left">Position</th>
                        <th class="py-3 px-5 text-left">Date of Birth</th>
                        <th class="py-3 px-5 text-left">Nationality</th>
                        <th class="py-3 px-5 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm">
                    @foreach($players as $player)
                    <tr class="hover:bg-gray-100 border-b border-gray-200">
                        <td class="py-3 px-5">{{ $player->Name }}</td>
                        <td class="py-3 px-5">{{ $player->Team }}</td>
                        <td class="py-3 px-5">{{ $player->Jersey_Number }}</td>
                        <td class="py-3 px-5">{{ $player->Position }}</td>
                        <td class="py-3 px-5">{{ $player->Date_of_birth }}</td>
                        <td class="py-3 px-5">{{ $player->Nationality }}</td>
                        <td class="py-3 px-5">
                            <a href="{{ route('player_edit', $player->id) }}" class="text-blue-600 hover:text-blue-800 transition duration-300 ease-in-out underline">
                                <i class="fas fa-pen-square mr-2"></i>Edit
                            </a>
                            <form method="POST" action="{{ route('player_destroy', ['player' => $player->id]) }}" class="inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-red-600 hover:text-red-800 transition duration-300 ease-in-out underline ml-4">
                                    <i class="fas fa-trash-alt mr-2"></i>Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
