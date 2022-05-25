const app= new Vue({
    el:'#app',
    data:{
        albums:[],
        apiPath:'./server.php',
        genereSelezionato:'',
        generi:[],
    },
    methods:{
        cambiaGenere(){
            this.axCall(this.genereSelezionato);
        },
        axCall(genere=null){
            path = this.apiPath;
            if(genere){
                path= `${this.apiPath}?genere=${genere}`
            }
            axios.get(path).then((res)=>{
                this.albums=res.data;
                if(this.generi < 1){
                    this.albums.forEach((album)=>{
                        if(!this.generi.includes(album.genre)){
                            this.generi.push(album.genre)
                        }
                    })
                }
            })
        }
    },
    mounted(){
        this.axCall();
    }
})