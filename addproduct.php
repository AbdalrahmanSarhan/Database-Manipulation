<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Browse Data</title>
        <?php include("./bootstrab.php"); ?>

<body>
    <div class="container" style="padding-top: 100px;padding-bottom: 100px;">
        <div class="row" style="justify-content: center;display: flex;">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>New Product</h4>
                    </div>
                    <form action="index.php" method="post" enctype="multipart/form-data">
                        <div class="card-body">
                            <!-- <div class="form-group">
                                <label for="id">Id</label>
                                <input type="text" name="id" required id="id" class="form-control">
                            </div> -->
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input type="text" name="name" id="name" required class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price" required autocapitalize="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="description">description</label>
                                <input type="text" name="description" id="description" required autocapitalize="off" class="form-control">
                            </div>
                          
                            <div class="form-group">
                                <label for="Paragraph">quantity</label>
                                <input type="text" name="quantity" id="Paragraph"  autocapitalize="off" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Paragraph">create_at</label>
                                <input type="date" name="create_at" id="Paragraph" required autocapitalize="off"class="form-control">
                            </div>
                            <div class="form-group">
                                <br>
                                <button type="submit" name="newProduct" autocapitalize="off" class="btn btn-success">Add</button>
                                <a class="btn btn-primary" href="browse.php">go to home</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>