
    <footer>
        <div class="container">
            <p>&copy; 2020. All Rights Reserved.</p>
            <p>Created with ❤</p>
            <span class="d-block">
                <a class="mr-3" href="impressum.html">Mentions</a>
                <a class="mr-3" href="#">légales</a>
                <a href="faq.html">FAQ sur la confidentialité</a>
            </span>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="JS/new-age.min.js"></script>
    <script>
        let onScroll = function(e) {
            if (window.innerWidth >= 992) {
                let contains = document.getElementById('mainNav').classList.contains('navbar-shrink');
                let image = contains ? 'img/edited.png' : 'img/edited.png';
                document.getElementById('logo').setAttribute('src', image);
            } else {
                document.getElementById('logo').setAttribute('src', 'img/edited.png');
            }
        };
        window.addEventListener('scroll', onScroll, {
            passive: true
        });

        function toggleAppVideo(app) {
            if (app === 'android') {
                document.getElementById('app-video').setAttribute('src', 'Rahma.png');
                document.getElementById('app-ios').classList.toggle('toggle-app-active');
                document.getElementById('app-android').classList.toggle('toggle-app-active');
            } else {
                document.getElementById('app-video').setAttribute('src', 'Rahma.png');
                document.getElementById('app-ios').classList.toggle('toggle-app-active');
                document.getElementById('app-android').classList.toggle('toggle-app-active');
            }
        }
    </script>