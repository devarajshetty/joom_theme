<?php if ($this->params->get('logoFile')){	$logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="logo" />';}
if ($this->params->get('copyright_text')){$copright_text=$this->params->get('copyright_text');}
if ($this->params->get('slider_bg')){	$slider_bg = $this->params->get('slider_bg'); }
if ($this->params->get('contact_bg')){	$contact_bg = $this->params->get('contact_bg');}
if ($this->params->get('position_a_color')){	$position_a_color = $this->params->get('position_a_color');}
if ($this->params->get('position_b_color')){	$position_b_color = $this->params->get('position_b_color');}
if ($this->params->get('position_d1d2_color')){	$position_d1d2_color = $this->params->get('position_d1d2_color');}
if ($this->params->get('position_f1_color')){	$position_f1_color = $this->params->get('position_f1_color');}
if ($this->params->get('position_f2_color')){	$position_f2_color = $this->params->get('position_f2_color');}
if ($this->params->get('position_f3_color')){	$position_f3_color = $this->params->get('position_f3_color');}
if ($this->params->get('position_f4_color')){	$position_f4_color = $this->params->get('position_f4_color');}
if ($this->params->get('position_h_color')){	$position_h_color = $this->params->get('position_h_color');}
if ($this->params->get('position_bottom_color')){	$position_bottom_color = $this->params->get('position_bottom_color');}
if ($this->params->get('position_footer_color')){	$position_footer_color = $this->params->get('position_footer_color');}
if ($this->params->get('menu_color')){	$menu_color = $this->params->get('menu_color');}?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>           
/*mar152018*/ 
.pos_e2_txt{color: #fff128;}  
button.btn.btn-danger { padding: 14px;}  
div#toprow22_service {color: #fff128;}    
.formControlLabel.mal_sub { padding-top: 0 !important;}   
.formControls.mal_sub { text-align: center; margin-left: 0 !important;}    
.formResponsive .formHorizontal .formControls:first-child {margin-left: 0px !important;} 
.bg-warning{background-color: #fff128 !important;}  .text-warning{color: #fff128 !important;}
.crazy_girl{width: 100%;opacity: 0.8;} img.img-rounded{width: 100%;} .slider{background-repeat: no-repeat;background-size: cover;} 
.banner{background-repeat: no-repeat;background-size: cover;} 
.banner1{background: url("templates/sitesassure/images/banner1.jpeg");background-repeat: no-repeat;background-size: cover;}
/*end of mar152018*/ /*mar192018*/ .been_hacked { font-size: 9em;} 
.find h2 { font-size: 7em;} 
.find h3 { font-size: 4em;}  
.lock { font-size: 2.5em;}  
.order_malware h2 { font-size: 7em;} 
.order_malware h3 { font-size: 4em;} 
.dont_get h2 { font-size: 6em;}  
.dont_get h3 { font-size: 4em;}  
.order_security h3 { font-size: 4em;}  
.order_security h4 { font-size: 3em;}  
.monitor h2 { font-size: 7em;}   
.monitor h3 { font-size: 4em;}  
.rest_assure h3 { font-size: 4em;}   
.custom.center.whitetitle.padng { padding: 3rem;} 
input { width: 225px !important; padding: 13px 11px 11px 18px !important; float: left;  
        margin-left: 20px!important; margin-left: 0px!important; margin-bottom: 0px !important;  
        overflow: visible; font-size: 14px; padding: 13px 11px 11px 18px; background: #f2f8fe; border: 1px solid transparent; 
        font-weight: 300; color: #000000;    -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; min-height: 42px;} 
select { width: 225px !important; padding: 13px 11px 11px 18px !important; float: left;  margin-left: 20px!important; margin-left: 0px!important; margin-bottom: 0px !important;    overflow: visible; font-size: 14px;
         padding: 13px 11px 11px 18px; background: #f2f8fe; border: 1px solid transparent; font-weight: 300; color: #000000;  
         -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; min-height: 42px;}  
.s5_pricetable_2 .s5_pricetable_column { width: 50%; float: left;}  
#rsform_17_page_0 .formBody { text-align: center; display: inline-block;}  
.formResponsive button[type="submit"]{padding: 10px 10px 10px !important;} 
@media only screen and (max-width : 714px) {     h1{font-size: 3em !important;}h2{font-size: 2em !important;}h3{font-size: 1em !important;}    .s5_pricetable_2 .s5_pricetable_column{width: 100% !important;}.Annual{margin-top: 10px;} 
                                                 .formTableLeft, .formTableRight { width: 100%;  float: left;}tr.rsform-block.rsform-block-send td {  display: inline-block;}  
                                                 tr.rsform-block.rsform-block-send { text-align: center;}
                                                 tr.rsform-block.rsform-block-captcha td span { margin: 0px 20px 0px 0px;}  
                                                 tr.rsform-block.rsform-block-captcha td {  display: inline-block;} 
                                                 tr.rsform-block.rsform-block-captcha { text-align: center;}   
                                                 a.rsform-captcha-refresh-button { display: none;}    }     
@media only screen and (max-width : 399px) {    .formTableLayout tr.rsform-block > td{width: 100%;float: left;}
                                                textarea {  width: 100%;  float: left;     }}       
.fight_font { font-size: 7em;}    #fightback_container h3{ font-size: 4em;}   
.before{ font-size: 10em;}    #fightback_container h4{ font-size: 1.5em;}  
ul.nav.menu li{padding: 12px; color: #000 !important;font-weight: bold; }   
ul.nav.menu li a{color: #000 !important;text-decoration: none;}   
textarea { width: 100%;}   
.padng span{padding-left: 42px;  background: transparent url(images/typography/s5_alert.png) no-repeat center left;}  
/*end of mar192018*/  
/*mar212018*/ 
div#maximenuck1226 ul.maximenuck { text-align: center; z-index: 1;}
div#maximenuck1226 ul.maximenuck { background: none !important; border: none !important;}
div#maximenuck1226 ul.maximenuck li.maximenuck.level1:hover, div#maximenuck1226 ul.maximenuck li.maximenuck.level1.active {border: 1px solid #fff128 !important;
    background: none !important; color: black !important;}
div#maximenuck1226 ul.maximenuck li.maximenuck.level1 > a { font-size: 21px !important;}
div#maximenuck1226 ul.maximenuck li.maximenuck.level1 > a, div#maximenuck1226 ul.maximenuck li.maximenuck.level1 > span.separator { color: black !important;
    text-shadow: none !important;}
div#maximenuck1226 ul.maximenuck li.maximenuck.level1.active > a span.titreck { color: #e92933;}
div#maximenuck1226 ul.maximenuck li.maximenuck.level1:hover > a span.titreck, div#maximenuck1226 ul.maximenuck li.maximenuck.level1.active > a span.titreck, div#maximenuck1226 ul.maximenuck li.maximenuck.level1:hover > span.separator, div#maximenuck1226 ul.maximenuck li.maximenuck.level1.active > span.separator {
    text-shadow: none !important;}
div#maximenuck1226 ul.maximenuck li.maximenuck.level1:hover > a span.titreck, div#maximenuck1226 ul.maximenuck li.maximenuck.level1.active > a span.titreck, div#maximenuck1226 ul.maximenuck li.maximenuck.level1:hover > span.separator, div#maximenuck1226 ul.maximenuck li.maximenuck.level1.active > span.separator {
    font-weight: bold !important;}
div#maximenuck1226 ul.maximenuck li.maximenuck.level1 { vertical-align: inherit !important; margin-top: 15px;}
div#maximenuck1226 div.maxidrop-main {width: 350px !important;}
div#maximenuck1226 div.floatck { border-radius: 0 !important;}
div#maximenuck1226 div.floatck {background: #fff128 !important;}
div#maximenuck1226 ul.maximenuck li.maximenuck.level1.active > a span.titreck{color: #e92933 !important;}
div#maximenuck1226 span.titreck {  font-weight: bold !important;}
div#maximenuck1226.maximenuckh ul.maximenuck li.level1.parent > a:after, div#maximenuck1226.maximenuckh ul.maximenuck li.level1.parent > span.separator:after {
    border-color: #e92933 transparent transparent transparent !important;}
div#maximenuck1226 ul.maximenuck li.maximenuck.level1 > span {font-size: 21px !important;}
div#maximenuck1226 ul.maximenuck li.maximenuck ul.maximenuck2 li a, div#maximenuck1226 ul.maximenuck2 li a{    text-shadow: none !important;}
div#maximenuck1226 ul.maximenuck2 a { line-height: 19px !important; font-size: 17px !important; font-weight: 500;}
a.maximenuck { color: black !important;}
div#maximenuck1226 ul.maximenuck li.level1.parent li.parent > a:after, div#maximenuck1226 ul.maximenuck li.level1.parent li.parent > span.separator:after, div#maximenuck1226 ul.maximenuck li.maximenuck ul.maximenuck2 li.parent > a:after, div#maximenuck1226 ul.maximenuck li.maximenuck ul.maximenuck2 li.parent > a:after {
    border-color: transparent transparent transparent #e92933 !important;}

<?php if ($_REQUEST['Itemid']!=101): ?>
.head_er{background: none !important;}
.logo_mod img { width: 100% !important;}
.top_text{display: none;}
.logo_mod{background: #1c2f4f;}
<?php endif; ?>
/*end of mar212018*/ 
/*mar232018*/
.been_hacked{color: #000;}
.rsform.malware_scan input#website { padding: 0px 70px !important;}
.rsform.malware_scan input#email { padding: 0px 70px !important;}
.rsform.malware_scan input#phone { padding: 0px 70px !important;}
.rsform.malware_scan button#submit { padding: 6px 90px !important; margin: 0; background: #e92933 !important;}
div#topr2_3_img {display: inline-block;position: absolute;}
img#topr2_3_img_src { position: relative; width: 31%; bottom: 30px;right: 581px;}
select#rsm_country { border-radius: 0 !important;}
.dont_get h3{color: #000;}
.dont_get h2{color: #000;}
.order_security{color: #000;}
.rest_assure h3 {margin: 0 !important;}
.dont_get h2 {margin: 0;}
.moduletable.calling { margin-top: 17px;}
.moduletable.our_bus { margin-top: 18px;}
.custom.f3_callus { margin: 17px 0 17px 0;}
.custom.f4_24hr { margin-top: 17px;}
.s5_redbox h3 { font-weight: bold !important;}
p#row_4_text12 { font-weight: bold; font-size: 23px; color: #fff128;}
p#row_4_text12 a{color: #e92933; text-decoration: none;}
#fightback_container_p{color: #fff128!important; font-size: 4em; font-weight: bold; padding-bottom: 14px; line-height: 70px;}
span.hour_24.blue { font-size: 2em; margin-bottom: 7px; font-weight: bold; color: #fff !important; background: #e92933 !important; padding: 0px 15px 5px 15px;
    border-radius: 6px;}

.siteassure_bottom .s5_h3_first{color: #e92933;}

/*end of mar232018*/

/*mar272018*/
footer .container-fluid { padding: 32px 0 32px 0;}
.copyright_p{color: #000;font-weight: bold;}
#order_now button { border: #e92933 !important; background: #e92933 !important;}
.logo_mod div#maximenuck1365 ul.maximenuck{background: #1c2f4f !important;}
.logo_mod div#maximenuck1365 span.titreck{color: #FFF;}
.logo_mod div#maximenuck1365 ul.maximenuck{border-radius: 0px !important;padding: 20px 20px 20px 20px !important;}
.logo_mod div#maximenuck1365 ul.maximenuck li.maximenuck ul.maximenuck2 li a, div#maximenuck1365 ul.maximenuck2 li a{text-shadow: none !important;}
.logo_mod ul.maximenuck li.maximenuck.level1:hover{border: none !important;; background: none !important;}
.logo_mod div#maximenuck1365 ul.maximenuck li.maximenuck.level1:hover > a span.titreck{text-shadow: none !important; color: #fff;}
.logo_mod div#maximenuck1365 ul.maximenuck li.maximenuck.level1:hover > span.separator{text-shadow: none !important; color: #fff;}
.logo_mod div#maximenuck1365 div.floatck { background: #1c2f4f !important;}
/*end of mar272018*/
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<jdoc:include type="head" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--                 <link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template; ?>/css/template.css">
<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template; ?>/css/custom.css">
-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head><body>
<header class="head_er" style="background:url('<?php echo $slider_bg; ?>');background-repeat: no-repeat;background-size: 100% 100%;">
<!-- <div class="container-fluid slider <?php echo $slider_bg; ?>" >-->
    <section>
      <div class="container-fluid text-left logo_mod"> 
         
       <div class="row">
         
           <div class="col-sm-2 text-center">
                <a href="<?php echo $this->baseurl;?>"><?php echo $logo; ?></a>
               
           </div>
           <?php if ($this->countModules('top_menu')) : ?>
           <div class="col-sm-8">
                
               <jdoc:include type="modules" name="top_menu" style="xhtml" />
           </div>
        <?php endif; ?>
            <?php if ($this->countModules('log_button')) : ?>
           <div class="col-sm-2">
                
<!--               <jdoc:include type="modules" name="log_button" style="xhtml" />-->
           </div>
        <?php endif; ?>
       </div>
      </div>
    </section>
    <section class="top_text">
      <div class="container text-center">
        <h1 class="text-center text-white font-weight-bold display-4"><strong>Deluxe 4 Step</strong></h1>
        <h1 class="text-center text-danger font-weight-bold display-4"><strong>Malware Removal And</strong></h1>
        <h1 class="text-center text-white font-weight-bold display-4"><strong>Website Security Solution</strong></h1>
      </div>
      <div class="container text-center"> <img class="crazy_girl" src="templates/sitesassure/images/crazy girl.png" alt="image"/> </div>
    </section>
 
</header>
<main>
  <section>
    
    <?php if ($this->countModules('position-a')) : ?>
    <div class="container-fluid" style="background: <?php echo $position_a_color; ?>">
      <div class="position-a container text-center">
        <!--                      <h1>hi</h1>-->
      
        <jdoc:include type="modules" name="position-a" style="xhtml" />
      </div>
    </div>
    <?php endif; ?>
  </section>
  <section>
       <?php if ($this->countModules('position-a1') || $this->countModules('position-a2')) { ?>
    <div class="container-fluid banner1">
      <div class="position-a1a2 container text-center py-5">
           <?php if ($this->countModules('position-a1') && $this->countModules('position-a2')) { ?>
        <div class="row">
         
          <div class="col-sm-6 text-center text-white">
            <jdoc:include type="modules" name="position-a1" style="xhtml" />
          </div>
          
          <div class="col-sm-6 text-center text-white">
            <jdoc:include type="modules" name="position-a2" style="xhtml" />
          </div>
         
        </div>
           <?php }  else { ?>
          <div class="row">
         <?php if ($this->countModules('position-a1')) {?>
          <div class="col-sm-12 text-center text-white">
            <jdoc:include type="modules" name="position-a1" style="xhtml" />
          </div>
         <?php } ?>
               <?php if ($this->countModules('position-a2')) {?>
          <div class="col-sm-12 text-center text-white">
<!--            <jdoc:include type="modules" name="position-a2" style="xhtml" />-->
          </div>
               <?php } ?>
        </div>
        
           <?php }  ?>
      </div>
    </div>
           <?php } ?>
  </section>
  <section>
    <?php if ($this->countModules('position-b')) : ?>
    <div class="container-fluid pos_b_banner" style="background: <?php echo $position_b_color; ?>">
      <div class="position-b container text-center">
        <jdoc:include type="modules" name="position-b" style="xhtml" />
      </div>
    </div>
    <?php endif; ?>
  </section>
  <section>
    <?php if ($this->countModules('menu')) : ?>
    <nav>
      <div class="container-fluid" style="background: <?php echo $menu_color; ?>">
        <div class="menu container text-center">
            <div class="row">
                <div class="col-sm-10 text-center text-white">
                    <jdoc:include type="modules" name="menu" style="xhtml" />
                    
                </div>
                <div class="col-sm-2 text-center text-white">
                    
                     <jdoc:include type="modules" name="log_button" style="xhtml" />
                </div>
            </div>
          
        </div>
      </div>
    </nav>
    <?php endif; ?>
  </section>
  <section>
       <?php if ($_REQUEST['Itemid']!=101): ?>
       <div class="container-fluid">
      <div class="container py-5">
      <jdoc:include type="component" />
      </div>
       </div>
      <?php endif; ?>
      <?php if ($this->countModules('position-c1') || $this->countModules('position-c2')) { ?>
    <div class="container-fluid banner1">
      <div class="position-c1c2 container text-center py-5">
          <?php if ($this->countModules('position-c1') && $this->countModules('position-c2')) { ?>
        <div class="row">
         
          <div class="col-sm-6 text-center text-white">
            <jdoc:include type="modules" name="position-c1" style="xhtml" />
          </div>
         
          
          <div class="col-sm-6 text-center text-white">
            <jdoc:include type="modules" name="position-c2" style="xhtml" />
          </div>
         
        </div>
          
      <?php } else {?>
            <div class="row">
          <?php if ($this->countModules('position-c1')) : ?>
          <div class="col-sm-12 text-center text-white">
            <jdoc:include type="modules" name="position-c1" style="xhtml" />
          </div>
          <?php endif; ?>
          <?php if ($this->countModules('position-c2')) : ?>
          <div class="col-sm-12 text-center text-white">
            <jdoc:include type="modules" name="position-c2" style="xhtml" />
          </div>
          <?php endif; ?>
        </div>
      <?php } ?>
          
      </div>
    </div>
      <?php } ?>
  </section>
    
  <section>
      <?php if ($this->countModules('position-d1') || $this->countModules('position-d2') ) { ?>
    <div class="container-fluid" style="background: <?php echo $position_a_color; ?>">
      <div class="position-d1d2 container text-center py-5">
          <?php if ($this->countModules('position-d1') && $this->countModules('position-d1')) { ?>
        <div class="row">
         
          <div class="col-sm-6 text-center text-white">
            <jdoc:include type="modules" name="position-d1" style="xhtml" />
          </div>
         
        
          <div class="col-sm-6 text-center text-white">
            <jdoc:include type="modules" name="position-d2" style="xhtml" />
          </div>
         
        </div>
          <?php } else { ?>
          
          <div class="row">
         <?php if ($this->countModules('position-d1')) : ?>
          <div class="col-sm-12 text-center text-white">
            <jdoc:include type="modules" name="position-d1" style="xhtml" />
          </div>
          <?php endif; ?>
        <?php if ($this->countModules('position-d2')) : ?>
          <div class="col-sm-12 text-center text-white">
            <jdoc:include type="modules" name="position-d2" style="xhtml" />
          </div>
          <?php endif; ?>
        </div>
          <?php } ?>
      </div>
    </div>
      <?php } ?>
  </section>
  <section>
       <?php if ($this->countModules('position-e1') || $this->countModules('position-e2') ) { ?>
    <div class="container-fluid banner1">
       
      <div class="position-e1e2 container text-center py-5">
           <?php if ($this->countModules('position-e1') && $this->countModules('position-e2') ) { ?>
        <div class="row">
          
          <div class="col-sm-6 text-center text-white">
            <jdoc:include type="modules" name="position-e1" style="xhtml" />
          </div>
         
          
          <div class="col-sm-6 text-center text-white">
            <jdoc:include type="modules" name="position-e2" style="xhtml" />
          </div>
          
        </div>
            <?php } else { ?>
          <div class="row">
            <?php if ($this->countModules('position-e1')) :?>
          <div class="col-sm-12 text-center text-white">
            <jdoc:include type="modules" name="position-e1" style="xhtml" />
          </div>
         <?php endif; ?>
            <?php if ($this->countModules('position-e2')) :?>
          <div class="col-sm-12 text-center text-white">
            <jdoc:include type="modules" name="position-e2" style="xhtml" />
          </div>
           <?php endif; ?>
        </div>
          <?php } ?>
      </div>
      
    </div>
       <?php } ?>
  </section>
  <section>
        <?php if ($this->countModules('position-f1') || $this->countModules('position-f2') || $this->countModules('position-f3') || $this->countModules('position-f4') ) { ?>
    <div class="position-f1f2 container-fluid">
          <?php if ($this->countModules('position-f1') && $this->countModules('position-f2') && $this->countModules('position-f3') && $this->countModules('position-f4') ) { ?>
      <div class="row">
        
        <div class="col-sm-6 text-center text-white" style="background: <?php echo $position_f1_color; ?>">
          <jdoc:include type="modules" name="position-f1" style="xhtml" />
        </div>
        
        <div class="col-sm-6 text-center text-white" style="background: <?php echo $position_f2_color; ?>">
          <jdoc:include type="modules" name="position-f2" style="xhtml" />
        </div>
        
     
        <div class="col-sm-6 text-center text-white" style="background: <?php echo $position_f3_color; ?>">
          <jdoc:include type="modules" name="position-f3" style="xhtml" />
        </div>
       
        <div class="col-sm-6 text-center text-white" style="background: <?php echo $position_f4_color; ?>">
          <jdoc:include type="modules" name="position-f4" style="xhtml" />
        </div>
        
       </div>
        
        <?php }  elseif ($this->countModules('position-f1') && $this->countModules('position-f2') ) { ?>
       
        <div class="col-sm-12 text-center text-white" style="background: <?php echo $position_f1_color; ?>">
          <jdoc:include type="modules" name="position-f1" style="xhtml" />
        </div>
       
        
        <div class="col-sm-12 text-center text-white" style="background: <?php echo $position_f2_color; ?>">
          <jdoc:include type="modules" name="position-f2" style="xhtml" />
        </div>
         
        
        <?php }  elseif ($this->countModules('position-f1') && $this->countModules('position-f3') ) { ?>
        
        <div class="col-sm-12 text-center text-white" style="background: <?php echo $position_f1_color; ?>">
          <jdoc:include type="modules" name="position-f1" style="xhtml" />
        </div>
       
        
        <div class="col-sm-12 text-center text-white" style="background: <?php echo $position_f2_color; ?>">
          <jdoc:include type="modules" name="position-f3" style="xhtml" />
        </div>
        
        <?php } elseif ($this->countModules('position-f1') && $this->countModules('position-f4') ) { ?>
        
        <div class="col-sm-12 text-center text-white" style="background: <?php echo $position_f1_color; ?>">
          <jdoc:include type="modules" name="position-f1" style="xhtml" />
        </div>
       
        
        <div class="col-sm-12 text-center text-white" style="background: <?php echo $position_f2_color; ?>">
          <jdoc:include type="modules" name="position-f4" style="xhtml" />
        </div>
        
        <?php } elseif ($this->countModules('position-f2') && $this->countModules('position-f3') ) { ?>
        <div class="col-sm-12 text-center text-white" style="background: <?php echo $position_f1_color; ?>">
          <jdoc:include type="modules" name="position-f3" style="xhtml" />
        </div>
       
        
        <div class="col-sm-12 text-center text-white" style="background: <?php echo $position_f2_color; ?>">
          <jdoc:include type="modules" name="position-f2" style="xhtml" />
        </div>
        
        
        <?php } elseif ($this->countModules('position-f2') && $this->countModules('position-f4') ) { ?>
        
        <div class="col-sm-12 text-center text-white" style="background: <?php echo $position_f1_color; ?>">
          <jdoc:include type="modules" name="position-f4" style="xhtml" />
        </div>
       
        
        <div class="col-sm-12 text-center text-white" style="background: <?php echo $position_f2_color; ?>">
          <jdoc:include type="modules" name="position-f2" style="xhtml" />
        </div>
        
        <?php } elseif ($this->countModules('position-f3') && $this->countModules('position-f4') ) { ?>
        <div class="col-sm-12 text-center text-white" style="background: <?php echo $position_f1_color; ?>">
          <jdoc:include type="modules" name="position-f3" style="xhtml" />
        </div>
       
        
        <div class="col-sm-12 text-center text-white" style="background: <?php echo $position_f2_color; ?>">
          <jdoc:include type="modules" name="position-f4" style="xhtml" />
        </div>
        
        
        <?php } else { ?>
        <div class="row">
        <?php if ($this->countModules('position-f1')) :?>
        <div class="col-sm-12 text-center text-white" style="background: <?php echo $position_f1_color; ?>">
          <jdoc:include type="modules" name="position-f1" style="xhtml" />
        </div>
        <?php endif; ?>
        <?php if ($this->countModules('position-f2')) :?>
        <div class="col-sm-12 text-center text-white" style="background: <?php echo $position_f2_color; ?>">
          <jdoc:include type="modules" name="position-f2" style="xhtml" />
        </div>
        <?php endif; ?>
         <?php if ($this->countModules('position-f3')) :?>
        <div class="col-sm-12 text-center text-white" style="background: <?php echo $position_f3_color; ?>">
          <jdoc:include type="modules" name="position-f3" style="xhtml" />
        </div>
       <?php endif; ?>
            <?php if ($this->countModules('position-f4')) :?>
        <div class="col-sm-12 text-center text-white" style="background: <?php echo $position_f4_color; ?>">
          <jdoc:include type="modules" name="position-f4" style="xhtml" />
        </div>
        <?php endif; ?>
       </div>
        
        <?php } ?>
        
    </div>
           <?php } ?>
  </section>
  <section>
    <div class="container-fluid banner1">
      <div class="position-g1g2 container text-center">
        <div class="row">
          <?php if ($this->countModules('position-g1')) : ?>
          <div class="col-sm-12 text-center text-white">
            <jdoc:include type="modules" name="position-g1" style="xhtml" />
          </div>
          <?php endif; ?>
        </div>
      </div>
      <div class="container text-center">
        <div class="row">
          <?php if ($this->countModules('position-g2')) : ?>
          <div class="col-sm-12 text-center text-white">
            <jdoc:include type="modules" name="position-g2" style="xhtml" />
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
  <section>
    <?php if ($this->countModules('position-h')) : ?>
    <div class="position-h container-fluid" style="background: <?php echo $position_h_color; ?>">
      <div class="container text-center">
        <jdoc:include type="modules" name="position-h" style="xhtml" />
      </div>
    </div>
    <?php endif; ?>
  </section>
  <section>
    <?php if ($this->countModules('position-bottom')) : ?>
    <div class="position-bootom container-fluid" style="background: <?php echo $position_bottom_color; ?>">
      <div class="container text-center">
        <jdoc:include type="modules" name="position-bottom" style="xhtml" />
      </div>
    </div>
    <?php endif; ?>
  </section>
  <section>
         <?php if ($this->countModules('position-i1') || $this->countModules('position-i2') ) { ?>
    <div class="container-fluid banner_cntct" style="background: url('<?php echo $contact_bg; ?>');background-repeat: no-repeat;background-size: 100% 100%;">
      <div class="position-i1i2 container py-5">
          <?php if ($this->countModules('position-i1') && $this->countModules('position-i2') ) { ?>
        <div class="row">
        
          <div class="col-sm-6 text-white">
            <jdoc:include type="modules" name="position-i1" style="none" />
          </div>
        
          <div class="col-sm-6 text-white">
            <jdoc:include type="modules" name="position-i2" style="none" />
          </div>
         
        </div>
              <?php } else {?>
          <div class="row">
          <?php if ($this->countModules('position-i1')) : ?>
          <div class="col-sm-12 text-center text-white">
            <jdoc:include type="modules" name="position-i1" style="none" />
          </div>
          <?php endif; ?>
          <?php if ($this->countModules('position-i2')) : ?>
          <div class="col-sm-12 text-center text-white">
            <jdoc:include type="modules" name="position-i2" style="none" />
          </div>
          <?php endif; ?>
        </div>
           <?php } ?>
      </div>
    </div>
         <?php } ?>
  </section>
</main>
<footer>
  <?php if ($this->countModules('footer')) : ?>
  <div class="container-fluid" style="background: <?php echo $position_footer_color; ?>">
      <div class="container">
    <div class="row">
      <div class="col-sm-3 text-center text-white"> <?php echo $logo; ?> </div>
      <?php if ($this->countModules('footer')) : ?>
      <div class="col-sm-9 text-center text-dark">
        <jdoc:include type="modules" name="footer" style="none" />
        <p class="copyright_p"><?php echo $copright_text;?></p>
      </div>
      <?php endif; ?>
    </div>
      </div> 
  </div>
  <?php endif; ?>
</footer>
</body>
</html>
