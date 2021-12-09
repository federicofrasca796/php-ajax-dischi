<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Dischi</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div id="app">
        <header id="site_header">
            <img src="./assets/Spotify_logo_without_text.svg" alt="spotify logo" height="60%" />
        </header>

        <main id="site_main">
            <div class="container">

                <div class="row">
                    <!-- VUE IMPLEMENTATION (MILESTONE2) -->
                    <div class="col" v-for="disc in discs">
                        <div class="song_card">
                            <div class="song_thumb">
                                <img :src="disc.poster" alt="album cover" />
                            </div>

                            <div class="song_info">
                                <h2 class="song_title">{{ songTitle }}</h2>
                                <div class="song_author">{{ songAuthor }}</div>
                                <div class="song_date">{{ songDate }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="./assets/js/app.js"></script>
</body>

</html>