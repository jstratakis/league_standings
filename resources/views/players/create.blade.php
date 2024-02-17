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
                
                <!-- Name -->
                <div class="mb-4">
                    <label for="name" class="block font-bold">Name:</label>
                    <input type="text" id="name" name="Name" placeholder="Enter player name" value="{{old('Name')}}" class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                </div>
                
                <!-- Team -->
                <div class="mb-4">
                    <label for="team" class="block font-bold">Team:</label>
                    <input type="text" id="team" name="Team" placeholder="Enter player's team" value="{{old('Team')}}" required class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                </div>
                
                <!-- Jersey Number -->
                <div class="mb-4">
                    <label for="jersey_number" class="block font-bold">Jersey Number:</label>
                    <select id="jersey_number" name="Jersey_Number" class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                        <!-- Generating numbers 0-99 -->
                        @for($i = 0; $i <= 99; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    @if ($errors->has('Jersey_Number'))
                        <div class="text-red-500">
                         {{ $errors->first('Jersey_Number') }}
                        </div>
                    @endif

                </div>
                
                <!-- Position -->
                <div class="mb-4">
                    <label for="position" class="block font-bold">Position:</label>
                    <select id="position" name="Position" class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                        <option value="Point Guard" {{old('Position')=="Point Guard"?"selected":""}}>Point Guard</option>
                        <option value="Shooting Guard" {{old('Position')=="Shooting Guard"?"selected":""}}>Shooting Guard</option>
                        <option value="Small Forward" {{old('Position')=="Small Forward"?"selected":""}}>Small Forward</option>
                        <option value="Power Forward" {{old('Position')=="Power Forward"?"selected":""}}>Power Forward</option>
                        <option value="Center" {{old('Position')=="Center"?"selected":""}}>Center</option>
                    </select>
                </div>
                
                <!-- Date of Birth -->
                <div class="mb-4">
                    <label for="dob" class="block font-bold">Date of Birth:</label>
                    <input type="date" id="dob" name="Date_of_birth" value="{{old('Date_of_birth')}}" required class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                </div>
                
                <!-- Nationality -->
                <div class="mb-6">
                    <label for="nationality" class="block font-bold">Nationality:</label>
                    <select id="nationality" name="Nationality" class="mt-1 block w-full rounded-md bg-white border-gray-300 focus:border-gray-500 focus:bg-white focus:ring-0">
                        @foreach($countries as $country)
                        <option value="{{ $country }}">{{ $country }}</option>
                         @endforeach
                        </select>
                </div>
                
                <button type="submit" class="w-full bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-md transition duration-300">Create Player</button>
            </form>
        </div>
    </div>
</body>
</html>
