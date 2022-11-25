<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Car Service Dashboard</title>
    <link
            href="{{ url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap')}}"
            rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ url('css/tailwind.output.css')}}"/>
    <script
            src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
            defer></script>
    <script src="{{ url('js/init-alpine.js')}}"></script>
    <link
            rel="stylesheet"
            href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css')}}"
    />
    <script
            src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js')}}"
            defer></script>
    <script src="{{ url('js/charts-lines.js') }}" defer></script>
    <script src="{{ url('js/charts-pie.js') }}" defer></script>
</head>
<body>
<div
        class="flex h-screen bg-gray-50 dark:bg-gray-900"
        :class="{ 'overflow-hidden': isSideMenuOpen }">
    <!-- Desktop sidebar -->
    <aside
            class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800
        md:block flex-shrink-0">
        <div class="py-4 text-gray-500 dark:text-gray-400">
            <a
                    class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
                    href="#">
                Marammat
            </a>
            <ul class="mt-6">
                <li class="relative px-6 py-3">
              <span
                      class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg
                rounded-br-lg"
                      aria-hidden="true"></span>
                    <a
                            class="inline-flex items-center w-full text-sm font-semibold
                text-gray-800 transition-colors duration-150 hover:text-gray-800
                dark:hover:text-gray-200 dark:text-gray-100"
                            href="/admin">
                        <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor">
                            <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2
                    2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0
                    011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        <span class="ml-4">Dashboard</span>
                    </a>
                </li>
            </ul>
            <ul>
                <li class="relative px-6 py-3">
                    <button
                            class="inline-flex items-center justify-between w-full text-sm
                font-semibold transition-colors duration-150 hover:text-gray-800
                dark:hover:text-gray-200"
                            @click="togglePagesMenu"
                            aria-haspopup="true">
                <span class="inline-flex items-center">
                  <svg
                          class="w-5 h-5"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor">
                    <path
                            d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0
                      01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1
                      1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1
                      0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                  </svg>
                  <span class="ml-4">Request</span>
                </span>
                        <svg
                                class="w-4 h-4"
                                aria-hidden="true"
                                fill="currentColor"
                                viewBox="0 0 20 20">
                            <path
                                    fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0
                    111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <template x-if="isPagesMenuOpen">
                        <ul
                                x-transition:enter="transition-all ease-in-out duration-300"
                                x-transition:enter-start="opacity-25 max-h-0"
                                x-transition:enter-end="opacity-100 max-h-xl"
                                x-transition:leave="transition-all ease-in-out duration-300"
                                x-transition:leave-start="opacity-100 max-h-xl"
                                x-transition:leave-end="opacity-0 max-h-0"
                                class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium
                  text-gray-500 rounded-md shadow-inner bg-gray-50
                  dark:text-gray-400 dark:bg-gray-900"
                                aria-label="submenu">
                            <li
                                    class="px-2 py-1 transition-colors duration-150
                    hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="/allappointment">All Appointment</a>
                            </li>
                            <li
                                    class="px-2 py-1 transition-colors duration-150
                    hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="/newappointment">New Appointment</a>
                            </li>
                            <li
                                    class="px-2 py-1 transition-colors duration-150
                    hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="/acceptappointment">Accepted Appointment</a>
                            </li>
                            <li
                                    class="px-2 py-1 transition-colors duration-150
                    hover:text-gray-800 dark:hover:text-gray-200">
                                <a class="w-full" href="/rejectappointment">Rejected Appointment</a>
                            </li>
                        </ul>
                    </template>
                </li>
                <li class="relative px-6 py-3">
                    <a
                            class="inline-flex items-center w-full text-sm font-semibold
                transition-colors duration-150 hover:text-gray-800
                dark:hover:text-gray-200"
                            href="{{route('categories.index')}}">
                        <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor">
                            <path
                                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777
                    2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122
                    2.122m-5.657
                    5.656l-2.12 2.122"></path>
                        </svg>
                        <span class="ml-4">Manage Category</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <a
                            class="inline-flex items-center w-full text-sm font-semibold
                transition-colors duration-150 hover:text-gray-800
                dark:hover:text-gray-200"
                            href="{{route('services.index')}}">
                        <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5
                    8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"/>
                        </svg>
                        <span class="ml-4">Manage Service</span>
                    </a>
                </li>
                {{-- <li class="relative px-6 py-3">
                  <button
                    class="inline-flex items-center justify-between w-full text-sm
                    font-semibold transition-colors duration-150 hover:text-gray-800
                    dark:hover:text-gray-200"
                    @click="togglePagesMenuu"
                    aria-haspopup="true">
                    <span class="inline-flex items-center">
                      <svg
                        class="w-5 h-5"
                        aria-hidden="true"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756
                          3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37
                          2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0
                          3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37
                          2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924
                          1.756-3.35 0a1.724 1.724 0
                          00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0
                          00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724
                          0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608
                          2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round"
                          stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                      </svg>
                      <span class="ml-4">Service</span>
                    </span>
                    <svg
                      class="w-4 h-4"
                      aria-hidden="true"
                      fill="currentColor"
                      viewBox="0 0 20 20">
                      <path
                        fill-rule="evenodd"
                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0
                        111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </button>
                  <template x-if="isPagesMenuOpenu">
                    <ul
                      x-transition:enter="transition-all ease-in-out duration-300"
                      x-transition:enter-start="opacity-25 max-h-0"
                      x-transition:enter-end="opacity-100 max-h-xl"
                      x-transition:leave="transition-all ease-in-out duration-300"
                      x-transition:leave-start="opacity-100 max-h-xl"
                      x-transition:leave-end="opacity-0 max-h-0"
                      class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium
                      text-gray-500 rounded-md shadow-inner bg-gray-50
                      dark:text-gray-400 dark:bg-gray-900"
                      aria-label="submenu">
                      <li
                            class="px-2 py-1 transition-colors duration-150
                            hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="#">Regular</a>
                          </li>
                          <li
                            class="px-2 py-1 transition-colors duration-150
                            hover:text-gray-800 dark:hover:text-gray-200">
                            <a class="w-full" href="#">AMC</a>
                          </li>
                    </ul>
                  </template>
                </li> --}}
                {{-- <li class="relative px-6 py-3">
                  <a
                    class="inline-flex items-center w-full text-sm font-semibold
                    transition-colors duration-150 hover:text-gray-800
                    dark:hover:text-gray-200"
                    href="/amc">
                    <svg
                      class="w-5 h-5"
                      aria-hidden="true"
                      fill="none"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5
                        8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                      </svg>
                      <span class="ml-4">AMC Membership</span>
                    </a>
                  </li> --}}
                <li class="relative px-6 py-3">
                    <a
                            class="inline-flex items-center w-full text-sm font-semibold
                  transition-colors duration-150 hover:text-gray-800
                  dark:hover:text-gray-200"
                            href="/offers"
                            {{-- href="{{route('offers.index')}}" --}}
                    >
                        <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor">
                            <path
                                    d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777
                      2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122
                      2.122m-5.657
                      5.656l-2.12 2.122"></path>
                        </svg>
                        <span class="ml-4">offers</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <a
                            class="inline-flex items-center w-full text-sm font-semibold
                  transition-colors duration-150 hover:text-gray-800
                  dark:hover:text-gray-200"
                            href="/regularclient">
                        <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15
                      21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4
                      4 0 11-8 0 4 4 0 018 0z"/>
                        </svg>
                        <span class="ml-4">Client</span>
                    </a>
                </li>

                <li class="relative px-6 py-3">
                    <a
                            class="inline-flex items-center w-full text-sm font-semibold
                    transition-colors duration-150 hover:text-gray-800
                    dark:hover:text-gray-200"
                            href="/vehical">
                        <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor">

                            <path stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="M5 3v4M3 5h4M6
                        17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13
                        21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                        </svg>
                        <span class="ml-4">Vehicle</span>
                    </a>
                </li>
                <li class="relative px-6 py-3">
                    <a
                            class="inline-flex items-center w-full text-sm
                      font-semibold
                      transition-colors duration-150 hover:text-gray-800
                      dark:hover:text-gray-200"
                            href="/invoice">
                        <svg
                                class="w-5 h-5"
                                aria-hidden="true"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0
                          002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="ml-4">Invoice</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

</body>
</html>
