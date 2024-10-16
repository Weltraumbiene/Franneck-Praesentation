<!DOCTYPE html>
<html lang="de"> <!-- Sprache auf Deutsch geändert -->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Meine Präsentation von Benjamin Franneck</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link href="css copy/style.css" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <!-- Dark gray background color for the page -->
    <style>
        body {
            background-color: #333333; 
            color: #ffffff; 
        }
    </style>
</head>
<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="Logo" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#Start">Start</a></li>
                    <li class="nav-item"><a class="nav-link" href="#UberUns">Über Uns</a></li>
                    <li class="nav-item"><a class="nav-link" href="#Nachricht">Nachricht</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead-->
    <header class="masthead page-section" id="Start">
        <div class="container">
            <div class="masthead-subheading">Willkommen in unserem Kurs!</div>
            <div class="masthead-heading text-uppercase">Fachinformatiker für Anwendungsentwicklung</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#UberUns">Erzähl mir mehr!</a>
        </div>
    </header>

    <!-- Services-->
    <section class="page-section" id="UberUns">
        <div class="container">
            <div class="text-center">
                <h1 class="section-heading text-uppercase">US FI 36 I</h1>
                <h3 class="section-heading text-uppercase">Sie suchen Qualität? Wir sind Qualitäter!</h3>
                <br>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Zuverlässig</h4>
                    <p class="text-muted">Wir sind fast immer pünktlich,</p>
                    <p class="text-muted">oft konzentriert und fachlich tip-top!</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Seriös</h4>
                    <p class="text-muted">Seriösität wird bei uns groß geschrieben</p>
                    <p class="text-muted">und das nicht nur im Rechtschreibtest!</p> 
                    <p class="text-muted">Sie haben zu viel Geld? Geben Sie es uns!</p>
                    <p class="text-muted">Wir passen drauf auf.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Diskret</h4>
                    <p class="text-muted">Alle Ihre Geheimnisse sind bei uns sicher!</p>
                    <p class="text-muted">Erzählen Sie uns ruhig...</p>
                    <p class="text-muted">Wir machen ganz sicher nichts Böses damit!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact-->
    <section class="page-section" id="Nachricht">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Kurs Updates</h2>
                <h3 class="section-subheading text-muted">Wer? Wo? Wie? Was?</h3>
                <form id="todo-form" class="mb-4">
                    <div class="form-group">
                        <input type="text" id="todo-input" class="form-control" placeholder="Wer ist krank? Wer kommt zu spät?" required>
                        <button type="submit" class="btn btn-primary mt-2">Hinzufügen</button>
                    </div>
                </form>
                <ul id="todo-list" class="list-unstyled">
                    <!-- Unordered list to dynamically add todo list items. -->
                </ul>           
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; US FI 36 I 2024</div>
                <div class="col-lg-4 my-3 my-lg-0"></div>
            </div>
        </div>
    </footer>
    <script src="todo.js"></script>
</body>
</html>
