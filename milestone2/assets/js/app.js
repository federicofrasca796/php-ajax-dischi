const app = new Vue({
    el: '#app',
    data: {
        discs: null,
    },
    mounted() {
        axios
            .get('./api/discs.php')
            .then(r => {
                console.log(r);
                this.discs = r.data;
            }).catch(e => {
                console.error(e);
            });
    }
})