@extends('global.master')
@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Manage Service
            </h2>
            <div class="flex flex-wrap -mx-3 mb-2">
                <a class="flex items-center justify-between p-4 mb-8 text-sm font-semibold text-purple-100 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
                   href="{{ route('services.create') }}">
                    <div class="flex items-center">
                        <span>Add Manage Service &nbsp; &nbsp;</span>
                    </div>
                    <span>&plus;</span>
                </a>
            </div>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">ID</th>
                            <th class="px-4 py-3">Service Name</th>
                            <th class="px-4 py-3">Service Description</th>
                            <th class="px-4 py-3">Category</th>
                            <th class="px-4 py-3">Price</th>
                            <th class="px-4 py-3">Service Image</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                        @foreach($services as $s)
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    #{{$s->id}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$s->name}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$s->description}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$s->cate_name->name}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{$s->price}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    @if($s->services_image == null )
                                        {{'IMAGE NOT ADDED '}}
                                    @else
                                        <img src="{{'/img/servicesPhoto/'.$s->services_image}}"
                                             width="50px"
                                             alt="Services images">
                                    @endif
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Edit"
                                        >
                                            {{-- <a href="{{route('services.edit', ['services'=>$services->id])}}"> --}}
                                            <a href="{{route('services.edit',['service'=>$s->id])}}">
                                                <svg
                                                        class="w-5 h-5"
                                                        aria-hidden="true"
                                                        fill="currentColor"
                                                        viewBox="0 0 20 20"
                                                >
                                                    <path
                                                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"
                                                    ></path>
                                                </svg>
                                            </a>
                                        </button>
                                        {{-- <form method="POST" action="{{route('services.destroy',['service'=>$services->id])}}">
                                          @csrf --}}
                                        <input type="hidden" name="_method" value="DELETE">

                                        <button
                                                class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                                                aria-label="Delete">
                                            <svg
                                                    class="w-5 h-5"
                                                    aria-hidden="true"
                                                    fill="currentColor"
                                                    viewBox="0 0 20 20"
                                            >
                                                <path
                                                        fill-rule="evenodd"
                                                        d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                        clip-rule="evenodd"
                                                ></path>
                                            </svg>
                                        </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@stop