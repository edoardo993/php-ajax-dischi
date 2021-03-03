new Vue({
    el: '#root',
    data: {

        // array di oggetti dischi
        discs: [],

        // selected impostata 'vuota' per il v-model HTML
        selected: '',

        // array dei generi musicali generato dinamicamente
        genres: []
    },
    mounted(){

        // creo una costante con valore 'this'
        // per poter richiamare i data nel mounted
        const self=this;
        axios.get('http://localhost:8888/php-ajax-dischi/app/server.php')
        .then(function(resp){
            self.discs=resp.data;
            console.log(self.discs);

            self.discs.forEach((element)=>{
                if(!self.genres.includes(element.genre)){
                    self.genres.push(element.genre)
                }
            })
        })
    },
    methods: {
        genreSelection: function(){

            // creo una costante con valore 'this'
            // per poter richiamare i data nel mounted
            const self=this;
            axios.get('http://localhost:8888/php-ajax-dischi/app/server.php?genre=' + self.selected)
            .then(function(resp){
                self.discs=resp.data;
                console.log(self.discs)
            })
        }
    }
});
Vue.config.devtools=true;