<!DOCTYPE html>
<html>

<head>
    <title>Codeigniter 4 CRUD Operations Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .error {
            display: block;
            color: red;
            font-size: 13px;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="d-flex justify-content-end">
            <a href="<?php echo site_url('/todo-form') ?>" class="btn btn-danger mb-3">Create Todo</a>
        </div>

        <?php if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
        } ?>

        <ul class="list-group">
            <?php if($todos): ?>
            <?php foreach($todos as $todo): ?>
            <li class="list-group-item">
                <h3><?php echo $todo['title']; ?></h3>
                <p><?php echo $todo['description']; ?></p>
                <p>
                    <a href="<?php echo base_url('edit-todo/'.$todo['id']);?>" class="text-decoration-none">Edit</a>
                    <a href="<?php echo base_url('delete-todo/'.$todo['id']);?>" class="text-decoration-none">Delete</a>
                </p>
            </li>
            <?php endforeach; ?>
            <?php endif; ?>
        </ul>

    </div>
</body>

</html>