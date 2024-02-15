<script>
    document.addEventListener('DOMContentLoaded', function () {
        var menuIcon = document.querySelector('.menu-icon');
        var menu = document.querySelector('.navigate-mobile');
        var backdropMenu = document.querySelector('.backdrop-navigate-mobile');
        var closeIconMenu = document.querySelector('.close-icon');

        menuIcon.addEventListener('click', function () {
            menu.classList.toggle('show');
            backdropMenu.classList.toggle('show');
        });

        backdropMenu.addEventListener('click', function () {
            menu.classList.toggle('show');
            backdropMenu.classList.toggle('show');
        });

        closeIconMenu.addEventListener('click', function () {
            menu.classList.toggle('show');
            backdropMenu.classList.toggle('show');
        });
    });
</script>
