<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('POST') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <p class="mt-[20px] font-bold uppercase text-red-400 text-[30px]">List Post</p>
                <a href="{{route('dashboard.index')}}" class="bg-red-400 text-white px-4 py-2 rounded-[8px] hover:bg-red-100 hover:text-black">Back</a>

            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Category Type
                            </th>
                            <th scope="col" class="px-6 py-3">
                                User Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Post Title
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Thumb
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Image Link
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Approved
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $post)
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{$post->category->title}}
                                </th>
                                <td class="px-6 py-4">
                                    {{$post->comments}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$post->title}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$post->thumb}}
                                </td>
                                <td class="px-6 py-4">
                                    <img src="{{asset('imgs').'/'.$post->full_img}}" alt="" class="w-[80px] h-[80px] object-cover">
                                    {{$post->full_img}}
                                </td>
                                <td class="px-6 py-4">
                                    {{$post->approved}}
                                </td>
                                <td class="px-6 py-4 flex">
                                    <a class="hover:text-blue-600 mr-6" href="{{route('post.edit', ['post'=>$post])}}">
                                        Approved
                                    </a>
                                    <form method="POST" action="{{route('post.destroy', ['post'=>$post])}}">
                                        @csrf
                                        @method("DELETE")
                                        <button class="hover:text-red-600 mr-6">
                                            None
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

