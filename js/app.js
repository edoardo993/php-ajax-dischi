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

        axios.get('http://localhost:8888/php-ajax-dischi/app/server.php')
        .then((resp)=>{
            this.discs=resp.data;
            console.log(this.discs);

            this.discs.forEach((element)=>{
                if(!this.genres.includes(element.genre)){
                    this.genres.push(element.genre)
                }
            })
        })
    },
    methods: {
        genreSelection: function(){
            axios.get('http://localhost:8888/php-ajax-dischi/app/server.php?genre=' + this.selected)
            .then((resp)=>{
                this.discs=resp.data;
                console.log(this.discs);
            })
        }
    }
});
Vue.config.devtools=true;