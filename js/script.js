const App = new Vue(
    {
    el: '#app',
    data: {
        cards: []
    },
    created() {
        axios.get('http://localhost:8888/php-ajax-dischi/server/controller-api.php').then((result) => {
        this.cards = result.data.results;
        }).catch((error) => { console.log(error); });
    }
    }
);
