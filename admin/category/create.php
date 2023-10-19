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

        <!-- Content -->
        <main class="w-full min-h-screen bg-gray-50 dark:bg-[#22272E]">
            <section class="flex flex-col mx-4">

                <section class="xs:flex justify-between items-center rounded my-3 py-2">
                    <section class="text-center xs:text-right space-y-2">
                        <div class="text-lg md:text-xl font-bold text-gray-600 dark:text-gray-400">
                            دسته بندی جدید
                        </div>
                        <div class="text-xs md:text-sm text-gray-400 dark:text-gray-500">شما در حال ایجاد دسته بندی جدید
                            هستید</div>
                    </section>
                    <section class="flex justify-around">
                        <a href="<?= url('admin/category/index.php') ?>" class="btn btn-red rounded flex space-x-1 space-x-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>انصراف</span>
                        </a>
                    </section>
                </section>
                <?php if(isset($_SESSION['error'])) { ?>
                    <div class="bg-red-500 border-t-4 border-green-600 rounded-b text-teal-900 px-4 py-3 shadow-md"
                        role="alert">
                        <div class="flex items-center">
                            <div class="py-1"><svg class="fill-current h-6 w-6" style="margin-left: .5rem"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path
                                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                                </svg></div>
                            <div>
                                <p class="font-bold">
                                    <?php 
                                    echo $_SESSION['error'];
                                    unset($_SESSION['error']); 
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                <section class="bg-white dark:bg-[#22272E]  p-4">
                    <form action="<?= url('admin/category/store.php') ?>" method="post">
                        <section class="flex flex-col space-y-6">
                            <section class="grid grid-cols-6 gap-6">
                                <section class="col-span-6 sm:col-span-3">
                                    <label class="mb-2 text-sm font-bold text-gray-700 dark:text-gray-400">عنوان
                                        دسته</label>
                                    <input type="text" name="name" class="form-control" placeholder="عنوان ">
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