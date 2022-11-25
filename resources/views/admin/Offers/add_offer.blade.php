@extends('global.master')
@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2
                    class="my-6 text-2xl font-semibold text-gray-700
                            dark:text-gray-200">
                Add New Offers
            </h2>

            <form class="w-full max-w-lg">
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide
                                    text-gray-700 text-xs font-bold mb-2"
                           for="grid-city">
                        Offer Name
                    </label>
                    <input class="appearance-none block w-full
                                    bg-gray-200 text-gray-700 border
                                    border-gray-200 rounded py-3 px-4
                                    leading-tight focus:outline-none
                                    focus:bg-white focus:border-gray-500"
                           id="grid-city" type="text"
                           placeholder="Name">
                </div>

                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide
                                    text-gray-700 text-xs font-bold mb-2"
                           for="grid-city">
                        Minimum Value
                    </label>
                    <input class="appearance-none block w-full
                                    bg-gray-200 text-gray-700 border
                                    border-gray-200 rounded py-3 px-4
                                    leading-tight focus:outline-none
                                    focus:bg-white focus:border-gray-500"
                           id="grid-city" type="text"
                           placeholder="">
                </div>
                <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide
                                    text-gray-700 text-xs font-bold mb-2"
                           for="grid-city">
                        Discount
                    </label>
                    <input class="appearance-none block w-full
                                    bg-gray-200 text-gray-700 border
                                    border-gray-200 rounded py-3 px-4
                                    leading-tight focus:outline-none
                                    focus:bg-white focus:border-gray-500"
                           id="grid-city" type="text"
                           placeholder="%">
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide
                                        text-gray-700 text-xs font-bold mb-2"
                               for="grid-city">
                            Offer Description
                        </label>
                        <input class="appearance-none block w-full
                                        bg-gray-200 text-gray-700 border
                                        border-gray-200 rounded py-3 px-4
                                        leading-tight focus:outline-none
                                        focus:bg-white focus:border-gray-500"
                               id="grid-city" type="text"
                               placeholder="">
                    </div>


                    <a
                            class="flex items-center justify-between
                                    p-4
                                    mb-8 text-sm
                                    font-semibold text-purple-100
                                    bg-purple-600
                                    rounded-lg shadow-md
                                    focus:outline-none
                                    focus:shadow-outline-purple"
                            href="#">
                        <div class="flex items-center">
                            <span>Add</span>
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
                            href="offers.html">
                        <div class="flex items-center">
                            <span>Cancel</span>
                        </div>
                    </a>
                </div>
            </form>
        </div>
    </main>
@stop