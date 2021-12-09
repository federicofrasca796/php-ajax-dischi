<div class="container">

    <div class="row">
        <div class="col" v-for="disc in discs">
            <div class="song_card">
                <div class="song_thumb">
                    <img :src="disc.poster" alt="album cover" />
                </div>

                <div class="song_info">
                    <h3 class="song_title">{{ disc.title }}</h3>
                    <div class="song_author">{{ disc.author }}</div>
                    <div class="song_date">{{ disc.year }}</div>
                </div>
            </div>
        </div>
    </div>
</div>