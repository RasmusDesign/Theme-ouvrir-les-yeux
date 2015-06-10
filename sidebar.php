<div class="row sidebar">
    <div class="col-md-12">
        <h1>Olivier Gourmet nous parraine</h1>
        <div class="row parrain_container">
            <div class="col-xs-5">
                <img src="<?php echo get_template_directory_uri() ;?>/bootstrap/img/Sans%20titre-1.png" class="img-responsive parrain round border-red" alt="Olivier Gourmet, notre parrain"/>
            </div>
            <div class="col-xs-7">
                <p class="devise">Comme moi, <br>Soutenez <br>Ouvrir Les Yeux</p>
            </div>
        </div>
        <div class="row newsletter">
            <div class="col-md-12">
                <?php
//if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) ;
$widgetNL = new WYSIJA_NL_Widget(true);
echo $widgetNL->widget(array('form' => 1, 'form_type' => 'php'));
                ?>
            </div>
        </div>
        <div class="row hidden-xs hidden-sm">
            <div class="col-md-6">
                <a href="#"><div class="bouton_sidebar">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?php echo get_template_directory_uri() ;?>/bootstrap/img/logo_don_b.png" class="btn-ds"/>
                        </div>
                        <div class="col-md-6">
                            <span>Don</span>
                        </div>
                    </div>
                    </div></a>
            </div>
            <div class="col-md-6">
                <a href="#"><div class="bouton_sidebar">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="<?php echo get_template_directory_uri() ;?>/bootstrap/img/logo_soutien_b.png" class="btn-ds"/>
                        </div>
                        <div class="col-md-6">
                            <span>Soutien</span>
                        </div>
                    </div>
                    </div></a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="bouton_sidebar_">

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="bouton_sidebar_ fb">
                    <i class="flaticon-logotype42"></i>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bouton_sidebar_ tw">
                    <i class="flaticon-twitter1"></i>
                </div>
            </div>
            <div class="col-md-4">
                <div class="bouton_sidebar_ rss">
                    <i class="flaticon-web42"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <?php include("partenaire.php"); ?>
            </div>
        </div>
    </div>
</div>

