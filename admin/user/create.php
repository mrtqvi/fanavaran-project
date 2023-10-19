<?php

session_start();

require_once __DIR__ . "/../../includes/helpers.php";
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<?php
include __DIR__ . "./../layouts/head.php";
?>

<body class="font-shabnam">
    <!-- all contents -->

    <?php
    include __DIR__ . "./../layouts/header.php";
    ?>

    <section class="flex">

        <?php
        include __DIR__ . "./../layouts/aside.php";
        ?>

<main class="w-full min-h-screen bg-gray-50 dark:bg-[#1C2128]">
            <section class="mx-4">
                <section class="xs:flex justify-between items-center rounded my-3 py-2">
                    <section class="text-center xs:text-right space-y-2">
                        <div class="text-lg md:text-xl font-bold text-gray-600 dark:text-gray-400">
                            کاربر جدید
                        </div>
                        <div class="text-xs md:text-sm text-gray-400 dark:text-gray-500">شما در حال ایجاد کاربر جدید
                            هستید</div>
                    </section>
                    <section class="flex justify-around">
                        <a href="<?= url('admin/user/index.php') ?>" class="btn btn-red rounded flex space-x-1 space-x-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>انصراف</span>
                        </a>
                    </section>
                </section>
                <section class="bg-white dark:bg-[#22272E]  p-4">
                    <form action="" method="post">
                        <section class="flex flex-col space-y-6">
                            <section class="grid grid-cols-6 gap-6">
                                <section class="col-span-6 sm:col-span-3">
                                    <label class="mb-2 text-sm font-bold text-gray-700 dark:text-gray-400">
                                        نام کاربر</label>
                                    <input type="text" name="title" class="form-control" placeholder=" ">
                                </section>
                                <section class="col-span-6 sm:col-span-3">
                                    <label class="mb-2 text-sm font-bold text-gray-700 dark:text-gray-400">
                                        نام خانوادگی کاربر</label>
                                    <input type="text" name="title" class="form-control" placeholder=" ">
                                </section>
                                <section class="col-span-6 sm:col-span-3">
                                    <label class="mb-2 text-sm font-bold text-gray-700 dark:text-gray-400">
                                        ایمیل</label>
                                    <input type="email" name="title" class="form-control" placeholder=" ">
                                </section>
                                <section class="col-span-6 sm:col-span-3">
                                    <label for="large-input"
                                        class="mb-2 text-sm font-bold text-gray-700 dark:text-gray-400">
                                        نوع کاربر
                                    </label>
                                    <select type="text" name="" id="large-input" class="form-control">
                                        <option value="">نوع کاربر را انتخاب کنید</option>
                                        <option value="">کاربر معمولی</option>
                                        <option value="">کاربر ادمین</option>
                                    </select>
                                </section>
                                <section class="col-span-6 sm:col-span-3">
                                    <label class="mb-2 text-sm font-bold text-gray-700 dark:text-gray-400">
                                        کلمه عبور</label>
                                    <input type="text" name="title" class="form-control" placeholder=" ">
                                </section>
                                <section class="col-span-6 sm:col-span-3">
                                    <label class="mb-2 text-sm font-bold text-gray-700 dark:text-gray-400">
                                     تکرار کلمه عبور</label>
                                    <input type="text" name="title" class="form-control" placeholder=" ">
                                </section>
                                <section class="col-span-6 sm:col-span-3">
                                    <label for="large-input"
                                        class="mb-2 text-sm font-bold text-gray-700 dark:text-gray-400">
                                        کاربر فعال باشد ؟
                                        </label>
                                    <section class="mt-2 space-x-3 space-x-reverse">
                                        <label for="">
                                            بله
                                            <input type="radio" name="is_publish" value="0" value="">
                                        </label>

                                        <label for="">
                                            خیر
                                            <input type="radio" name="is_publish" value="1" value="">
                                        </label>
                                    </section>
                                </section>

                            </section>
                            <section class="border-gray-500">
                                <button type="submit" class="btn btn-lg btn-green">ذخیره</button>
                            </section>
                        </section>
                    </form>
                </section>
            </section>
        </main>
        <!-- End Content -->
    </section>

    <!-- scripts -->

    <script src="<?= asset('assets/admin/js/script.js') ?>"></script>
</body>

</html>