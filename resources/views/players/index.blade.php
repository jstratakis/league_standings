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
    <style>
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
            z-index: 1;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-900">
    <div class="container mx-auto mt-10 mb-10">
        <div class="flex justify-between items-center mb-6">
            <a href="/player/create" class="bg-gray-500 bg-opacity-50 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
            Create Player
            </a>
            <h1 class="text-2xl font-bold text-gray-800">LEAGUE ROSTER</h1>
            <div class="dropdown relative">
                @auth
                <button class="bg-green-500 bg-opacity-50 hover:bg-green-700 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
                    Profile
                </button>
                <div class="dropdown-menu">
                    <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Edit Profile</a>
                    <form method="POST" action="/logout" class="block">
                        @csrf
                        <button type="submit" class="text-red-600 hover:text-red-800 transition duration-300 ease-in-out">
                            Sign Out
                        </button>
                    </form>
                </div>
                @else
                <a href="/login" class="bg-blue-500 bg-opacity-50 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-300 ease-in-out">
                    Sign In
                </a>
                @endauth
            </div>
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
                    {{-- Assuming $players is provided by your controller --}}
                    @foreach($players as $player)
                    <tr class="hover:bg-gray-100 border-b border-gray-200">
                        <td class="py-3 px-5">{{ $player->Name }}</td>
                        <td class="py-3 px-5">{{ $player->Team }}</td>
                        <td class="py-3 px-5">{{ $player->Jersey_Number }}</td>
                        <td class="py-3 px-5">{{ $player->Position }}</td>
                        <td class="py-3 px-5">{{ $player->Date_of_birth }}</td>
                        <td class="py-3 px-5">{{ $player->Nationality }}</td>
                        <td class="py-3 px-5 flex items-center">
                            <a href="/player/edit/{{ $player->id }}" class="text-blue-600 hover:text-blue-800 transition duration-300 ease-in-out underline mr-2">
                                <i class="fas fa-pen-square mr-1"></i>Edit
                            </a>
                            <form method="POST" action="/player/destroy/{{ $player->id }}" class="inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="text-red-600 hover:text-red-800 transition duration-300 ease-in-out underline">
                                    <i class="fas fa-trash-alt mr-1"></i>Delete
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
