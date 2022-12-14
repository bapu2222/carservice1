<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Regular Client - Car Service</title>
    <link
            href="{{
      url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap')}}"
            rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ url('/css/tailwind.output.css')}}"/>
    <link rel="stylesheet"
          href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css"/>
    <script
            src="{{
      url('https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js')}}"
            defer></script>
    <script src="{{ url('js/init-alpine.js')}}"></script>
</head>
<body>
<div
        class="flex h-screen bg-gray-50 dark:bg-gray-900"
        :class="{ 'overflow-hidden': isSideMenuOpen}">
    <!-- Desktop sidebar -->
    <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800
        md:block flex-shrink-0">
        @include('admin.include.slider')
    </aside>

    <div class="flex flex-col flex-1 w-full">
        <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
            <div
                    class="container flex items-center justify-between h-full px-6
            mx-auto text-purple-600 dark:text-purple-300">
                <!-- Mobile hamburger -->
                <button
                        class="p-1 mr-5 -ml-1 rounded-md md:hidden
              focus:outline-none
              focus:shadow-outline-purple"
                        @click="toggleSideMenu"
                        aria-label="Menu">
                    <svg
                            class="w-6 h-6"
                            aria-hidden="true"
                            fill="currentColor"
                            viewBox="0 0 20 20">
                        <path
                                fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3
                  10a1 1 0
                  011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0
                  011-1h12a1 1 0
                  110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                    </svg>
                </button>
                <!-- Search input -->
                <div class="flex justify-center flex-1 lg:mr-32">
                    <div
                            class="relative w-full max-w-xl mr-6
                focus-within:text-purple-500">
                        <div class="absolute inset-y-0 flex items-center pl-2">
                            <svg
                                    class="w-4 h-4"
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
                <ul class="flex items-center flex-shrink-0 space-x-6">
                    <!-- Theme toggler -->
                    <li class="flex">
                        <button
                                class="rounded-md focus:outline-none
                  focus:shadow-outline-purple"
                                @click="toggleTheme"
                                aria-label="Toggle color mode">
                            <template x-if="!dark">
                                <svg
                                        class="w-5 h-5"
                                        aria-hidden="true"
                                        fill="currentColor"
                                        viewBox="0 0 20 20">
                                    <path
                                            d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001
                        0
                        1010.586 10.586z"></path>
                                </svg>
                            </template>
                            <template x-if="dark">
                                <svg
                                        class="w-5 h-5"
                                        aria-hidden="true"
                                        fill="currentColor"
                                        viewBox="0 0 20 20">
                                    <path
                                            fill-rule="evenodd"
                                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0
                        011-1zm4 8a4
                        4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0
                        001.414-1.414l-.707-.707a1 1 0 00-1.414
                        1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0
                        11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1
                        1 0
                        100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0
                        11-2
                        0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465
                        5.05l-.708-.707a1 1 0 00-1.414
                        1.414l.707.707zm1.414
                        8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1
                        0
                        011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                            clip-rule="evenodd"></path>
                                </svg>
                            </template>
                        </button>
                    </li>
                    <!-- Notifications menu -->
                    <li class="relative">
                        <button
                                class="relative align-middle rounded-md
                  focus:outline-none
                  focus:shadow-outline-purple"
                                @click="toggleNotificationsMenu"
                                @keydown.escape="closeNotificationsMenu"
                                aria-label="Notifications"
                                aria-haspopup="true">
                            <svg
                                    class="w-5 h-5"
                                    aria-hidden="true"
                                    fill="currentColor"
                                    viewBox="0 0 20 20">
                                <path
                                        d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004
                      14h12a1 1
                      0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0
                      01-3-3h6a3 3 0 01-3 3z"></path>
                            </svg>
                            <!-- Notification badge -->
                            <span
                                    aria-hidden="true"
                                    class="absolute top-0 right-0 inline-block w-3 h-3
                    transform
                    translate-x-1 -translate-y-1 bg-red-600 border-2
                    border-white rounded-full dark:border-gray-800"></span>
                        </button>
                        <template x-if="isNotificationsMenuOpen">
                            <ul
                                    x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    @click.away="closeNotificationsMenu"
                                    @keydown.escape="closeNotificationsMenu"
                                    class="absolute right-0 w-56 p-2 mt-2 space-y-2
                    text-gray-600 bg-white border border-gray-100
                    rounded-md
                    shadow-md dark:text-gray-300 dark:border-gray-700
                    dark:bg-gray-700">
                                <li class="flex">
                                    <a
                                            class="inline-flex items-center justify-between
                        w-full
                        px-2 py-1 text-sm font-semibold transition-colors
                        duration-150 rounded-md hover:bg-gray-100
                        hover:text-gray-800 dark:hover:bg-gray-800
                        dark:hover:text-gray-200"
                                            href="#">
                                        <span>New Messages</span>
                                    </a>
                                </li>
                            </ul>
                        </template>
                    </li>
                    <!-- Profile menu -->
                    <li class="relative">
                        <button
                                class="align-middle rounded-full
                  focus:shadow-outline-purple
                  focus:outline-none"
                                @click="toggleProfileMenu"
                                @keydown.escape="closeProfileMenu"
                                aria-label="Account"
                                aria-haspopup="true">
                            <img
                                    class="object-cover w-8 h-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
                                    alt=""
                                    aria-hidden="true"
                            />
                        </button>
                        <template x-if="isProfileMenuOpen">
                            <ul
                                    x-transition:leave="transition ease-in duration-150"
                                    x-transition:leave-start="opacity-100"
                                    x-transition:leave-end="opacity-0"
                                    @click.away="closeProfileMenu"
                                    @keydown.escape="closeProfileMenu"
                                    class="absolute right-0 w-56 p-2 mt-2 space-y-2
                    text-gray-600 bg-white border border-gray-100
                    rounded-md
                    shadow-md dark:border-gray-700 dark:text-gray-300
                    dark:bg-gray-700"
                                    aria-label="submenu">
                                <li class="flex">
                                    <a
                                            class="inline-flex items-center w-full px-2 py-1
                        text-sm
                        font-semibold transition-colors duration-150
                        rounded-md
                        hover:bg-gray-100 hover:text-gray-800
                        dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                            href="#">
                                        <svg
                                                class="w-4 h-4 mr-3"
                                                aria-hidden="true"
                                                fill="none"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor">
                                            <path
                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0
                            00-7
                            7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a
                                            class="inline-flex items-center w-full px-2 py-1
                        text-sm
                        font-semibold transition-colors duration-150
                        rounded-md
                        hover:bg-gray-100 hover:text-gray-800
                        dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                            href="#">
                                        <svg
                                                class="w-4 h-4 mr-3"
                                                aria-hidden="true"
                                                fill="none"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor">
                                            <path
                                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35
                            0a1.724
                            1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37
                            2.37a1.724 1.724 0 001.065 2.572c1.756.426
                            1.756
                            2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94
                            1.543-.826 3.31-2.37 2.37a1.724 1.724 0
                            00-2.572
                            1.065c-.426 1.756-2.924 1.756-3.35 0a1.724
                            1.724 0
                            00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724
                            1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924
                            0-3.35a1.724 1.724 0
                            001.066-2.573c-.94-1.543.826-3.31
                            2.37-2.37.996.608
                            2.296.07 2.572-1.065z"></path>
                                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li class="flex">
                                    <a
                                            class="inline-flex items-center w-full px-2 py-1
                        text-sm
                        font-semibold transition-colors duration-150
                        rounded-md
                        hover:bg-gray-100 hover:text-gray-800
                        dark:hover:bg-gray-800 dark:hover:text-gray-200"
                                            href="#">
                                        <svg
                                                class="w-4 h-4 mr-3"
                                                aria-hidden="true"
                                                fill="none"
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor">
                                            <path
                                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0
                            01-3
                            3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013
                            3v1"></path>
                                        </svg>
                                        <span>Log out</span>
                                    </a>
                                </li>
                            </ul>
                        </template>
                    </li>
                </ul>
            </div>
        </header>
        <main class="h-full pb-16 overflow-y-auto">
            <div class="container grid px-6 mx-auto">
                <h2
                        class="block my-6 text-2xl font-semibold text-gray-700
              dark:text-gray-200">
                    Client
                </h2>
                <div class="flex flex-wrap -mx-3 mb-2 float-right">
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
                        <div class="flex items-center" type="button"
                             data-modal-toggle="top-right-modal">
                            <span>Send Offer</span>
                        </div>
                    </a>

                    <!--Top Right POP UP -->
                    <div id="top-right-modal" data-modal-placement="top-right"
                         tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden
                fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal
                md:h-full">
                        <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow
                    dark:bg-gray-700">
                                <!-- Modal header -->
                                <div class="flex justify-between items-center p-5 rounded-t
                      border-b dark:border-gray-600">
                                    <h3 class="text-xl font-medium text-gray-900
                        dark:text-white">
                                        Send Offer
                                    </h3>
                                    <button type="button" class="text-gray-400 bg-transparent
                        hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm
                        p-1.5 ml-auto inline-flex items-center
                        dark:hover:bg-gray-600 dark:hover:text-white"
                                            data-modal-toggle="top-right-modal">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20
                          20" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                    fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414
                            0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414
                            10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293
                            4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1
                            0 010-1.414z" clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    <div class="flex">
                                        <div class="mb-3 xl:w-96">
                                            <label for="exampleFormControlTextarea1"
                                                   class="form-label inline-block mb-2 text-gray-700">
                                                Write Message</label>
                                            <textarea
                                                    class="
                              form-control
                              block
                              w-full
                              px-4
                              py-1.5
                              text-base
                              font-normal
                              text-gray-700
                              bg-white bg-clip-padding
                              border border-solid border-gray-300
                              rounded
                              transition
                              ease-in-out
                              m-0
                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                            "
                                                    id="exampleFormControlTextarea1"
                                                    rows="3"
                                                    placeholder="Your message"
                                            ></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-6 space-x-2 rounded-b
                      border-t border-gray-200 dark:border-gray-600">
                                    <button data-modal-toggle="top-right-modal" type="button"
                                            class="text-white bg-blue-700 hover:bg-blue-800
                        focus:ring-4 focus:outline-none focus:ring-blue-300
                        font-medium rounded-lg text-sm px-5 py-2.5 text-center
                        dark:bg-blue-600 dark:hover:bg-blue-700
                        dark:focus:ring-blue-800">Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full overflow-hidden rounded-lg shadow-xs">
                    <div class="w-full overflow-x-auto">
                        <table class="w-full whitespace-no-wrap">
                            <thead>
                            <tr
                                    class="text-xs font-semibold tracking-wide text-left
                      text-gray-500 uppercase border-b dark:border-gray-700
                      bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">ID</th>
                                <th class="px-4 py-3">Client</th>
                                <th class="px-4 py-3">Email</th>
                                <th class="px-4 py-3">Mobile</th>
                                <th class="px-4 py-3">Actions</th>
                            </tr>
                            </thead>
                            <tbody
                                    class="bg-white divide-y dark:divide-gray-700
                    dark:bg-gray-800">
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 text-sm">
                                    #2
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">

                                        <!-- Avatar with inset shadow -->

                                        <div
                                                class="relative hidden w-8 h-8 mr-3 rounded-full
                            md:block">

                                            <img
                                                    class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                    alt=""
                                                    loading="lazy"
                                            />
                                            <div
                                                    class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <p class="font-semibold">Hans Burger</p>

                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    HansBatgur@gmail.com
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    7568487852
                                </td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm">
                                        <button
                                                class="flex items-center justify-between px-2 py-2
                            text-sm font-medium leading-5 text-purple-600
                            rounded-lg dark:text-gray-400 focus:outline-none
                            focus:shadow-outline-gray"
                                                aria-label="Delete">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5
                              h-5" fill="currentColor" viewBox="0 0 512 512">
                                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                        d="M511.6 36.86l-64 415.1c-1.5 9.734-7.375
                                18.22-15.97 23.05c-4.844 2.719-10.27 4.097-15.68
                                4.097c-4.188
                                0-8.319-.8154-12.29-2.472l-122.6-51.1l-50.86
                                76.29C226.3 508.5 219.8 512 212.8 512C201.3 512
                                192 502.7 192 491.2v-96.18c0-7.115 2.372-14.03
                                6.742-19.64L416 96l-293.7 264.3L19.69
                                317.5C8.438 312.8 .8125 302.2 .0625
                                289.1s5.469-23.72
                                16.06-29.77l448-255.1c10.69-6.109 23.88-5.547 34
                                1.406S513.5 24.72 511.6 36.86z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
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
                        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
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
                                      d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293
                                3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0
                                010-1.414l4-4a1 1 0 011.414 0z"
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
                                      d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293
                                6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4
                                4a1 1 0 01-1.414 0z"
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
    </div>
</div>

<script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>
</body>
</html>
