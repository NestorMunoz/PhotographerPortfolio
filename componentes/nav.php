<body data-spy="scroll" data-target=".navbar-fixed-top">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand " href="index.php"><span>artasdafajawa</span>.com</a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll <?php if($pageName == "Inicio") echo "current-item"; ?>" href="index.php">Inicio</a>
                    </li>
                    <li>
                        <a class="page-scroll <?php if($pageName == "Portafolio") echo "current-item"; ?>" href="portafolio.php">Portafolio</a>
                    </li>
                    <li>
                        <a class="page-scroll <?php if($pageName == "Contacto") echo "current-item"; ?>" href="contacto.php">Contacto</a>
                    </li>
                    <li>
                        <a class="page-scroll <?php if($pageName == "Acerca") echo "current-item"; ?>" href="acerca.php">Acerca</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
</body>