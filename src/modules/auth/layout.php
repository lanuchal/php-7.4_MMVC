<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>login</title>

    <?php require_once  ROOT_PATH . "/common/headder.php" ?>
</head>

<body>

    <!-- ตัวโหลดหน้าจอ -->
    <div class="screen_loader animate__animated fixed inset-0 z-[60] grid place-content-center bg-[#fafafa] dark:bg-[#060818]">
        <i class="bx bx-loader bx-spin bx-lg" style="color: #4361ee;"></i>
    </div>

    <div class="fixed bottom-6 right-6 z-50" x-data="scrollToTop">
        <template x-if="showTopButton">
            <button type="button" class="btn btn-outline-primary animate-pulse rounded-full p-2" @click="goToTop">
                <i class="bx bx-chevron-up bx-sm"></i>
            </button>
        </template>
    </div>


    <div class="main-container min-h-screen text-black dark:text-white-dark">
        <div x-data="auth">
            <div class="absolute inset-0">
                <img src="/assets/images/bg/bg111.jpg" alt="ภาพพื้นหลัง" class="h-full w-full object-cover" />
            </div>

            <?= $content ?? '' ?>

        </div>
    </div>


    <?php require_once  ROOT_PATH . "/common/script.php" ?>
</body>

</html>