const { createApp } = Vue;
createApp({
    data() {
        return {
            apiUrl: "api.php",
            todoList: [],
            newTask: "",


        }
    },
    methods: {
        getDati() {
            axios.get(this.apiUrl).then((response) => {
                console.log("Dati ricevuti", response.data);
                this.todoList = response.data;
            });
        },

        addNewTask() {
            this.todoList.push(this.newTask);
        }
    },


    mounted() {
        this.getDati();
    }



}).mount('#app')


