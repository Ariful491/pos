<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4  gap-4  ">
                <div
                    class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                    <ul role="list" class=" ">
                        <li class="my-2">
                            <a href="" class="p-3 rounded-2xl shadow flex bg-gray-100  sm:py-4 justify-between">
                                <div>
                                    Users
                                </div>
                                <div class=" ">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                                    </svg>
                                </div>

                            </a>
                        </li>
                        <li class="my-2">
                            <a href="{{route('roles.index')}}"
                               class="p-3 rounded-2xl  hover:shadow hover:transition-all  flex hover:bg-gray-100  sm:py-4 justify-between">Roles</a>
                        </li>
                    </ul>
                </div>
                <div class=" col-span-3">
                    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <table id="user-table" class="stripe hover"
                               style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                            <thead>
                            <tr>
                                <th data-priority="1">Sl</th>
                                <th data-priority="2">Name</th>
                                <th data-priority="3">Email</th>
                                <th data-priority="4">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
