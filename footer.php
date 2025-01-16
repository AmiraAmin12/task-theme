<footer>
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    </footer>
    <?php wp_footer(); ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggleMenu = document.querySelector('.toggle-menu');
    const mainNav = document.querySelector('.main-nav');

    if (toggleMenu && mainNav) {
        toggleMenu.addEventListener('click', function () {
            mainNav.classList.toggle('active');
        });
    }
});
</script>
    </body>
    </html>
