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

                <section class="xs:flex justify-between items-center rounded my-3 py-2 space-x-y-4">
                    <section class="text-center xs:text-right space-y-2">
                        <div class="text-lg md:text-xl font-bold text-gray-600 dark:text-gray-400">
                            دسته بندی ها
                        </div>
                        <div class="text-xs md:text-sm text-gray-400 dark:text-gray-500">
                            لیست همه دسته بندی ها
                        </div>
                    </section>
                    <section class="flex justify-around">
                        <input type="text"
                            class="bg-gray-100 mx-2 focus:ring-gray-500 focus:border-gray-600 dark:focus:border-gray-400  form-control"
                            placeholder="جستجو ">
                        <a href="<?= url('admin/category/create.php') ?>"
                            class="btn btn-primary rounded flex space-x-1 space-x-reverse">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>جدید</span>
                        </a>
                    </section>
                </section>
                <?php if (isset($_SESSION['success'])) { ?>
                    <div class="bg-green-100 border-t-4 border-green-600 rounded-b text-teal-900 px-4 py-3 shadow-md"
                        role="alert">
                        <div class="flex items-center">
                            <div class="py-1"><svg class="fill-current h-6 w-6 text-teal-500" style="margin-left: .5rem"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path
                                        d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                                </svg></div>
                            <div>
                                <p class="font-bold">
                                    <?php
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success']);
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <section class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-[#22272E]">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-xs text-right font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    #
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs text-center font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    عنوان</th>

                                <th scope="col"
                                    class="px-6 py-3 text-xs text-center font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    تاریخ ایجاد</th>
                                <th scope="col"
                                    class="px-6 py-3 text-xs text-center font-bold text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                    عملیات</th>
                            </tr>
                        </thead>
                        <tbody
                            class="bg-white divide-y divide-gray-200 dark:bg-[#22272E] text-gray-600 dark:divide-gray-700 dark:text-gray-500">
                            <?php
                            require_once dirname(dirname(__DIR__)) . "/includes/db-connection.php";

                            $query = "SELECT * FROM categories";
                            $statement = $conn->prepare($query);
                            $statement->execute();

                            $results = $statement->fetchAll();
                            
                            foreach ($results as $result) {
                                ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-right">
                                        <?= $result['id'] ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <?= $result['name'] ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <?= $result['created_at'] ?>
                                    </td>
                                    <td class="flex space-x-2 space-x-reverse justify-center px-6 py-4 whitespace-nowrap">
                                        <a href="<?= url("admin/category/edit.php?id={$result['id']}") ?>"
                                            class="bg-opacity-30 bg-blue-700 p-1 rounded">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor"
                                                class="w-6 h-6 text-blue-500 dark:text-blue-300">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>

                                        <form action="<?= url('admin/category/destroy.php') ?>" method="post">
                                            <input type="hidden" name="id" value="<?= $result['id'] ?>">
                                            <button type="submit" class="bg-opacity-30 bg-red-700 p-1 rounded">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor"
                                                    class="w-6 h-6 text-red-500 dark:text-red-300">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </section>

            </section>
        </main>
        <!-- End Content -->
    </section>

    <!-- scripts -->

    <script src="<?= asset('assets/admin/js/script.js') ?>"></script>
</body>

</html>