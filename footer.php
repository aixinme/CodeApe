    <div class="container pb-5 pt-5 <?php if (is_home())echo 'text-light';?>">
        <div class="row">
            <div class="col-12 text-center">
            <?php echo '© '.date('Y')?>
                <?php echo bloginfo( 'name' );?>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>

</body>
</html>