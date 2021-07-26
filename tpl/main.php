
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Sharif | PHP project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?= site_path ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= site_path ?>assets/css/all.min.css">
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <link href="<?= site_path ?>assets/font/iransans.ttf" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Megrim" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        @font-face {
            font-family: iransans;
            src: url('assets/font/iransans.ttf');
        }

        h1, h2, h3, h4, h5, h6, p, span {
            font-family: iransans !important;
        }

        .date {
            margin-top: 7px !important;
        }

        .task-box {
            border-radius: 5px;
        }
    </style>
</head>
<body>
<div id="all-tasks">

    <section class="header">
        <div class="top">
            <div class="logo">
                SHARIF PROJECT
            </div>
            <div class="tasks-total">
                <div class="task"><span class="number"><?= $alltask?></span> <span>Tasks</span></div>
                <br>
                <div class="task"><span class="number"><?= $numtask?></span> <span>Completed</span></div>
            </div>
            <div class="add-circle">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
            </div>
        </div>
    </section>

</div>


<section class="content-area">
    <div class="container">
        <div class="tasks-container">
            <?php foreach ($tasks as $task) :?>
            <div class="task-box">
                <div class="title">
                    <h6 class="fontTitle">
                        <?= $task->name?>
                        <span class="">
                          <a class="icon1" href="?setu=<?= $task->id?>"><i class="hover1 fas fa-check-circle"></i></a>
                          <a class="icon2" href="?del=<?= $task->id?>"><i class="hover2 fas fa-trash"></i></a>
                          <a class="icon3" style="<?= ($task->situation === "1") ? "color:#999999 !important;" : "color:#0fa71b !important;" ;?> text-decoration:none; font-size:17px; margin-top:10px;" href=""><?= ($task->situation === "1") ? "Not completed" : "Completed" ;?></a>
                        </span>
                    </h6>
                </div>
                <div class="date">
                    <h6><?= $task->created_at?></h6>
                </div>
            </div>
            <?php endforeach;?>
        </div>


    </div>

</section>


<section class="task-form">
    <div class="close-btn">
        <i class="fa fa-times" aria-hidden="true"></i>
    </div>
    <form method="post">
        <h3> Add New Task </h3>
        <div class="form-group">
            <label for="title">Title:</label>
            <input id="taskinput" type="text" name="title">
        </div>

        <div class="form-group">
            <button id="taskbtn" type="submit">Add New Task</button>
        </div>
    </form>
</section>


<script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $('.add-circle').on('click', function () {
            $('.task-form').addClass('active')
        })
        $('.task-form .close-btn').on('click', function () {
            $('.task-form').removeClass('active')
        })
    });

    var taskbtn = $('#taskbtn');
    var taskinput = $('#taskinput');
    $(taskbtn).click(function (e) {
        $.ajax({
            method: "post",
            url: 'process/tasks.php',
            data: {action: 'addtask', title: taskinput.val()},
            success: function (response) {
                
            }
        })
    })
</script>

</body>

</html>
<!-- partial -->
<script src="<?= site_path ?>assets/js/jquery.js"></script>
<script src="<?= site_path ?>assets/js/script.js"></script>
<script src="<?= site_path ?>assets/js/all.min.js"></script>


</body>

</html>