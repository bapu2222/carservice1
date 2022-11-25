@extends('global.master')
@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2
                    class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
                Add New Service
            </h2>
            @if (session('status'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline"> {{ session('status')}} </span>
                    <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red-500" role="button"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path
                                    d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                      </span>
                </div>
            @endif

        <!-- CTA -->
            @if(isset($services->id))
                <form class="w-full max-w-lg" action="{{route('services.update',['service'=>$services->id])}}"
                      method="POST"
                      enctype="multipart/form-data">
                    @method('PATCH')
                    @else

                        <form class="w-full max-w-lg" action="{{route('services.store')}}" method="POST"
                              enctype="multipart/form-data">
                            @method('POST')
                            @endif
                            @csrf
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide
                                text-gray-700 text-xs font-bold mb-2"
                                       for="grid-state">
                                    Select Category
                                </label>
                                <div class="relative">

                                    <select class="block appearance-none
                                    w-full bg-gray-200 border
                                    border-gray-200 text-gray-700 py-3
                                    px-4 pr-8 rounded leading-tight
                                    focus:outline-none focus:bg-white
                                    focus:border-gray-500"
                                            id="grid-state" name="categories_id">
                                        @foreach ($categ as $c)
                                            <option value="{{$c->id}}">{{$c->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                            </div>

                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide
                                    text-gray-700 text-xs font-bold mb-2"
                                       for="grid-city">
                                    Service Name
                                </label>
                                <input class="appearance-none block w-full
                                    bg-gray-200 text-gray-700 border
                                    border-gray-200 rounded py-3 px-4
                                    leading-tight focus:outline-none
                                    focus:bg-white focus:border-gray-500"
                                       id="grid-city" type="text" name="name"
                                       placeholder="Name"
                                       value="{{isset($services->name) ? $services->name : ''}}">
                            </div>

                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide
                                    text-gray-700 text-xs font-bold mb-2"
                                       for="grid-city">
                                    Service Description
                                </label>
                                <input class="appearance-none block w-full
                                    bg-gray-200 text-gray-700 border
                                    border-gray-200 rounded py-3 px-4
                                    leading-tight focus:outline-none
                                    focus:bg-white focus:border-gray-500"
                                       id="grid-city" type="text" name="description"
                                       placeholder="Ex 3"
                                       value="{{isset($services->description) ? $services->description : ''}}">
                            </div>

                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide
                                    text-gray-700 text-xs font-bold mb-2"
                                       for="grid-city">
                                    Service Price
                                </label>
                                <input class="appearance-none block w-full
                                    bg-gray-200 text-gray-700 border
                                    border-gray-200 rounded py-3 px-4
                                    leading-tight focus:outline-none
                                    focus:bg-white focus:border-gray-500"
                                       id="grid-city" type="text" name="price"
                                       placeholder="4999"
                                       value="{{isset($services->price) ? $services->price : ''}}"
                                >
                            </div>
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                <label class="block uppercase tracking-wide
                                  text-gray-700 text-xs font-bold mb-2"
                                       for="grid-city">
                                    Service Image
                                </label>
                                <input class="appearance-none block w-full
                                  bg-gray-200 text-gray-700 border
                                  border-gray-200 rounded py-3 px-4
                                  leading-tight focus:outline-none
                                  focus:bg-white focus:border-gray-500"
                                       id="grid-city" type="file"
                                       placeholder="Name" name="services_image">
                            </div>
                            <div class="flex flex-wrap  w-full md:w-1/3 px-3 mb-6 md:mb-0">
                                @if(isset($services->categories_image))
                                    <img class="border-2 rounded-lg "
                                         src="{{'/img/servicesPhoto/'.$services->services_image}}" width="100px"
                                         alt="categories images">
                                @endif
                            </div>
                            <div class="flex flex-wrap -mx-3 mb-2">
                                <a
                                        class="flex items-center justify-between
                                    p-4
                                    mb-8 text-sm
                                    font-semibold text-purple-100
                                    bg-purple-600
                                    rounded-lg shadow-md
                                    focus:outline-none
                                    focus:shadow-outline-purple"
                                        href="Javascript:void(0)">
                                    <div class="flex items-center">
                                        <button type="submit">Add</button>
                                    </div>
                                </a>
                                <a
                                        class="flex ml-4 items-center
                                    justify-between
                                    p-4
                                    mb-8 text-sm
                                    font-semibold text-purple-100
                                    bg-purple-600
                                    rounded-lg shadow-md
                                    focus:outline-none
                                    focus:shadow-outline-purple"
                                        href="{{ route('services.index') }}">
                                    <div class="flex items-center">
                                        <span>Cancel</span>
                                    </div>
                                </a>
                            </div>
                        </form>
                        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            @if(isset($services->services_image))
                                <img src="{{'/img/servicesPhoto/'.$services->services_image}}" width="100px"
                                     alt="Services images">
                            @endif
                        </div>
        </div>
    </main>
@stop