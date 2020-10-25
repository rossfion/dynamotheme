<footer>
    <p>Copyright &copy; <?php echo date('Y'); ?> - <?php bloginfo('name'); ?></p>
</footer>

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

<!-- JQueryUI JS -->
<script src="<?php bloginfo('template_url'); ?>/js/jquery-ui.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/unslider/2.0.3/js/unslider-min.js"></script>

<script>
    $(document).ready(function ($) {
        $('.my-slider').unslider({
            arrows: {
                prev: '<a class="unslider-arrow prev"><i class="fa fa-3 fa-arrow-circle-left"></i></a>',
                next: '<a class="unslider-arrow next"><i class="fa fa-3 fa-arrow-circle-right"></i></a>'
            }
        });
    })

</script>

<script>
    $(function () {
        $('#tabs').tabs();
    });

</script>

</body>
</html>