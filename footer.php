    <div class="container pb-5 pt-5 <?php if (is_home())echo 'text-light';?>">
        <div class="row">
            <div class="col-12 text-center">
            <?php echo '© '.date('Y')?>
                <?php echo bloginfo( 'name' );?>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>
    <script src="https://cdn.bootcdn.net/ajax/libs/highlight.js/10.3.2/highlight.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            document.querySelectorAll('pre').forEach((block) => {
                hljs.highlightBlock(block);
            });
        });
    </script>
</body>
</html>