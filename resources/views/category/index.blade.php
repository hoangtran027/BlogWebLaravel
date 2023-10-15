<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <p class="mt-[20px] font-bold uppercase text-red-400 text-[30px]">List category</p>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Category Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category Detail
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $cat)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$cat->title}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$cat->detail}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$cat->image}}
                                </td>
                                <td class="px-6 py-4 flex">
                                    <a class="hover:text-blue-600 mr-6" href="{{route('category.edit', ['category'=>$cat])}}">
                                        Update
                                    </a>
                                    <form method="POST" action="{{route('category.destroy', ['category'=>$cat])}}">
                                        @csrf
                                        @method("DELETE")
                                        <button class="hover:text-red-600 mr-6">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</x-app-layout>

