<div class="desktop-model" id="model-holder">
    <model-viewer id="myModel" alt="" exposure="40" skybox-height="100m" src="<?php echo get_template_directory_uri(); ?>/assets/bm-logo.glb" disable-zoom rotation-per-second="200%" field-of-view="80deg" camera-orbit="-900deg 100deg 700m" shadow-intensity="0" tone-mapping="agx">
        <effect-composer>
            <bloom-effect></bloom-effect>
        </effect-composer>
    </model-viewer>
</div>
<div class="mobile-model" id="model-holder">
    <model-viewer id="myMobileModel" alt="" exposure="40" skybox-height="100m" src="<?php echo get_template_directory_uri(); ?>/assets/bm-logo.glb" disable-zoom rotation-per-second="200%" field-of-view="35deg" camera-orbit="-900deg 100deg 700m" shadow-intensity="0" tone-mapping="agx">
        <effect-composer>
            <bloom-effect></bloom-effect>
        </effect-composer>
    </model-viewer>
</div>