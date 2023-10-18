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
                            <a href=""
                               class="p-3 rounded-2xl  hover:shadow hover:transition-all  flex hover:bg-gray-100  sm:py-4 justify-between">Permissions</a>
                        </li>
                    </ul>
                </div>
                <div class=" col-span-3">
                    <div class="text-center">
                        <div class="inline-flex rounded-md shadow-sm" role="group">
                            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-l-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                pdf
                            </button>
                            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                Csv
                            </button>
                            <button type="button" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-r-md hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                                xlsx
                            </button>
                        </div>

                    </div>
                    <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                        <table id="example" class="stripe hover"
                               style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                            <thead>
                            <tr>
                                <th data-priority="1">Name</th>
                                <th data-priority="2">Position</th>
                                <th data-priority="3">Office</th>
                                <th data-priority="4">Age</th>
                                <th data-priority="5">Start date</th>
                                <th data-priority="6">Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $users)
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                            @endforeach


                            </tbody>

                        </table>


                    </div>
                    <!--/Card-->

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
