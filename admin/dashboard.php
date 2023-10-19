<?php
    require_once __DIR__ . "/../includes/helpers.php";
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">

<?php
    include __DIR__ . "./layouts/head.php";
?>

<body class="font-shabnam">
    <!-- all contents -->
    
    <?php 
        include __DIR__ . "./layouts/header.php";
    ?>

    <section class="flex">
        
        <?php 
            include __DIR__ . "./layouts/aside.php";
        ?>

        <!-- Content -->
        <main class="w-full min-h-screen bg-gray-50 dark:bg-[#22272E]">
            <section class="flex flex-col mx-4">

            </section>
        </main>
        <!-- End Content -->
    </section>

    <!-- scripts -->

    <script src="<?= asset('assets/admin/js/script.js') ?>"></script>
</body>

</html>