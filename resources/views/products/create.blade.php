<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
    <fieldset>
        <legend>Form Details</legend>
        <form method="post" action="{{route('product.store')}}" class="form-horizontal">
            @csrf
            @method('post')
            <div class="form-group has-success">
                <label for="name" class="control-label col-sm-2">Name</label>
                <input type="text" name="name" placeholder="Name">
            </div>
            <div class="form-group has-success">
                <label for="qty" class="control-label col-sm-2">Qty</label>
                <input type="text" name="qty" placeholder="Quantity">
            </div>
            <div class="form-group has-success">
                <label for="price" class="control-label col-sm-2">Price</label>
                <input type="text" name="price" placeholder="Price">
            </div>
            <div class="form-group has-success">
                <label for="description" class="control-label col-sm-2">Description</label>
                <input type="text" name="description" placeholder="Description">
            </div>
            <div class="container">
                <input type="submit" class="btn btn-success" value="Submit">
            </div>
        </form>
    </fieldset>
</body>

</html>
