@extends('global.master')
@section('content')
    <main class="h-full pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto">
            <h2
                    class="my-6 text-2xl font-semibold text-gray-700
                    dark:text-gray-200">
                Invoice
            </h2>
            <div class="container grid px-6">
                <div
                        class="relative w-full max-w-xl
                        focus-within:text-purple-500">
                    <div class="absolute inset-y-0 flex items-center ml-2">
                        <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                            <path
                                    fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89
                              3.476l4.817 4.817a1 1 0 01-1.414
                              1.414l-4.816-4.816A6 6 0
                              012 8z"
                                    clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input
                            class="w-full pl-8 pr-2 text-sm text-gray-700
                          placeholder-gray-600 bg-gray-100 border-0 rounded-md
                          dark:placeholder-gray-500 dark:focus:shadow-outline-gray
                          dark:focus:placeholder-gray-600 dark:bg-gray-700
                          dark:text-gray-200 focus:placeholder-gray-500
                          focus:bg-white
                          focus:border-purple-300 focus:outline-none
                          focus:shadow-outline-purple form-input"
                            type="text"
                            placeholder="Search for projects"
                            aria-label="Search"
                    />
                </div>
            </div>
            <div class="flex flex-wrap ml-4 mb-2">
                <label class="block text-sm ml-3 mt-2">
                    <span class="text-gray-700 dark:text-gray-400">Select Date</span>
                    <input
                            class="block w-full mt-1 text-sm dark:border-gray-600
                        dark:bg-gray-700 focus:border-red-400 focus:outline-none
                        focus:shadow-outline-red dark:text-gray-300
                        dark:focus:shadow-outline-gray form-input"
                            placeholder="Selete Date" type="date"
                    />
                </label>
            </div>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full whitespace-no-wrap">
                        <thead>
                        <tr
                                class="text-xs font-semibold tracking-wide text-left
                            text-gray-500 uppercase border-b
                            dark:border-gray-700 bg-gray-50 dark:text-gray-400
                            dark:bg-gray-800">
                            <th class="px-4 py-3">Invoice ID</th>
                            <th class="px-4 py-3">Customer Name</th>
                            <th class="px-4 py-3">Invoice Date</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                        </thead>
                        <tbody
                                class="bg-white divide-y dark:divide-gray-700
                          dark:bg-gray-800">


                        <tr class="text-gray-700 dark:text-gray-400">
                            <td class="px-4 py-3 text-sm">
                                #1
                            </td>
                            <td class="px-4 py-3 text-sm">
                                Jay
                            </td>
                            <td class="px-4 py-3 text-sm">
                                27-05-2022
                            </td>

                            <td class="px-4 py-3">
                                <div class="flex items-center space-x-4 text-sm">
                                    <a href="/geninvoice">
                                        <button
                                                class="flex items-center justify-between px-2 py-2
                                  text-sm font-medium leading-5 text-purple-600
                                  rounded-lg dark:text-gray-400 focus:outline-none
                                  focus:shadow-outline-gray"
                                                aria-label="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                                 fill="currentColor" class="w-5 h-5" viewBox="0 0
                                            576 512">
                                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                        d="M279.6 160.4C282.4 160.1 285.2 160 288
                                              160C341 160 384 202.1 384 256C384 309 341 352
                                              288 352C234.1 352 192 309 192 256C192 253.2
                                              192.1 250.4 192.4 247.6C201.7 252.1 212.5 256
                                              224 256C259.3 256 288 227.3 288 192C288 180.5
                                              284.1 169.7 279.6 160.4zM480.6 112.6C527.4 156
                                              558.7 207.1 573.5 243.7C576.8 251.6 576.8 260.4
                                              573.5 268.3C558.7 304 527.4 355.1 480.6
                                              399.4C433.5 443.2 368.8 480 288 480C207.2 480
                                              142.5 443.2 95.42 399.4C48.62 355.1 17.34 304
                                              2.461 268.3C-.8205 260.4-.8205 251.6 2.461
                                              243.7C17.34 207.1 48.62 156 95.42 112.6C142.5
                                              68.84 207.2 32 288 32C368.8 32 433.5 68.84 480.6
                                              112.6V112.6zM288 112C208.5 112 144 176.5 144
                                              256C144 335.5 208.5 400 288 400C367.5 400 432
                                              335.5 432 256C432 176.5 367.5 112 288 112z"/>
                                            </svg>
                                        </button>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div
                        class="grid px-4 py-3 text-xs font-semibold tracking-wide
                      text-gray-500 uppercase border-t dark:border-gray-700
                      bg-gray-50 sm:grid-cols-9 dark:text-gray-400
                      dark:bg-gray-800">
                      <span class="flex items-center col-span-3">
                        Showing 21-30 of 100
                      </span>
                    <span class="col-span-2"></span>
                    <!-- Pagination -->
                    <span class="flex col-span-4 mt-2 sm:mt-auto
                        sm:justify-end">
                        <nav aria-label="Table navigation">
                          <ul class="inline-flex items-center">
                            <li>
                              <button
                                      class="px-3 py-1 rounded-md rounded-l-lg
                                focus:outline-none focus:shadow-outline-purple"
                                      aria-label="Previous">
                                <svg
                                        class="w-4 h-4 fill-current"
                                        aria-hidden="true"
                                        viewBox="0 0 20 20">
                                  <path
                                          d="M12.707 5.293a1 1 0 010 1.414L9.414
                                    10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1
                                    0 010-1.414l4-4a1 1 0 011.414 0z"
                                          clip-rule="evenodd"
                                          fill-rule="evenodd"></path>
                                </svg>
                              </button>
                            </li>
                            <li>
                              <button
                                      class="px-3 py-1 rounded-md focus:outline-none
                                focus:shadow-outline-purple">
                                1
                              </button>
                            </li>
                            <li>
                              <button
                                      class="px-3 py-1 rounded-md focus:outline-none
                                focus:shadow-outline-purple">
                                2
                              </button>
                            </li>
                            <li>
                              <button
                                      class="px-3 py-1 text-white transition-colors
                                duration-150 bg-purple-600 border border-r-0
                                border-purple-600 rounded-md focus:outline-none
                                focus:shadow-outline-purple">
                                3
                              </button>
                            </li>

                            <li>
                              <span class="px-3 py-1">...</span>
                            </li>
                            <li>
                              <button
                                      class="px-3 py-1 rounded-md focus:outline-none
                                focus:shadow-outline-purple">
                                8
                              </button>
                            </li>
                            <li>
                              <button
                                      class="px-3 py-1 rounded-md focus:outline-none
                                focus:shadow-outline-purple">
                                9
                              </button>
                            </li>
                            <li>
                              <button
                                      class="px-3 py-1 rounded-md rounded-r-lg
                                focus:outline-none focus:shadow-outline-purple"
                                      aria-label="Next">
                                <svg
                                        class="w-4 h-4 fill-current"
                                        aria-hidden="true"
                                        viewBox="0 0 20 20">
                                  <path
                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10
                                    7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0
                                    010 1.414l-4 4a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd"
                                          fill-rule="evenodd"></path>
                                </svg>
                              </button>
                            </li>
                          </ul>
                        </nav>
                      </span>
                </div>
            </div>
        </div>
    </main>

@stop