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
        getTextClass(item) {
            let classObj = { 'text-decoration-line-through': item.done };
            return classObj;

        },
        getDati() {
            axios.get(this.apiUrl).then((response) => {
                console.log("Dati ricevuti", response.data);
                this.todoList = response.data;
            });
        },

        toggleStatus(i) {
            const data = { toggleIndex: i };
            this.sendData(data);
        },

        deleteItem(i) {
            const data = { deleteIndex: i };
            this.sendData(data);
        },
        addNewTask() {
            const data = { newTask: this.newTask };
            this.sendData(data);
        },

        deleteAllTask() {
            const data = { deleteAll: true };
            this.sendData(data);

        },


        sendData(data) {
            axios.post(this.apiUrl, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                console.log("Dati ricevuti", response.data);
                this.todoList = response.data;
                this.newTask = "";
            });
        }




    },


    mounted() {
        this.getDati();
    }



}).mount('#app')


