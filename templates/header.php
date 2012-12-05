<!DOCTYPE html>

<html>

    <head>

        <link href="css/bootstrap.css" rel="stylesheet"/>
        <link href="css/bootstrap-responsive.css" rel="stylesheet"/>
        <link href="css/styles.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title>Veritasks: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Veritasks</title>
        <?php endif ?>

        <script src="js/jquery-1.8.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/scripts.js"></script>
        <script type="text/javascript" charset="utf-8" src="/DataTables-1.9.4/media/js/jquery.dataTables.js"></script>
    </head>

    <body>

        <div class="container-fluid">

            <div id="top">
                <h3></h3>
                <div class="navbar navbar-inverse">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <a class="brand" href="#">Veritasks</a>
                            <ul class="nav">
                              <li class="active">
                                <a href="index.php">Home</a></li>
                              <li class="divider-vertical"></li>
                              <li><a href="createTask.php">Create Task</a></li>
                              <li class="divider-vertical"></li>
                            </ul>
                            <a class="btn btn-primary pull-right" href="logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="middle">
                

