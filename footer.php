<?php

function epm_footer() {
?>
    <footer class="global-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <?php echo t('footer.address') ?><br><br>
            <?php echo t('footer.leader') ?><br><br>
            <?php echo t('footer.data') ?>
          </div>
          <div class="col-sm-9 disclaimer">
            <?php echo t('footer.disclaimer') ?>
          </div>
        </div>
      </div>
    </footer>
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function () {
      $('#menu-toggle').click(function (e) {
        e.preventDefault();
        if($(this).hasClass('open')) {
          $(this).removeClass('open');
          $('.global-nav').removeClass('open');
        } else {
          $(this).addClass('open');
          $('.global-nav').addClass('open');
        }
      });
      function changeBg() {
        $('[data-bg]').each(function (elem) {
          var small = '';
          if ($(window).width() <= 590) {
            small = '-small';
          }
          $(this).css('background-image', 'url(/img/bg'+small+'/' + $(this).attr('data-bg') + ')');
        });
      }
      window.onresize = changeBg;
      changeBg();
    });
    </script>
  </body>
</html>
<?php
}