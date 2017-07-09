<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo isset($meta_description) && $meta_description ? $meta_description : 'Electronics Good Home Appliance' ;?>">
    <meta name="keywords" content="<?php echo isset($meta_keywords) && $meta_keywords ? $meta_keywords : 'Electronics Good Home Appliance' ;?>"  />
    <meta name="author" content="">
    <title>Smart Electronics - <?php echo isset($product['product_name']) ? $product['product_name'] : 'Product Collection'?></title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/bootstrap/css/bootstrap.min.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo BASEPATH; ?>public/css/styles_front.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo BASEPATH?>">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav> 
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <p class="lead">Smart Electronics</p>
                <!-- menu -->
                <div id="MainMenu">
                    <div class="list-group panel">
                        <?php foreach ($categories as $key => $category) : ?>
                        <a href="#submenu-<?php echo $key?>" class="list-group-item list-group-item-success" data-toggle="collapse" data-parent="#MainMenu"><?php echo $category[0]['parent_category_title']?> <i class="fa fa-caret-down"></i></a>
                        <div class="collapse" id="submenu-<?php echo $key?>">
                            <?php foreach ($category as $item) : ?>
                                <a href="<?php echo BASEPATH?>product/items/<?php echo $item['category_id'] ?>" class="list-group-item"><?php echo $item['category_title']?></a>
                            <?php endforeach;?>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div> 
                <!--div class="panel-group">
                    <?php foreach ($categories as $key => $category) : ?>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" href="#collapse<?php echo $key?>"><?php echo $category[0]['parent_category_title']?></a>
                            </h4>
                        </div>
                        <div id="collapse<?php echo $key?>" class="panel-collapse collapse">
                        <?php foreach ($category as $item) : ?>
                            <div class="panel-body">
                                <a hre="<?php echo BASEPATH?>"><?php echo $item['category_title']?></a>
                            </div>
                        <?php endforeach;?>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div-->
            </div>
            <div class="col-md-9">
                <?php require VIEWPATH . 'includes/message.php';?>
                <?php echo $content;?>
            </div>
        </div>
    </div>
    <!-- /.container -->
    <div class="container">
        <hr>
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Smart Electronics <?php echo date('Y');?></p>
                </div>
            </div>
        </footer>
    </div>
    <!-- container -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo BASEPATH; ?>public/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
