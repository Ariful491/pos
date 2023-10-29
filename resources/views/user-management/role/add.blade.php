<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Role Add') }}
        </h2>
    </x-slot>
    <div class="container mt-2">
        <div class="flex justify-end">
            <button type="button"
                    onclick="history.back()"
                    class=" bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 text-white bg-blue-700 hover:bg-blue-800  inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Back
                <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </button>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div
                class=" bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                <form method="post" action="{{route('roles.store')}}">
                    @csrf
                    <div class="grid grid-cols-3">
                        <div class="mb-6">
                            <label for="base-input"
                                   class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                Role Name
                            </label>
                            <input type="text" id="base-input"
                                   name="role_name"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                    </div>
                    <label for="base-input"
                           class="block   mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Permissions
                    </label>
                    <div class="m-3  rounded-2xl px-3 py-3 ">
                        <input id="select-all-permissions" type="checkbox"
                               class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 rounded focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="select-all-permissions"
                               class="ml-2 text-sm capitalize font-medium text-gray-900 dark:text-gray-300">
                            Select All
                        </label>

                    </div>
                    <div class="all-permissions">
                        <div class="grid grid-cols-2">
                            @foreach($moduleNameWisePermissions as $moduleName => $permissions)
                                <div class="checkbox-observer">

                                    <div class="border  m-3 rounded-2xl px-3 py-3  ">
                                        <div class=" flex">
                                            <div class="flex items-center  pr-5 border-r-2">
                                                <input id="permission_{{$moduleName}}" type="checkbox"
                                                       data-type="module"
                                                       value="{{$permissions}}"
                                                       class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 rounded focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                <label for="permission_{{$moduleName}}"
                                                       class="ml-2 text-sm capitalize font-medium text-gray-900 dark:text-gray-300">
                                                    {{$moduleName}}
                                                </label>
                                            </div>
                                            <div class="child-box">
                                                @foreach($permissions as $permission)
                                                    <div class="flex items-center mr-4   p-4">
                                                        <input id="permission_{{$moduleName}}_{{$permission->id}}"
                                                               type="checkbox"
                                                               data-type="child"
                                                               name="permissions[]"
                                                               value="{{$permission->id}}"
                                                               class="w-4 h-4 text-teal-600 bg-gray-100 border-gray-300 rounded focus:ring-teal-500 dark:focus:ring-teal-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                                        <label for="permission_{{$moduleName}}_{{$permission->id}}"
                                                               class="ml-2 text-sm font-medium capitalize text-gray-900 dark:text-gray-300">{{$permission->name}}</label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="container mt-2">
                        <div class="flex justify-end">
                            <a href=""
                               class=" bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 text-white bg-blue-700 hover:bg-blue-800  inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                     stroke-width="1.5" stroke="currentColor" class="mr-3 w-4 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M9 3.75H6.912a2.25 2.25 0 00-2.15 1.588L2.35 13.177a2.25 2.25 0 00-.1.661V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18v-4.162c0-.224-.034-.447-.1-.661L19.24 5.338a2.25 2.25 0 00-2.15-1.588H15M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859M12 3v8.25m0 0l-3-3m3 3l3-3"/>
                                </svg>
                                Save
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
