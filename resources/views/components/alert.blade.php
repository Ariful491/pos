@props(['messages','type'])

<div>
    <div x-data="{ open: true }" class="text-center absolute left-0 right-0 py-4 lg:px-4">
        <div x-show="open"
             class="p-2  bg-red-600 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
             role="alert">
            <span class="flex rounded-full bg-red-900 uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
            <span
                class="font-semibold mr-2 text-left flex-auto">
                Get the coolest t-shirts from our brand new store
            </span>

            <button @click="open=false" type="button"
                    class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-full focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-blue-400 dark:hover:bg-gray-700"
                    data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>

        </div>
    </div>
</div>
