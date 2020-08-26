<footer class="footer footer-default">
    <div class="container">
        <nav class="float-left">
            <ul>
                <li>
                    <a href="{{ asset('/') }}">
                        Mi Comercial-Laravel
                    </a>
                </li>
                <li>
                    <a href="{{ asset('/acercade') }}">
                        Acerca de
                    </a>
                </li>
                <li>
                    <a href="{{ asset('/blog') }}">
                        Blog
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright float-right">
            &copy;
            <script>
                document.write(new Date().getFullYear())
            </script>, desarrollado.. <i class="material-icons">favorite</i> por
            <a href="{{ asset('/') }}" target="_blank">Comercial-Laravel</a> de prueba.
        </div>
    </div>
</footer>
