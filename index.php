
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">

    <title>TODO-LIST_JSON</title>

    <!-- Third party libraries -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Custom css
    <link rel="stylesheet" href="css/style.css"> -->
</head>

<body class="bg-dark text-white">
    <div id="app">
        <main class="container py-5 pb-5">
            <h1 class="mb-5 title text-center">TODO_list</h1>

            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="card text-dark ps-3 pe-3">
                        <div v-for="newTask in tasks" class="task_item d-flex justify-content-between mt-3 mb-3 align-items-center">
                            <div class="name_task">{{newTask.newtask}}</div>
                            <div class="delete_button">
                                <button type="button" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-5">
                <div class="col-5">
                    <form method="POST" @submit.prevent="onFormSubmit" class="row justify-content-center">
                        <div class="col-auto">
                            <label  class="visually-hidden">Inserisci Task</label>
                            <input type="name" class="form-control" placeholder="Inserisci Task" name="newtask" v-model="formData.newtask">
                        </div>
                        <div class="col-auto">
                            <button  type="submit" class="btn btn-primary mb-3">ADD</button>
                        </div>
                    </form>
                </div>
            </div>

        </main>
    </div>

    <script src="js/main.js"></script>
</body>

</html>