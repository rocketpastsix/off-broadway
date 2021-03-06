<?php
/**
 * Created by PhpStorm.
 * User: matthewtrask
 * Date: 11/9/15
 * Time: 7:25 PM
 */
?>


<div class="row" style="margin-top: 4%">
    <div class="small-12 medium-9 columns">
        <h2>OBCT Troupe</h2>
        <?php foreach($data['troupeInfo'] as $troupeInfo){
            echo "<p>".$troupeInfo->content."</p>";
        }?>
        <button class='button contact'><a href="troupe" data-reveal-id="#">Click here to see our Troupe Members</a></button>
    </div>
    <div class="small-12 medium-3 columns">
        <img src="<?php echo IMGDIR ?>green-logo.png">
        <div class="panel" style="margin-top: 5%">
            <h4>More Info on the OBCT Troupe</h4>
            <a href="#" data-reveal-id="addtInfo"><button class="button expand">Here</button></a>
        </div>
        <div class="panel" style="margin-top: 5%">
            <h4>Questions?</h4>
            <a href="contact" ><button class="button expand success">Contact</button></a>
        </div>
    </div>
</div>

<div id='addtInfo' class='reveal-modal' data-reveal aria-labelledby='modalTitle' aria-hidden='true' role='dialog'>
    <h2 class="modalTitle">Troupe Info</h2>
    <p class="lead">A little more info about our Troupe</p>
    <?php
    foreach($data['troupeAddtInfo'] as $addtInfo){
        echo "<p><b>".$addtInfo->title."</b>: ".$addtInfo->point."</p>";
    }
    ?>
</div>
