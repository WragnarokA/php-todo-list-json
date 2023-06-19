<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-VUE</title>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">
</head>


<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="clo-12 d-flex justify-content-center">

                    <div class="col-5">
                        <h1 class="mt-3 text-secondary">Todo List</h1>

                        <ul v-if="todoList.length" class="list-group">
                            <li v-for="(item, i) in todoList" class="list-group-item d-flex justify-content-between align-items-start">
                                <span @click="toggleStatus(i)" :class="getTextClass(item)">{{ item.text }}</span>
                                <span @click="deleteItem(i)" class="badge bg-danger "><i class="bi bi-trash3-fill text-light"></i></span>

                            </li>

                        </ul>

                        <div class="input-group mt-3 ">
                            <input v-model="newTask" @Keyup.enter="addNewTask" type="text" class="form-control " placeholder="Inserice promemoria">
                            <button @click="addNewTask" class="btn btn-outline-warning">Aggiungi</button>
                        </div>
                    </div>










                </div>
            </div>
        </div>



    </div>



    <script src="./main.js"></script>
</body>

</html>