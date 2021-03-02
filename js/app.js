new Vue({
    el: '#root',
    data: {

        // array di oggetti dischi
        discs: []
    },
    mounted(){

        // creo una costante con valore 'this'
        // per poter richiamare i data nel mounted
        const self=this;
        axios.get('Access-Control-Allow-Origin:http://localhost:8888/php-ajax-dischi/app/server.php')
        .then(function(resp){
            self.discs=resp.data;
        });
        console.log(self.discs)
    }
});
Vue.config.devtools=true;