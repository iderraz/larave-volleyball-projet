<header>

    <nav class="navbar navbar-expand-lg navbar-warning bg-warning">


        <div class="container-fluid">
            <a class="navbar-brand" href="/">Home</a>


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href={{ route("equipes.index") }}>Equipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href={{ route("joueurs.index") }}>Joueurs</a>
                    </li>
                </ul>
            </div>


        </div>
    </nav>

</header>