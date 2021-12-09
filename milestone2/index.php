<?php
require __DIR__ . '/layouts/head.php'
?>


<body>
    <div id="app">
        <header id="site_header">
            <img src="./assets/Spotify_logo_without_text.svg" alt="spotify logo" height="60%" />
        </header>

        <main id="site_main">
            <?php require __DIR__ . '/layouts/main.php' ?>
        </main>
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>