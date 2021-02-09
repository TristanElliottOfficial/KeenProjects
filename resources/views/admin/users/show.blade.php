@extends('layouts.app')

@section('header')
    <header class="flex justify-between items-center px-10 py-6">
        <div class="block">
            <h1 class="text-4xl text-gray-700">{{ __('View User') }}</h1>
        </div>
        <div class="block">
            <a href="{{ route('users.index') }}" class="v-button button-success"><i class="fab fa-chevron-left"></i>Return</a>
        </div>
    </header>
@endsection

@section('content')
    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-1">
            <main class="bg-white p-6 shadow-lg rounded-lg">
                <div class="flex items-center">
                    <img src="http://tristanelliott.co.za/development/users/User1.jpg" class="w-20 h-20 rounded-full border-4 border-indigo-200" alt="{{ $user->name }} Profile Picture">
                    <div class="block pl-3">
                        <h2 class="text-2xl font-semibold text-gray-800">{{ $user->name }}</h2>
                        <p class="text-sm font-light text-gray-700">{{ $user->email }}</p>
                    </div>
                </div>
            </main>
            <main class="bg-white p-6 shadow-lg rounded-lg mt-3">
                <div class="block">
                    <h4 class="text-xl font-semibold text-gray-800 pb-2">About</h4>
                    <p class="font-light text-gray-600">{{ $user->about }}</p>
                </div>
            </main>
            <main class="bg-white p-6 shadow-lg rounded-lg mt-3">
                <div class="block">
                    <h4 class="text-xl font-semibold text-gray-800 pb-2">Skills</h4>
                    <span class="bg-indigo-300 text-indigo-700 text-xs p-2 rounded-2xl">{{ $user->skills }}</span>
                </div>
            </main>
            <main class="bg-white p-6 shadow-lg rounded-lg mt-3">
                <div class="block">
                    <h4 class="text-xl font-semibold text-gray-800 pb-2">Social</h4>
                    <span class="bg-indigo-300 text-indigo-700 text-xs p-2 rounded-2xl"><i class="fab fa-facebook pr-1"></i> <a href="{{ $user->social_facebook }}">Facebook</a></span>
                    <span class="bg-indigo-300 text-indigo-700 text-xs p-2 rounded-2xl"><i class="fab fa-twitter pr-1"></i> <a href="{{ $user->social_twitter }}">Twitter</a></span>
                    <span class="bg-indigo-300 text-indigo-700 text-xs p-2 rounded-2xl"><i class="fab fa-github pr-1"></i> <a href="{{ $user->social_github }}">GitHub</a></span>
                </div>
            </main>
        </div>
        <div class="col-span-3">
            <div class="block w-full bg-white p-6 shadow-lg rounded-lg">
                <h4 class="text-3xl font-semibold text-gray-800">Project Name</h4>
                <p class="text-gray-600 font-light mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A animi eaque eligendi, facere inventore iure magni nesciunt numquam odit placeat porro praesentium qui reiciendis soluta tempora tempore temporibus. Ab architecto aspernatur beatae corporis deleniti, et eveniet expedita inventore iusto magnam molestiae nostrum officiis omnis quasi sapiente totam unde, vel voluptate?</p>
                {{-- Tasks Dropdown: To display the tasks that the user currently has active on that specific project. | TODO Tristan: make a new vue component for the tasks dropdown. --}}
                <div class="pt-3">
                    <button class="flex items-center justify-between w-full py-4 bg-gray-100 px-4 border rounded-lg shadow-lg">
                        <span class="text-gray-700"><i class="fas fa-tasks pr-2"></i>Tasks</span>
                        <span class="text-gray-700"><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <div class="bg-gray-200 w-full">
                        <a href="" class="block px-3 py-4 hover:bg-indigo-500 text-gray-700 font-light">
                            <label for="select_task">
                                <input type="checkbox" id="select_task" name="select_task" />
                                <span class="pl-2">Create New Website folder structure.</span>
                            </label>
                        </a>
                    </div>
                </div>
                <div class="flex space-x-3 mt-3">
                    <a href="" class="v-button button-primary"><i class="fas fa-eye pr-2"></i>View Project</a>
                    <a href="" class="v-button button-warning"><i class="fas fa-pen pr-2"></i>Update Project</a>
                    <a href="" class="v-button button-danger"><i class="fas fa-trash pr-2"></i>Destroy Project</a>
                </div>
            </div>
        </div>
    </div>
@endsection
