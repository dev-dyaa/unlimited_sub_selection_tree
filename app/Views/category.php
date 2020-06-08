<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Multiple Sub-Categories!</title>
  </head>
  <body>
    <center><h4>Multiple Sub Categories</h4></center>
    <div class="container">
      <div class="form-group">
      <select class="form-control" onchange="getSub(this)">
        <option value="0">Please Select Category</option>
          <?php foreach($main as $category): ?>
            <option value="<?php echo $category['id']?>"><?php echo $category['name']?></option>
          <?php endforeach; ?>
      </select>
      </div>
    </div>

    <script>
      var base_url = '<?php echo base_url();?>';
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="<?php echo base_url()?>/public/js/select.js"></script>
  </body>
</html>