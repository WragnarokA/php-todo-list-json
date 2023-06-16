const { createApp } = Vue;
createApp({
    data() {
        return {
            apiUrl: "api.php",
            treno: [],


        }
    },
    methods: {
        getDati() {
            axios.get(this.apiUrl).then((response) => {
                console.log("Dati ricevuti", response.data);
                this.treno = response.data;
            });

        },
    },


    mounted() {
        this.getDati();
        console.log("ciao");
        console.log("treno", this.treno);


    }

}).mount('#app')


