<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Management') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="container mx-auto">
                <div class="grid md:grid-cols-4  gap-4  ">
                    <div
                        class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                            <li class="py-3 mx-4  sm:py-4">
                                <a href="" class="py-3 sm:py-4 ">Users ></a>
                            </li>
                            <li class="py-3 sm:py-4">
                                <a href="" class="py-3 sm:py-4">Permissions</a>
                            </li>
                            <li class="py-3 sm:py-4">
                                <a href="" class="py-3 sm:py-4">Roles</a>
                            </li>

                        </ul>
                    </div>


                    <div class="border border-red-700 col-span-3">2</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
