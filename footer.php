<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">

    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('Powered by<a href="https://typecho.org">Typecho</a>, themed by <a href="https://memoo.online">memoo</a>'); ?>.
    <br/>
    <a href="https://beian.miit.gov.cn/"><?php $this->options->ICP(); ?></a>

</footer><!-- end #footer -->

<?php $this->footer(); ?>
</body>
</html>
