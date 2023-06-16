<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-VUE</title>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>


<body>
    <div id="app">
        <div class="container">
            <div class="row">
                <div class="clo-12">
                    <h1 class="mt-5">Todo List</h1>

                    <ul>
                        <li v-for="(item, i) in treno"> {{ item }} </li>

                    </ul>


                    <button @click="getDati">Mostra lista</button>
                </div>
            </div>
        </div>



    </div>



    <script src="./main.js"></script>
</body>

</html>