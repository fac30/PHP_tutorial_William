<!DOCTYPE html>
<html>
    <?php require("./views/partials/head.php") ?>
    <body>
        <div class="min-h-full">
            <?php require('./views/partials/nav.php'); ?>
            <?php require('./views/partials/banner.php'); ?>
            <main>
                <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    <a href="/notes" class="text-blue-500 underline">Go Back</a>
                    <br>
                    <?= $note['body'] ?>
                </div>
            </main>
        </div>
    </body>
</html>