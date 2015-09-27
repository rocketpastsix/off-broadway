<?php

use Helpers\Assets;
use Helpers\Url;
use Helpers\Hooks;

//initialise hooks
$hooks = Hooks::get();
?>

</main>

<!-- JS -->
<script src="/bower_components/foundation/js/foundation.js"></script>
<script src="/bower_components/foundation/js/foundation/foundation.dropdown.js"></script>
<script src="/bower_components/foundation/js/foundation/foundation.topbar.js"></script>
<script src="/bower_components/foundation/js/foundation/foundation.alert.js"></script>
<script src="/bower_components/foundation/js/foundation/foundation.abide.js"></script>
<script src='/bower_components/flowtype/flowtype.js'></script>

<?php
    Assets::js(array(
        Url::templatePath() . 'js/main.js',
        Url::templatePath() . 'featherlight.js'
    ));
//hook for plugging in javascript
$hooks->run('js');

//hook for plugging in code into the footer
$hooks->run('footer');
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="small-12 columns"><hr />
                <p class="text-center">12315 Crabapple Rd Suite 122 - Alpharetta GA, 30004 <br /> 770-664-2410 <br /><span id="footerEmail"><a href="mailto:offbroadway@msn.com">offbroadway@msn.com</a></span></p>
            </div>
            <div class="small-12 columns" id="footerSM">
                <ul class="text-center">
                    <li><a href="https://www.facebook.com/offbroadwaydancetheater"><i class="fa fa-facebook-official fa-3x"></i></a></li>
                    <li><a href="https://twitter.com/offbroadwayga"><i class="fa fa-twitter-square fa-3x"></i></a></li>
                    <li><a href="https://offbroadwaydance.wordpress.com/"><i class="fa fa-wordpress fa-3x"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCYE5UAeKu42oT4NNTOH6YMQ"><i class="fa fa-youtube-square fa-3x"></i></a></li>
                </ul>
            </div>
            <div class="small-12 columns">
                <p class="text-center" id="copy">&copy; <?php echo date("Y"); ?></p>
<!--                <p class="text-center">Site Visitors: --><?php //include('counter.php'); ?><!--</p>-->
            </div>
        </div>
    </div>
</footer>
<a href="#" class="back-to-top" style="display: inline;">
    <i class="fa fa-arrow-circle-up"></i>
</a>

</body>
</html>
