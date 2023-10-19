<!-- header content -->
<header
        class="sticky top-0 w-full z-20 pb-[1px] bg-gradient-to-r from-green-500 via-purple-500 to-pink-500">
        <section class="flex items-center h-16 bg-white dark:bg-[#2D333B] text-gray-600 dark:text-gray-400">
            <!-- header left item -->
            <section class="flex w-full sm:w-auto justify-between items-center">
                <!-- Logo -->
                <section
                    class="order-2 sm:order-none relative p-2 sm:w-48 lg:w-60 flex justify-center items-center shadow-none">
                    <span>
                        <a href="#" class="dark:text-green-400 text-green-600 border-b border-b-purple-400 ">
                            Fanavaran Tech
                        </a>
                    </span>
                </section>
                <section
                    class="relative flex mr-3 order-1 sm:order-none space-x-2 sm:space-x-4 space-x-reverse sm:space-x-reverse"
                    x-data="{search : false}" x-transition>
                    <button class="p-1 rounded" x-data="{id: 1}" @click="let sidebar = document.querySelector('#sidebar')
                if (window.innerWidth > 768){
                    $dispatch('open-sidebar',{id})   
                }
                else {     
                    sidebar.classList.contains('hiddenSidebarSmallSize') ? sidebar.classList.remove('hiddenSidebarSmallSize') : sidebar.classList.add('hiddenSidebarSmallSize') 
                    $dispatch('!open-sidebar' , {id}) 
                }  
                ">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>

                    </button>
                    <section class="relative hiddenSmallSize" x-transition>
                        <input type="text"
                            class="p-1.5 bg-gray-100 dark:bg-[#22272E] text-gray-700 dark:text-gray-400  focus:ring-0 focus:border-gray-600 dark:focus:border-gray-400 w-full ring-gray-600 rounded-lg"
                            placeholder="جستجو">
                        <button class="absolute top-2.5 left-2" @click="search = false">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </button>
                    </section>
                </section>
                <button class="sm:hidden ml-6 order-3 sm:order-none" x-data="{id: 2}" @click="let menu = document.querySelector('#openMenu')
            menu.classList.contains('hiddenSmallSize') ? menu.classList.remove('hiddenSmallSize') : menu.classList.add('hiddenSmallSize') 
            $dispatch('!open-menu',{id})   
            ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                    </svg>
                </button>
            </section>
            <!-- end header left item -->
            <!-- header right item -->
            <section x-data="{open : true }" id="openMenu" x-show="open"
                @open-menu.window="if ($event.detail.id == 2) open = !open" x-transition
                class="hiddenSmallSize absolute top-16 p-2 bg-white flex-col dark:bg-[#2D333B] sm:bg-none justify-around w-full sm:w-auto sm:static flex items-center mr-auto space-x-4 sm:space-x-6 xs:space-x-reverse space-x-reverse ml-2 xs:ml-8"
                x-cloak>
                <section class="relative block sm:hidden" x-transition>
                    <section class="mb-2">
                        <input type="text"
                            class="p-1.5 bg-gray-100 dark:bg-[#22272E] text-gray-700 dark:text-gray-400  focus:ring-0 focus:border-gray-600 dark:focus:border-gray-400 w-full ring-gray-600 rounded-lg"
                            placeholder="جستجو">
                        <button class="absolute top-2.5 left-2" @click="search = false">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-4 h-4">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </button>
                    </section>
                </section>

                <section class="w-full flex justify-around md:space-x-5 md:space-x-reverse items-center">
                    <span
                        class="cursor-pointer p-1 hover:bg-green-300 hover:bg-opacity-25 dark:hover:bg-opacity-25 hover:text-purple-600 dark:hover:text-green-300 dark:hover:bg-purple-400 rounded">
                        <svg xmlns="http://www.w3.org/2000/svg" id="switch-theme" class="h-6 w-6" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z" />
                        </svg>
                    </span>
                    <!-- notification -->
                    <span
                        class="cursor-pointer relative p-1 hover:bg-purple-300 hover:bg-opacity-25 hover:text-purple-700 dark:hover:text-purple-300 rounded"
                        x-data="{ open : false }">
                        <section @click="open = !open" @click.outside="open = false" class="relative">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                            <span class="p-1 rounded bg-red-500 dark:bg-red-400 absolute top-0 right-0.5"></span>
                        </section>

                        <div x-show="open" x-cloak x-transition
                            class="origin-top-right absolute rounded sm:left-0 mt-6 w-48 xs:w-56  shadow-lg bg-white dark:bg-[#2D333B] ring-1 ring-black dark:ring-gray-700 ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1 max-h-[calc(100vh_-_11rem)] overflow-y-auto" role="none">
                                <a href="#"
                                    class="text-gray-600 dark:text-gray-300 flex items-center space-x-3 space-x-reverse px-4 py-3"
                                    role="menuitem" tabindex="-1" id="menu-item-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-xs">
                                        <span> پیام جدیدی دریافت کردید. </span>
                                    </span>
                                </a>
                            </div>
                            <div class="py-1 max-h-[calc(100vh_-_11rem)] overflow-y-auto" role="none">
                                <a href="#"
                                    class="text-gray-600 dark:text-gray-300 flex items-center space-x-3 space-x-reverse px-4 py-3"
                                    role="menuitem" tabindex="-1" id="menu-item-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-300" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-xs">
                                        <span> گزارش خطای جدید ثبت شد </span>
                                    </span>
                                </a>
                            </div>
                            <div class="py-1 max-h-[calc(100vh_-_11rem)] overflow-y-auto" role="none">
                                <a href="#"
                                    class="text-gray-600 dark:text-gray-300 flex items-center space-x-3 space-x-reverse px-4 py-2"
                                    role="menuitem" tabindex="-1" id="menu-item-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-300" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                    <span class="text-xs">
                                        <span>شارژ پنل شما رو به اتمام است</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </span>
                    <!-- end notification -->
                    <!-- comments -->
                    <span
                        class="cursor-pointer relative p-1 hover:bg-purple-300 hover:bg-opacity-25 hover:text-purple-700 dark:hover:text-purple-300 rounded"
                        x-data="{open : false}">
                        <svg xmlns="http://www.w3.org/2000/svg" @click="open = !open" @click.outside="open = false"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                        </svg>
                        <div x-show="open" x-cloak x-transition
                            class="origin-top-right absolute left-0 rounded mt-6 w-48 xs:w-60  shadow-lg bg-white dark:bg-[#2D333B] ring-1 ring-black dark:ring-gray-600 ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1 max-h-[calc(100vh_-_11rem)] overflow-y-auto" role="none">
                                <a href="#"
                                    class="text-gray-600 dark:text-gray-400 flex items-center space-x-3 space-x-reverse px-4 py-3"
                                    role="menuitem" tabindex="-1" id="menu-item-0">
                                    <img src="../assets/images/user.jpg" alt=""
                                        class="w-10 rounded-full ring-1 ring-gray-400 ">
                                    <section>
                                        <span>
                                            <section class="text-sm font-bold">والتر وایت</section>
                                        </span>
                                        <span class="text-xs">
                                            <span> خیلی سایتتون عالیه ... </span>
                                        </span>
                                    </section>
                                </a>
                                <a href="#"
                                    class="text-gray-600 dark:text-gray-400 flex items-center space-x-3 space-x-reverse px-4 py-3"
                                    role="menuitem" tabindex="-1" id="menu-item-0">
                                    <img src="../assets/images/user1.jpg" alt=""
                                        class="w-10 ring-1 rounded-full ring-gray-400 ">
                                    <section>
                                        <span>
                                            <section class="text-sm font-bold">کیلین مورفی</section>
                                        </span>
                                        <span class="text-xs">
                                            <span> خیلی سایتتون عالیه ... </span>
                                        </span>
                                    </section>
                                </a>
                                <a href="#"
                                    class="text-gray-600 dark:text-gray-400 flex items-center space-x-3 space-x-reverse px-4 py-3"
                                    role="menuitem" tabindex="-1" id="menu-item-0">
                                    <img src="../assets/images/user2.jpg" alt=""
                                        class="w-10 ring-1 rounded-full ring-gray-400 ">
                                    <section>
                                        <span>
                                            <section class="text-sm font-bold">مگی</section>
                                        </span>
                                        <span class="text-xs">
                                            <span> خیلی سایتتون عالیه ... </span>
                                        </span>
                                    </section>
                                </a>
                                <a href="#"
                                    class="text-gray-600 dark:text-gray-400 flex items-center space-x-3 space-x-reverse px-4 py-3"
                                    role="menuitem" tabindex="-1" id="menu-item-0">
                                    <img src="../assets/images/user.jpg" alt=""
                                        class="w-10 ring-1 rounded-full ring-gray-400 ">
                                    <section>
                                        <span>
                                            <section class="text-sm font-bold">والتر وایت</section>
                                        </span>
                                        <span class="text-xs">
                                            <span> خیلی سایتتون عالیه ... </span>
                                        </span>
                                    </section>
                                </a>
                                <a href="#"
                                    class="text-gray-600 dark:text-gray-400 flex items-center space-x-3 space-x-reverse px-4 py-3"
                                    role="menuitem" tabindex="-1" id="menu-item-0">
                                    <img src="../assets/images/user1.jpg" alt=""
                                        class="w-10 ring-1 rounded-full ring-gray-400 ">
                                    <section>
                                        <span>
                                            <section class="text-sm font-bold">کیلین مورفی</section>
                                        </span>
                                        <span class="text-xs">
                                            <span> خیلی سایتتون عالیه ... </span>
                                        </span>
                                    </section>
                                </a>
                                <a href="#"
                                    class="text-gray-600 dark:text-gray-400 flex items-center space-x-3 space-x-reverse px-4 py-3"
                                    role="menuitem" tabindex="-1" id="menu-item-0">
                                    <img src="../assets/images/user2.jpg" alt=""
                                        class="w-10 ring-1 rounded-full ring-gray-400 ">
                                    <section>
                                        <span>
                                            <section class="text-sm font-bold">مگی</section>
                                        </span>
                                        <span class="text-xs">
                                            <span> خیلی سایتتون عالیه ... </span>
                                        </span>
                                    </section>
                                </a>
                                <a href="#"
                                    class="text-gray-600 dark:text-gray-400 flex items-center space-x-3 space-x-reverse px-4 py-3"
                                    role="menuitem" tabindex="-1" id="menu-item-0">
                                    <img src="../assets/images/user2.jpg" alt=""
                                        class="w-10 ring-1 rounded-full ring-gray-400 ">
                                    <section>
                                        <span>
                                            <section class="text-sm font-bold">مگی</section>
                                        </span>
                                        <span class="text-xs">
                                            <span> خیلی سایتتون عالیه ... </span>
                                        </span>
                                    </section>
                                </a>
                                <a href="#"
                                    class="text-gray-600 dark:text-gray-400 flex items-center space-x-3 space-x-reverse px-4 py-3"
                                    role="menuitem" tabindex="-1" id="menu-item-0">
                                    <img src="../assets/images/user.jpg" alt=""
                                        class="w-10 ring-1 rounded-full ring-gray-400 ">
                                    <section>
                                        <span>
                                            <section class="text-sm font-bold">والتر وایت</section>
                                        </span>
                                        <span class="text-xs">
                                            <span> خیلی سایتتون عالیه ... </span>
                                        </span>
                                    </section>
                                </a>
                                <a href="#"
                                    class="text-gray-600 dark:text-gray-400 flex items-center space-x-3 space-x-reverse px-4 py-3"
                                    role="menuitem" tabindex="-1" id="menu-item-0">
                                    <img src="../assets/images/user1.jpg" alt=""
                                        class="w-10 ring-1 rounded-full ring-gray-400 ">
                                    <section>
                                        <span>
                                            <section class="text-sm font-bold">کیلین مورفی</section>
                                        </span>
                                        <span class="text-xs">
                                            <span> خیلی سایتتون عالیه ... </span>
                                        </span>
                                    </section>
                                </a>
                                <a href="#"
                                    class="text-gray-600 dark:text-gray-400 flex items-center space-x-3 space-x-reverse px-4 py-3"
                                    role="menuitem" tabindex="-1" id="menu-item-0">
                                    <img src="../assets/images/user2.jpg" alt=""
                                        class="w-10 ring-1 rounded-full ring-gray-400 ">
                                    <section>
                                        <span>
                                            <section class="text-sm font-bold">مگی</section>
                                        </span>
                                        <span class="text-xs">
                                            <span> خیلی سایتتون عالیه ... </span>
                                        </span>
                                    </section>
                                </a>
                            </div>
                        </div>
                    </span>
                    <!-- end comments -->
                    <!-- profile section -->
                    <span role="button" class="relative" x-data="{open : false}">
                        <section @click="open = !open" @click.outside="open = false"
                            class="flex space-x-2 space-x-reverse relative">
                            <section class="bg-gradient-to-r from-purple-400 to-green-300 rounded-full p-0.5">
                                <img src="<?= asset('assets/admin/images/user.jpg') ?>" alt="" class="w-10 rounded-full ">
                            </section>
                            <span class="p-1 rounded bg-green-400 absolute top-1 -right-1.5"></span>
                            <section class="hidden md:block">
                                <div class="text-sm font-bold">آصفه عباسی</div>
                                <div class="text-xs">مدیر</div>
                            </section>
                        </section>
                        <div x-show="open" x-cloak x-transition
                            class="origin-top-right rounded absolute left-0 mt-4 w-48  shadow-lg bg-white dark:bg-[#2D333B] ring-1 ring-black dark:ring-gray-600 ring-opacity-5 focus:outline-none"
                            role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                            <div class="py-1 " role="none">
                                <a href="#"
                                    class="text-gray-600 dark:text-gray-400 flex space-x-3 items-center space-x-reverse px-4 py-2 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                    </svg>
                                    <span>تنظیمات حساب</span>
                                </a>
                                <a href="#"
                                    class="text-gray-600 dark:text-gray-400 flex space-x-3 items-center space-x-reverse px-4 py-2 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                                    </svg>
                                    <span>تغییر کلمه عبور</span>
                                </a>
                                <a href="#"
                                    class="text-gray-600 dark:text-gray-400 flex space-x-3 items-center space-x-reverse px-4 py-2 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                    </svg>
                                    <span>قفل</span>
                                </a>
                                <form method="POST" action="#" role="none">
                                    <button type="submit"
                                        class="text-gray-600 dark:text-gray-400 flex space-x-3 items-center space-x-reverse w-full px-4 py-2 text-right text-sm"
                                        role="menuitem" tabindex="-1" id="menu-item-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                        </svg>
                                        <span>خروج</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </span>
                    <!-- end profile section -->
                </section>
            </section>
            <!-- end header right item -->
        </section>
    </header>
    <!-- end header content -->