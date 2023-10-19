<!-- Sidebar -->
<aside x-data="{sidebar : true}" id="sidebar" x-show="sidebar"
    @open-sidebar.window="if ($event.detail.id == 1) sidebar = !sidebar"
    class="hiddenSidebarSmallSize flex flex-col w-60 md:w-72 py-4 h-[calc(100vh_-_4rem)] shadow fixed md:sticky top-16 bg-white dark:bg-[#2d333b] space-y-3">
    <!-- Sidebar items -->
    <section class="overflow-y-auto h-[calc(100%_-_2.5rem)]">
        <nav class="space-y-1 text-gray-600 dark:text-gray-400">

            <a href="<?= url('admin/dashboard.php') ?>"
                class="flex items-center p-2 dark:hover:text-purple-300 hover:text-purple-500 space-x-4 space-x-reverse active-single-sidebar-item"
                :class="isActiveMenu('admin') ? 'active-sidebar-item' : ''">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mr-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <span>داشبورد</span>
            </a>

            <section class="p-2" x-data="{open : false }" :class="open ? 'active-sidebar-menu' : ''" x-cloak>
                <section class="flex flex-items  space-x-4 space-x-reverse">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mr-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 7.5h1.5m-1.5 3h1.5m-7.5 3h7.5m-7.5 3h7.5m3-9h3.375c.621 0 1.125.504 1.125 1.125V18a2.25 2.25 0 01-2.25 2.25M16.5 7.5V18a2.25 2.25 0 002.25 2.25M16.5 7.5V4.875c0-.621-.504-1.125-1.125-1.125H4.125C3.504 3.75 3 4.254 3 4.875V18a2.25 2.25 0 002.25 2.25h13.5M6 7.5h3v3H6v-3z" />
                    </svg>
                    <button @click="open = !open" class="flex w-full justify-between items-center">
                        <span>اخبار</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" :class="open ? 'rotate-[270deg]' : ''"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </section>

                <!-- children items -->
                <section x-show="open" x-transition x-cloak>
                    <section class="flex items-center space-x-4 text-[14px]  text-c space-x-reverse mt-2"
                        :class="isActiveMenu('admin/content/articles') ? 'active-sidebar-item' : ''">
                        <a href="<?= url('admin/news/index.php') ?>"
                            class="flex space-x-2 space-x-reverse text-gray-600 dark:text-gray-400 dark:hover:text-purple-400 hover:text-purple-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 mr-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>
                            <span class="flex-auto">
                                همه اخبار
                            </span>
                        </a>
                    </section>
                    <section class="flex items-center space-x-4 text-[14px]  text-c space-x-reverse mt-2"
                        :class="isActiveMenu('admin/content/articles') ? 'active-sidebar-item' : ''">
                        <a href="<?= url('admin/news/create.php') ?>"
                            class="flex space-x-2 space-x-reverse text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 mr-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>
                            <span class="flex-auto">
                                ایجاد خبر جدید
                            </span>
                        </a>
                    </section>
                </section>
            </section>

            <section class="p-2" x-data="{open : false }" :class="open ? 'active-sidebar-menu' : ''" x-cloak>
                <section class="flex flex-items  space-x-4 space-x-reverse">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mr-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
                    </svg>

                    <button @click="open = !open" class="flex w-full justify-between items-center">
                        <span>دسته بندی ها</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-4"
                            :class="open ? 'rotate-[270deg]' : ''" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </section>

                <!-- children items -->
                <section x-show="open" x-transition x-cloak>
                    <section class="flex items-center space-x-4 text-[14px]  text-c space-x-reverse mt-2"
                        :class="isActiveMenu('admin/content/articles') ? 'active-sidebar-item' : ''">
                        <a href="<?= url('admin/category/index.php') ?>"
                            class="flex space-x-2 space-x-reverse text-gray-600 dark:text-gray-400 dark:hover:text-purple-400 hover:text-purple-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 mr-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>
                            <span class="flex-auto">
                                همه دسته بندی ها
                            </span>
                        </a>
                    </section>
                    <section class="flex items-center space-x-4 text-[14px]  text-c space-x-reverse mt-2"
                        :class="isActiveMenu('admin/content/articles') ? 'active-sidebar-item' : ''">
                        <a href="<?= url('admin/category/create.php') ?>"
                            class="flex space-x-2 space-x-reverse text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 mr-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>
                            <span class="flex-auto">
                                ایجاد دسته بندی جدید
                            </span>
                        </a>
                    </section>
                </section>
            </section>

            <section class="p-2" x-data="{open : false }" :class="open ? 'active-sidebar-menu' : ''" x-cloak>
                <section class="flex flex-items  space-x-4 space-x-reverse">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 mr-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z">
                        </path>
                    </svg>
                    <button @click="open = !open" class="flex w-full justify-between items-center">
                        <span>کاربران</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" :class="open ? 'rotate-[270deg]' : ''"
                            viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </section>

                <!-- children items -->
                <section x-show="open" x-transition x-cloak>
                    <section class="flex items-center space-x-4 text-[14px]  text-c space-x-reverse mt-2"
                        :class="isActiveMenu('admin/content/articles') ? 'active-sidebar-item' : ''">
                        <a href="<?= url('admin/user/index.php') ?>"
                            class="flex space-x-2 space-x-reverse text-gray-600 dark:text-gray-400 dark:hover:text-purple-400 hover:text-purple-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 mr-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>
                            <span class="flex-auto">
                                همه کاربران
                            </span>
                        </a>
                    </section>
                    <section class="flex items-center space-x-4 text-[14px]  text-c space-x-reverse mt-2"
                        :class="isActiveMenu('admin/content/articles') ? 'active-sidebar-item' : ''">
                        <a href="<?= url('admin/user/create.php') ?>"
                            class="flex space-x-2 space-x-reverse text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 mr-4">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M18 12H6" />
                            </svg>
                            <span class="flex-auto">
                                ایجاد کاربر جدید
                            </span>
                        </a>
                    </section>
                </section>
            </section>
            <a href="#users"
                class="flex items-center p-2 dark:hover:text-purple-300 hover:text-purple-500 space-x-4 space-x-reverse hover:"
                :class="isActiveMenu('admin') ? 'active-sidebar-item' : ''">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-5 h-5 mr-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                </svg>

                <span>نظرات</span>
            </a>
        </nav>
    </section>

    <!-- final sidebar items -->
    <section
        class="absolute bottom-0 w-full bg-white dark:bg-[#2d333b] text-gray-600 dark:text-gray-400 border-t border-gray-400 dark:border-gray-600">
        <section class="flex justify-between px-4 items-center h-10 border-lime-800">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z" />
                </svg>
            </span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                </svg>
            </span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                </svg>
            </span>
        </section>
    </section>
    <!-- final sidebar items -->

</aside>