<?php

function epm_footer() {
?>
    <footer class="global-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <strong>E-P-M GmbH</strong><br>
            Beim Pfarracker 3a<br>
            D-85716 Unterschleißheim
          </div>
          <div class="col-sm-3">
            Geschäftsführer:  Bernhard Ranftl<br>
            Tel.: +49 (0)89 8890 0059<br>
            Email:  info@ep-m.de
          </div>
          <div class="col-sm-3">
            Amtsger. München HRB 171236<br>
            Steuernummer: 143/134/00639<br>
            Ust.-Id.: DE 257515537
          </div>
        </div>
      </div>
    </footer>
    <script src="/bower_components/jquery/dist/jquery.min.js"></script>
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
    });
    </script>
  </body>
</html>
<?php
}