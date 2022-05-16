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
  <div class="container mt-3">
    <form method="post" id="add_todo" name="add_todo" 
    action="<?= site_url('/add-todo') ?>">
      
      <div class="mb-3">
        <input type="text" name="title" class="form-control" placeholder="Title">
      </div>

      <div class="mb-3">
        <input type="text" name="description" class="form-control" placeholder="Description">
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-dark">Create</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#add_todo").length > 0) {
      $("#add_todo").validate({
        rules: {
          title: {
            required: true,
          },
          description: {
            required: true,
            maxlength: 120,
          },
        }
      })
    }
  </script>
</body>

</html>