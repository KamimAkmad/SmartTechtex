<?php
$successRegister= $this->session->userdata('successRegister');
$failRegister= $this->session->userdata('failRegister');
$loginFalse= $this->session->userdata('failLogin');
$successLogin= $this->session->userdata('successLogin');
$session = $this->session->userdata('dataLogin');
?>
<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="images/favicon.png">
    <!-- Site Title  -->
    <title>Kamim | Test masuk PT Smart Techtex</title>
    <!-- Bundle and Base CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assets/css/vendor.bundle.css?ver=200">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/style-salvia.css?ver=200">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="<?=base_url();?>assets/css/theme.css?ver=200">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/Lobibox.min.css">
    <link rel="stylesheet" href="<?=base_url();?>assets/css/notifications.css">
	<style>
		.select2-container--open {
			z-index: 9999999 !important;
		}
	</style>
</head>

<body class="nk-body body-wider mode-onepage">

    <body class="nk-body body-wider mode-onepage">
        <div class="nk-wrap">
            <header class="nk-header page-header is-transparent is-sticky is-shrink is-split" id="header">
                <!-- Header @s -->
                <div class="header-main">
                    <div class="container container-xxl">
                        <div class="header-wrap">
                            <!-- Logo @s -->
                            <div class="header-logo logo animated" data-animate="fadeInDown" data-delay=".65">
                                <a href="./" class="logo-link">
                                    <img class="logo-dark" src="images/logo.png" srcset="images/logo2x.png 2x" alt="logo">
                                    <img class="logo-light" src="images/logo-full-white.png" srcset="images/logo-full-white2x.png 2x" alt="logo">
                                </a>
                            </div>
                            <!-- Menu Toogle @s -->
                            <div class="header-nav-toggle">
                                <a href="javascript:void(0);" class="navbar-toggle" data-menu-toggle="header-menu">
                                    <div class="toggle-line">
                                        <span></span>
                                    </div>
                                </a>
                            </div>
                            <!-- Menu @s -->
                            <div class="header-navbar header-navbar-s2 flex-grow-1 animated" data-animate="fadeInDown" data-delay=".75">
                                <nav class="header-menu header-menu-s2" id="header-menu">
                                    <ul class="menu mx-auto">
										<li class="menu-item has-sub logout" style="display:none;">
											<a class="menu-link nav-link menu-toggle" href="javascript:void(0);">Create</a>
												<div class="menu-sub menu-drop">
													<div class="menu-mega-innr">
														<ul class="menu-mega-list">
															<li class="menu-item"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#create-popup">Posting</a></li>
															<li class="menu-item"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#type-popup">Type Post</a></li>
															<li class="menu-item"><a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#register-user">User</a></li>
														</ul>
													</div>
												</div>
										</li>
                                        <li class="menu-item ">
                                            <a class="menu-link nav-link " href="#article">View Posting</a>
                                        </li>
                                        <li class="menu-item logout" style="display:none;">
                                            <a class="menu-link nav-link " href="#typepost">View Type Post</a>
                                        </li>
                                        <li class="menu-item logout" style="display:none;">
                                            <a class="menu-link nav-link " href="#user">View User</a>
                                        </li>
                                    </ul>
                                    <ul class="menu-btns">
                                        <li class="login"><a href="javascript:void(0);" class="btn btn-md btn-auto btn-secondary btn-outline no-change" data-bs-toggle="modal" data-bs-target="#register-popup"><span>Register</span></a></li>
                                        <li class="language-switcher language-switcher-s1 toggle-wrap logout" style="display:none;">
											<a class="fullName toggle-tigger" href="javascript:void(0);" style="color:#415076;">
												<?php if($session){echo $session['name'];}?>
											</a>
											<ul class="toggle-class toggle-drop toggle-drop-left drop-list drop-list-sm">
												<li><a href="javascript:void(0);">Setting</a></li>
											</ul>
										</li>
										<li>
											<a  href="javascript:void(0);" class="login btn btn-md btn-auto btn-secondary no-change focus" data-bs-toggle="modal" data-bs-target="#login-popup"><span>Login</span></a>
											<a  href="logout" class="logout btn btn-md btn-auto btn-secondary no-change focus"style="display:none;"><span>Logout</span></a>
										</li>
                                        
                                    </ul>
                                </nav>
                            </div><!-- .header-navbar @e -->
                        </div>
                    </div>
                </div><!-- .header-main @e -->
                <!-- Banner @s -->
                <div class="header-banner bg-theme-grad-s2">
                    <div class="nk-banner">
                        <div class="banner banner-fs banner-single banner-s1">
                            <div class="banner-wrap my-auto">
                                <div class="container container-xxl">
                                    <div class="row align-items-center justify-content-center justify-content-lg-between gutter-vr-60px">
                                        <div class="col-lg-6 col-xl-5 text-center text-lg-start">
                                            <div class="banner-caption tc-light animated" data-animate="fadeInUp" data-delay="1.25">
                                                <div class="cpn-head mt-0">
                                                    <h1 class="title title-lg-s2" style="color:red;">S-PLUS INDONESIA</h1>
                                                </div>
                                                <div class="cpn-text cpn-text-s3 pb-2">
                                                    <p>PT.Smart Techtex adalah Perusahaan No.1 manufacture of material Building</p>
                                                </div>
                                                <div class="cpn-btns">
                                                    <ul class="btn-grp">
                                                        <li class="logout" style="display:none;"><a class="btn btn-lg btn-secondary" href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#create-popup">Create Posting</a></li>
                                                        <li><a class="btn btn-lg btn-primary btn-outline" href="#article">View Posting</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .col -->
                                        <div class="col-lg-6 col-xl-7 col-md-8 col-sm-9">
                                            <div class="banner-gfx banner-gfx-s2 position-relative animated" data-animate="fadeInUp" data-delay="1.35">
                                                <img src="images/app-screens/sc-mockup.png" alt="mockup">
                                                <div class="gfx-slider gfx-screen round" data-slide-speed="2500" data-slide-show="true" data-anim-loop="true" data-anim-speed="1500">
                                                    <ul class="slides">
                                                        <li class="gfx-slide">
                                                            <div class="bg-image round">
                                                                <img src="images/app-screens/pintu.webp" alt="Pintu">
                                                            </div>
                                                        </li>
                                                        <li class="gfx-slide">
                                                            <div class="bg-image round">
                                                                <img src="images/app-screens/jendela.webp" alt="Jendela">
                                                            </div>
                                                        </li>
                                                        <li class="gfx-slide">
                                                            <div class="bg-image round">
                                                                <img src="images/app-screens/masker.webp" alt="Masker">
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .col -->
                                    </div><!-- .row -->
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-banner -->
                    <div class="nk-ovm shape-z6">
                        <div class="nk-ovm-inner"></div>
                    </div>
                </div>
                <!-- .header-banner @e -->
            </header>
            <main class="nk-pages">
                <section class="section animated" data-animate="fadeInUp" data-delay=".1"  id="article">
                    <div class="container">
                        <div class="nk-block nk-block-feature">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-mb-10">
                                    <div class="section-head text-center animated" data-animate="fadeInUp" data-delay="0.1">
                                        <h2 class="title title-regular">Our Posting</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
								<table id="postTable" class="display" style="width:100%">
									<thead>
										<tr>
											<th>No</th>
											<th>Title</th>
											<th>Type</th>
											<th>User Post</th>
											<th>Action</th>
										</tr>
									</thead>
								</table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // -->
                <section class="section animated pdt-0 ov-v has-ovm logout" style="display:none;" data-animate="fadeInUp" data-delay=".1"  id="typepost"></section>
                <!-- // -->
                <section class="section animated pdt-0 ov-v has-ovm logout" style="display:none;" data-animate="fadeInUp" data-delay=".1"  id="user"></section>
                <!-- // -->
            </main>
            <!-- Footer -->
            <footer class="nk-footer bg-theme ov-h">
                <section class="section section-m section-footer tc-light bg-transparent ov-h">
                    <div class="container">
                        <!-- Block @s -->
                        <div class="nk-block block-footer mgb-m30">
                            <div class="row justify-content-between">
                                <div class="col-md-3 col-sm-4 mb-sm-0 col-6">
                                    <div class="wgs wgs-menu animated" data-animate="fadeInUp" data-delay="0.3">
                                        <h6 class="wgs-title">News & Blogs</h6>
                                        <div class="wgs-body">
                                            <ul class="wgs-links ">
                                                <li><a href="javascript:void(0);">Artikel</a></li>
                                                <li><a href="javascript:void(0);">Cerpen</a></li>
                                                <li><a href="javascript:void(0);">Idea</a></li>
                                                <li><a href="javascript:void(0);">Esai</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- .col -->
                            </div><!-- .row -->
                        </div><!-- .block @e -->
                    </div>
                </section>
                <div class="section section-sm pt-0 footer-bottom animated" data-animate="fadeInUp" data-delay="0.5">
                    <div class="container">
                        <div class="row justify-content-md-between align-items-center">
                            <div class="col-lg-6 col-md-3 col-sm-4">
                                <a href="./" class="wgs-logo-s2 d-inline-block mb-2 mb-md-0">
                                    <img src="images/logo-full-white.png" srcset="images/logo-full-white2x.png 2x" alt="logo">
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-8">
                                <div class="copyright-text">
                                    <ul class="d-flex justify-content-between align-items-center flex-wrap flex-md-nowrap">
                                        <li><a href="javascript:void(0);">User Agreement</a></li>
                                        <li><a href="javascript:void(0);">Privacy Policy</a></li>
                                        <li>
                                            <p>&copy;2022 - Kamim. Test Splus</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nk-ovm shape-z7 ov-h"></div>
            </footer>
        </div>

    <!-- Modal @s -->
	<script src="https://www.google.com/recaptcha/api.js?onload=myCallBack&render=explicit" async defer></script>
	<script>
		var login;
		var register;
		var create;
		var myCallBack = function() {
			login = grecaptcha.render('captcha-login', {
				'sitekey' : '6LciqCkUAAAAAODbEqKmob2trZgOx1SipVkCmDGD',
			});
		};
	</script>
	<div class="modal fade" id="login-popup">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="javascript:void(0);" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                <div class="ath-container m-0">
                    <div class="ath-body">
                        <h5 class="ath-heading title">Log in <small class="tc-default">with your sPlus Account</small></h5>
                        <form method="post" id="login-validation" action="<?=base_url();?>login">
							
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="text" name="emailLogin" class="input-bordered" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="password" name="passLogin" class="input-bordered" placeholder="Password">
                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap captcha">
									<div id="captcha-login"></div>
									<input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-md">Log In</button>
                        </form>
                        <div class="ath-note text-center"> Don’t have an account? <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#register-popup"> <strong>Register here</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .modal @e -->
    <!-- Modal @s -->
    <div class="modal fade" id="register-popup">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="javascript:void(0);" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                <div class="ath-container m-0">
                    <div class="ath-body">
                        <h5 class="ath-heading title">Register <small class="tc-default">Create New Account sPlus</small></h5>
                        <form method="post" id="register-form" action="<?=base_url();?>register">
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="text" name="nameRegister" class="input-bordered" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="number" name="phoneRegister" class="input-bordered" placeholder="Your Phone">
                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="text" name="emailRegister" class="input-bordered" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="password" name="passRegister" class="input-bordered" placeholder="Password">
                                </div>
                            </div>
                            <button type="reset" class="reset d-none"></button>
                            <button type="submit" class="btn btn-primary btn-block btn-md">Sign Up</button>
                        </form>
                        <div class="ath-note text-center"> Already have an account? <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-dismiss="modal" data-bs-target="#login-popup"> <strong>Login here</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="register-user">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="javascript:void(0);" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                <div class="ath-container m-0">
                    <div class="ath-body">
                        <h5 class="ath-heading title">Create <small class="tc-default">New Account sPlus</small></h5>
                        <form method="post" id="registerUser" action="<?=base_url();?>register">
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="text" name="nameUser" class="input-bordered" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="number" name="phoneUser" class="input-bordered" placeholder="Your Phone">
                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="text" name="emailUser" class="input-bordered" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="password" name="passUser" class="input-bordered" placeholder="Password">
                                </div>
                            </div>
                            <button type="submit" class="btnUpdate btn btn-grad btn-sm">Save</button>
                            <button type="reset" class="reset btn btn-primary btn-outline btn-sm"data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="update-user">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="javascript:void(0);" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                <div class="ath-container m-0">
                    <div class="ath-body">
                        <h5 class="ath-heading title">Update <small class="tc-default">Data Account sPlus</small></h5>
                        <form method="post" id="updateUser" action="<?=base_url();?>updateuser">
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="text" name="nameUpdateUser" class="input-bordered" placeholder="Your Name">
                                    <input type="hidden" name="idUpdateUser" class="input-bordered" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="number" name="phoneUpdateUser" class="input-bordered" placeholder="Your Phone">
                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="text" name="emailUpdateUser" class="input-bordered" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="password" name="passUpdateUser" class="input-bordered" placeholder="Password">
                                </div>
                            </div>
                            <button type="submit" class="btnUpdate btn btn-grad btn-sm">Save</button>
                            <button type="reset" class="reset btn btn-primary btn-outline btn-sm"data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .modal @e -->
    <!-- Modal @s -->
    <div class="modal fade" id="type-popup">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="javascript:void(0);" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                <div class="ath-container m-0">
                    <div class="ath-body">
                        <h5 class="ath-heading title titleTP">Create <small class="tc-default">New Type Posting</small></h5>
                        <form method="post" id="typeposting-form" action="<?=base_url();?>typeposting">
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="text" name="jenisTP" class="input-bordered" placeholder="Jenis posting">
                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <select name="typeTP" class="select" data-select2-theme="bordered" >
                                        <option value="">Select Type</option>
                                        <option value="Artikel">Artikel</option>
                                        <option value="Idea">Idea</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btnUpdate btn btn-grad btn-sm">Save</button>
                            <button type="reset" class="reset btn btn-primary btn-outline btn-sm"data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="type-update">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="javascript:void(0);" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                <div class="ath-container m-0">
                    <div class="ath-body">
                        <h5 class="ath-heading title titleTP">Update <small class="tc-default">Data Type Posting</small></h5>
                        <form method="post" id="typeposting-update" action="<?=base_url();?>typepostingupdate">
                            <div class="field-item">
                                <div class="field-wrap">
                                    <input type="text" name="jenisUpdateTP" class="input-bordered" placeholder="Jenis posting">
                                    <input type="hidden" name="idUpdateTP" class="input-bordered">
                                </div>
                            </div>
                            <div class="field-item">
                                <div class="field-wrap">
                                    <select name="typeUpdateTP" class="select" data-select2-theme="bordered" >
                                        <option value="">Select Type</option>
                                        <option value="Artikel">Artikel</option>
                                        <option value="Idea">Idea</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btnUpdate btn btn-grad btn-sm">Save</button>
                            <button type="reset" class="reset btn btn-primary btn-outline btn-sm"data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .modal @e -->
    <div class="modal fade" id="create-popup">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <a href="javascript:void(0);" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                <div class="modal-body p-md-4 p-lg-5">
                    
				<h5 class="ath-heading title">Create New Posting</h5>
				<form method="post" id="posting-form" action="<?=base_url();?>create">
                        <div class="field-item">
                            <label class="field-label">Title</label>
                            <div class="field-wrap">
                                <input name="titleCreate" type="text" class="input-bordered" placeholder="Title Article">
                            </div>
                        </div>
                        <div class="field-item">
                            <label class="field-label">Description</label>
                            <div class="field-wrap">
                                <textarea name="deskripsiCreate" class="input-bordered input-textarea" placeholder="Fill your Description"></textarea>
                            </div>
                        </div>
                        <div class="field-item">
                            <label class="field-label">Posting Type</label>
                            <div class="field-wrap">
                                <select name="typeCreate" class="select" data-select2-theme="bordered" >
                                    <option value="">Select Type</option>
									<?php
										foreach($post_type->result() as $type){
									?>
                                    	<option value="<?= $type->id_postType?>"><?= $type->jenis_postType?></option>
									<?php
										}
											
									?>
                                </select>
                            </div>
                        </div>
                        <div class="field-item">
                            <label class="field-label">Created:</label>
							<span class="badge badge-xs badge-hot"><?php if($session){echo $session['name'];}?></span>
                        </div>
                        <div class="field-item"  style="float:right;">
						<button type="reset" class="reset btn btn-primary btn-outline"data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                        <button type="submit" class="btn btn-grad">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!-- .modal @e -->
    <div class="modal fade" id="content-popup">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <a href="javascript:void(0);" class="modal-close" data-bs-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
                <div class="modal-body p-md-4 p-lg-5 contentTitle"></div>
            </div>
        </div>
    </div><!-- .modal @e -->
        <!-- preloader -->
        <div class="preloader preloader-alt no-split"><span class="spinner spinner-alt"><img class="spinner-brand" src="images/logo-full-white.png" alt=""></span></div>
        <!-- JavaScript -->
        <script src="assets/js/jquery.bundle.js?ver=200"></script>
        <script src="assets/js/scripts.js?ver=200"></script>
        <script src="assets/js/charts.js?ver=200"></script>
        <script src="assets/js/charts.js?ver=200"></script>
        <script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="<?=base_url();?>assets/js/Lobibox.js"></script>
		<script src="<?=base_url();?>assets/js/jquery.validate.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				<?php
				if($session){
				?>
					$('.login').css('display','none');
					$('.logout').css('display','block');
                    $('#typepost').load("<?=base_url();?>viewTypepost", function(){
                        typeTable = $('#typeTable').DataTable( {
                            "processing":true,
                            "ajax": "datatypepost.json"
                        });
                    });
                    $('#typeposting-form').validate({
                        errorElement: 'div',
                        errorClass: 'error-input',
                        ignore: ".ignore, .select2-input",
                        rules: {
                            jenisTP: {required: true,minlength:3},
                            typeTP: {required: true},
                        },
                        messages: {
                            jenisTP: {required: "Jenis tidak boleh kosong",minlength: "Isian minimal 3 angka",},
                            typeTP: {required: "Tipe posting harus dipilih",},
                        },
                        submitHandler: function(form) {
                            var PostData = {
                                'jenisTP' : $('[name=jenisTP]').val(),
                                'typeTP' : $('[name=typeTP]').val(),
                            };
                            $.ajax({
                                type: "post",
                                url: "<?=base_url();?>typeposting",
                                data: PostData,
                                dataType: "json",
                                success: function(response){
                                    if(response['status'] == "success"){
                                        $('#type-popup').modal('toggle');
								    	$(".reset").trigger("click");
                                        $('[name=typeTP]').val(null).trigger('change');
                                        Lobibox.notify('success', {
                                            sound: false,
                                            size: 'mini',
                                            title: 'Berhasil',
                                            msg: response['msg']
                                        });
                                        typeTable.ajax.reload();
                                    }else{
                                        Lobibox.notify('error', {
                                            sound: false,
                                            size: 'mini',
                                            title: 'Terjadi Kesalahan!',
                                            msg: response['msg']
                                        });
                                    }
                                }
                            });
                            return false;
                        },
                    });
                    $(document).on('click','.updateTP',  async function (e) {
                        e.preventDefault();
                        var id = $(this).attr('dataid');
                        var jenis = $(this).attr('dataJenis');
                        var type = $(this).attr('dataType');
                        $('[name=idUpdateTP]').val(id);
                        $('[name=jenisUpdateTP]').val(jenis);
                        $('[name=typeUpdateTP]').select2().val(type).trigger("change");
                    })
                    $('#typeposting-update').validate({
                        errorElement: 'div',
                        errorClass: 'error-input',
                        ignore: ".ignore, .select2-input",
                        rules: {
                            jenisUpdateTP: {required: true,minlength:3},
                            typeUpdateTP: {required: true},
                        },
                        messages: {
                            jenisUpdateTP: {required: "Jenis tidak boleh kosong",minlength: "Isian minimal 3 angka",},
                            typeUpdateTP: {required: "Tipe posting harus dipilih",},
                        },
                        submitHandler: function(form) {
                            var PostData = {
                                'idTP' : $('[name=idUpdateTP]').val(),
                                'jenisTP' : $('[name=jenisUpdateTP]').val(),
                                'typeTP' : $('[name=typeUpdateTP]').val(),
                            };
                            $.ajax({
                                type: "post",
                                url: "<?=base_url();?>typepostingupdate",
                                data: PostData,
                                dataType: "json",
                                success: function(response){
                                    if(response['status'] == "success"){
                                        $('#type-update').modal('toggle');
                                        Lobibox.notify('success', {
                                            sound: false,
                                            size: 'mini',
                                            title: 'Berhasil',
                                            msg: response['msg']
                                        });
                                        typeTable.ajax.reload();
                                    }else{
                                        Lobibox.notify('error', {
                                            sound: false,
                                            size: 'mini',
                                            title: 'Terjadi Kesalahan!',
                                            msg: response['msg']
                                        });
                                    }
                                }
                            });
                            return false;
                        },
                    });
                    $(document).on('click','.deleteTP',  async function (e) {
                        e.preventDefault();
                        var deleteData = {
                            'dataId' : $(this).attr('dataid'),
                        };
                        Lobibox.confirm({
                            title : 'Confirmation!',
                            msg: "Are you sure you want to delete this Type Post?",
                            callback: function ($this, type) {
                                if(type=="yes"){
                                    $.ajax({
                                        type: "post",
                                        url: "<?=base_url();?>deleteTP",
                                        data: deleteData,
                                        dataType: "json",
                                        success: function(response){
                                            if(response['status'] == "success"){
                                                Lobibox.notify('success', {
                                                    sound: false,
                                                    size: 'mini',
                                                    title: 'Success!',
                                                    msg: "Data berhasil dihapus!"
                                                });
                                                typeTable.ajax.reload();
                                            }else{
                                                Lobibox.notify('error', {
                                                    sound: false,
                                                    size: 'mini',
                                                    title: 'Error!',
                                                    msg: "Data gagal dihapus!"
                                                });
                                            }
                                        }
                                    });
                                }
                            }
                        });  
                    })
                    $('#user').load("<?=base_url();?>viewUser", function(){
                        userTable = $('#userTable').DataTable( {
                            "processing":true,
                            "ajax": "datauser.json"
                        });
                    });
                    $('#registerUser').validate({
                        errorElement: 'div',
                        errorClass: 'error-input',
                        ignore: ".ignore",
                        rules: {
                            nameUser: {required: true,minlength: 3,},
                            phoneUser: {required: true,minlength: 10,maxlength: 13,},
                            emailUser: {required: true,email: true},
                            passUser: {required: true,minlength: 6,},
                        },
                        messages: {
                            nameUser: {
                                required: "Nama tidak boleh kosong.",
                                minlength: 'Nama min 6 karakter',
                            },
                            phoneUser: {
                                required: "Phone tidak boleh kosong.",
                                minlength: 'Phone min 10 karakter',
                                maxlength: 'Phone max 13 karakter',
                            },
                            emailUser: {
                                required: "Email tidak boleh kosong.",
                                email: 'Silakan isi alamat email yang benar',
                            },
                            passUser: {
                                required: "Password tidak boleh kosong.",
                                minlength: 'Password min 6 karakter',
                            }
                        },
                        submitHandler: function(form) {
                            var PostData = {
                                'nameRegister' : $('[name=nameUser]').val(),
                                'phoneRegister' : $('[name=phoneUser]').val(),
                                'emailRegister' : $('[name=emailUser]').val(),
                                'passRegister' : $('[name=passUser]').val(),
                            };
                            $.ajax({
                                type: "post",
                                url: "<?=base_url();?>register",
                                data: PostData,
                                dataType: "json",
                                success: function(response){
                                    if(response['status'] == "success"){
                                        $('#register-user').modal('toggle');
                                        $(".reset").trigger("click");
                                        Lobibox.notify('success', {
                                            sound: false,
                                            size: 'mini',
                                            title: 'Success!',
                                            msg: response['msg']
                                        });
                                        userTable.ajax.reload();
                                    }else{
                                        Lobibox.notify('error', {
                                            sound: false,
                                            size: 'mini',
                                            title: 'Kesalahan!',
                                            msg: response['msg']
                                        });
                                    }
                                }
                            });
                            return false;
                        },
                    });
                    $(document).on('click','.updateUser',  async function (e) {
                        e.preventDefault();
                        var id = $(this).attr('dataid');
                        var dataName = $(this).attr('dataName');
                        var dataphone = $(this).attr('dataphone');
                        var dataemail = $(this).attr('dataemail');
                        var datavallPass = $(this).attr('datavallPass');
                        $('[name=idUpdateUser]').val(id);
                        $('[name=nameUpdateUser]').val(dataName);
                        $('[name=phoneUpdateUser]').val(dataphone);
                        $('[name=emailUpdateUser]').val(dataemail);
                        $('[name=passUpdateUser]').val(datavallPass);
                    })
                    $('#updateUser').validate({
                        errorElement: 'div',
                        errorClass: 'error-input',
                        ignore: ".ignore",
                        rules: {
                            nameUpdateUser: {required: true,minlength: 3,},
                            phoneUpdateUser: {required: true,minlength: 10,maxlength: 13,},
                            emailUpdateUser: {required: true,email: true},
                            passUpdateUser: {required: true,minlength: 6,},
                        },
                        messages: {
                            nameUpdateUser: {
                                required: "Nama tidak boleh kosong.",
                                minlength: 'Nama min 6 karakter',
                            },
                            phoneUpdateUser: {
                                required: "Phone tidak boleh kosong.",
                                minlength: 'Phone min 10 karakter',
                                maxlength: 'Phone max 13 karakter',
                            },
                            emailUpdateUser: {
                                required: "Email tidak boleh kosong.",
                                email: 'Silakan isi alamat email yang benar',
                            },
                            passUpdateUser: {
                                required: "Password tidak boleh kosong.",
                                minlength: 'Password min 6 karakter',
                            }
                        },
                        submitHandler: function(form) {
                            var PostData = {
                                'id_user' : $('[name=idUpdateUser]').val(),
                                'nameRegister' : $('[name=nameUpdateUser]').val(),
                                'phoneRegister' : $('[name=phoneUpdateUser]').val(),
                                'emailRegister' : $('[name=emailUpdateUser]').val(),
                                'passRegister' : $('[name=passUpdateUser]').val(),
                            };
                            $.ajax({
                                type: "post",
                                url: "<?=base_url();?>updateUser",
                                data: PostData,
                                dataType: "json",
                                success: function(response){
                                    if(response['status'] == "success"){
                                        $('#update-user').modal('toggle');
                                        $(".reset").trigger("click");
                                        Lobibox.notify('success', {
                                            sound: false,
                                            size: 'mini',
                                            title: 'Success!',
                                            msg: response['msg']
                                        });
                                        userTable.ajax.reload();
                                    }else{
                                        Lobibox.notify('error', {
                                            sound: false,
                                            size: 'mini',
                                            title: 'Kesalahan!',
                                            msg: response['msg']
                                        });
                                    }
                                }
                            });
                            return false;
                        },
                    });
                    $(document).on('click','.deleteUser',  async function (e) {
                        e.preventDefault();
                        var deleteData = {
                            'dataId' : $(this).attr('dataid'),
                        };
                        Lobibox.confirm({
                            title : 'Confirmation!',
                            msg: "Are you sure you want to delete this User?",
                            callback: function ($this, type) {
                                if(type=="yes"){
                                    $.ajax({
                                        type: "post",
                                        url: "<?=base_url();?>deleteUser",
                                        data: deleteData,
                                        dataType: "json",
                                        success: function(response){
                                            if(response['status'] == "success"){
                                                Lobibox.notify('success', {
                                                    sound: false,
                                                    size: 'mini',
                                                    title: 'Success!',
                                                    msg: "Data berhasil dihapus!"
                                                });
                                                userTable.ajax.reload();
                                            }else{
                                                Lobibox.notify('error', {
                                                    sound: false,
                                                    size: 'mini',
                                                    title: 'Error!',
                                                    msg: "Data gagal dihapus!"
                                                });
                                            }
                                        }
                                    });
                                }
                            }
                        });  
                    })
				<?php
				}
				?>
				postTable = $('#postTable').DataTable( {
					"processing":true,
					"ajax": "dataposting.json"
				});
				$(document).on('click','.view',  async function (e) {
					e.preventDefault();
					var viewData = {
						'dataId' : $(this).attr('dataid'),
					};
					$('.contentTitle').load("<?=base_url();?>viewArticle/"+$(this).attr('dataid'));
				})
				$(document).on('click','.update',  async function (e) {
					e.preventDefault();
					var id = $(this).attr('dataid');
					var select = $(this).attr('dataSelect');
					$(".contentTitle").load("<?=base_url();?>updateArticle/"+id, function(){
						$("#typeUpdate"+id).select2().val(select).trigger("change");
					});
				})
				$(document).on('click','.delete',  async function (e) {
					e.preventDefault();
					var deleteData = {
						'dataId' : $(this).attr('dataid'),
					};
					Lobibox.confirm({
						title : 'Confirmation!',
						msg: "Are you sure you want to delete this posting?",
						callback: function ($this, type) {
							console.log(type);
							if(type=="yes"){
								$.ajax({
									type: "post",
									url: "<?=base_url();?>delete",
									data: deleteData,
									dataType: "json",
									success: function(response){
										if(response['status'] == "success"){
											Lobibox.notify('success', {
												sound: false,
												size: 'mini',
												title: 'Success!',
												msg: "Data berhasil dihapus!"
											});
											postTable.ajax.reload();
										}else{
											Lobibox.notify('error', {
												sound: false,
												size: 'mini',
												title: 'Error!',
												msg: "Data gagal dihapus!"
											});
										}
									}
								});
							}
						}
					});  
				})
				$('#login-validation').validate({
					errorElement: 'div',
					errorClass: 'error-input',
					ignore: ".ignore",
					rules: {
						emailLogin: {required: true,email: true},
						passLogin: {required: true,minlength: 6,},
						hiddenRecaptcha: {
						   required: function() {
							   if(grecaptcha.getResponse(login) == '') {
								   return true;
							   } else {
								   return false;
							   }
						   }
						}
					},
					messages: {
						passLogin: {
							required: "Password tidak boleh kosong.",
							minlength: 'Password min 6 karakter',
						},
						emailLogin: {
							required: "Email tidak boleh kosong.",
							email: 'Silakan isi alamat email yang benar',
						},
						hiddenRecaptcha: "Silahkan ceklis Google-reCAPTCHA.",
					},
					submitHandler: function(form) {
						var PostData = {
							'passLogin' : $('[name=passLogin]').val(),
							'emailLogin' : $('[name=emailLogin]').val(),
						};
						$.ajax({
							type: "post",
							url: "<?=base_url();?>login",
							data: PostData,
							dataType: "json",
							success: function(response){
								if(response['status'] == "success"){
									$('#login-popup').modal('toggle');
									Lobibox.notify('success', {
										sound: false,
										size: 'mini',
										title: 'Login Sukses',
										msg: "Selamat datang, "+response['msg']+"!"
									});
									$('.fullName').text(response['msg']);
                                    setTimeout(function() {
                                        location.reload();
                                    }, 2000);
									postTable.ajax.reload();
								}else{
									Lobibox.notify('error', {
										sound: false,
										size: 'mini',
										title: 'Kesalahan validasi',
										msg: response['msg']
									});
								}
							}
						});
						return false;
					},
				});
                
				$('#register-form').validate({
					errorElement: 'div',
					errorClass: 'error-input',
					ignore: ".ignore",
					rules: {
						nameRegister: {required: true,minlength: 3,},
						phoneRegister: {required: true,minlength: 10,maxlength: 13,},
						emailRegister: {required: true,email: true},
						passRegister: {required: true,minlength: 6,},
					},
					messages: {
						nameRegister: {
							required: "Nama tidak boleh kosong.",
							minlength: 'Nama min 6 karakter',
						},
						phoneRegister: {
							required: "Phone tidak boleh kosong.",
							minlength: 'Phone min 10 karakter',
							maxlength: 'Phone max 13 karakter',
						},
						emailRegister: {
							required: "Email tidak boleh kosong.",
							email: 'Silakan isi alamat email yang benar',
						},
						passRegister: {
							required: "Password tidak boleh kosong.",
							minlength: 'Password min 6 karakter',
						}
					},
					submitHandler: function(form) {
						var PostData = {
							'nameRegister' : $('[name=nameRegister]').val(),
							'phoneRegister' : $('[name=phoneRegister]').val(),
							'emailRegister' : $('[name=emailRegister]').val(),
							'passRegister' : $('[name=passRegister]').val(),
						};
						$.ajax({
							type: "post",
							url: "<?=base_url();?>register",
							data: PostData,
							dataType: "json",
							success: function(response){
								if(response['status'] == "success"){
									$('#register-popup').modal('toggle');
									$(".reset").trigger("click");
									Lobibox.notify('success', {
										sound: false,
										size: 'mini',
										title: 'Success!',
										msg: response['msg']
									});
								}else{
									Lobibox.notify('error', {
										sound: false,
										size: 'mini',
										title: 'Kesalahan!',
										msg: response['msg']
									});
								}
							}
						});
						return false;
					},
				});
				$('#posting-form').validate({
					errorElement: 'div',
					errorClass: 'error-input',
					ignore: ".ignore, .select2-input",
					rules: {
						titleCreate: {required: true,minlength:3},
						deskripsiCreate: {required: true,minlength:5},
						typeCreate: {required: true},
					},
					messages: {
						titleCreate: {required: "Title tidak boleh kosong",minlength: "Isian minimal 3 angka",},
						deskripsiCreate: {required: "Deskripsi tidak boleh kosong",minlength: "Isian minimal 5 angka",},
						typeCreate: {required: "Tipe Artikel harus dipilih",},
					},
					submitHandler: function(form) {
						var PostData = {
							'titleCreate' : $('[name=titleCreate]').val(),
							'deskripsiCreate' : $('[name=deskripsiCreate]').val(),
							'typeCreate' : $('[name=typeCreate]').val(),
						};
						$.ajax({
							type: "post",
							url: "<?=base_url();?>create",
							data: PostData,
							dataType: "json",
							success: function(response){
								if(response['status'] == "success"){
									$('#create-popup').modal('toggle');
									$(".reset").trigger("click");
                                    $('[name=typeCreate]').val(null).trigger('change');
									Lobibox.notify('success', {
										sound: false,
										size: 'mini',
										title: 'Posting Sukses',
										msg: response['msg']
									});
									postTable.ajax.reload();
								}else{
									Lobibox.notify('error', {
										sound: false,
										size: 'mini',
										title: 'Posting Gagal',
										msg: response['msg']
									});
								}
							}
						});
						return false;
					},
				});
                $(document).on('click', '.btnUpdate', function(){
					var id = $(this).attr('dataid');
                    $('#posting-update').validate({
                        errorElement: 'div',
                        errorClass: 'error-input',
                        ignore: ".ignore, .select2-input",
                        rules: {
                            titleUpdate: {required: true,minlength:3},
                            deskripsiUpdate: {required: true,minlength:5},
                            typeUpdate: {required: true},
                        },
                        messages: {
                            titleUpdate: {required: "Title tidak boleh kosong",minlength: "Isian minimal 3 angka",},
                            deskripsiUpdate: {required: "Deskripsi tidak boleh kosong",minlength: "Isian minimal 5 angka",},
                            typeUpdate: {required: "Tipe Artikel harus dipilih",},
                        },
                        submitHandler: function(form) {
                            var PostData = {
                                'titleUpdate' : $('[name=titleUpdate]').val(),
                                'deskripsiUpdate' : $('[name=deskripsiUpdate]').val(),
                                'typeUpdate' : $('[name=typeUpdate]').val(),
                            };
                            console.log(PostData);
                            $.ajax({
                                type: "post",
                                url: "<?=base_url();?>update/"+id,
                                data: PostData,
                                dataType: "json",
                                success: function(response){
                                    if(response['status'] == "success"){
                                        $('#content-popup').modal('toggle');
                                        $(".reset").trigger("click");
                                        Lobibox.notify('success', {
                                            sound: false,
                                            size: 'mini',
                                            title: 'Posting Berhasil update',
                                            msg: response['msg']
                                        });
                                        postTable.ajax.reload();
                                    }else{
                                        Lobibox.notify('error', {
                                            sound: false,
                                            size: 'mini',
                                            title: 'Posting Gagal update',
                                            msg: response['msg']
                                        });
                                    }
                                }
                            });
                            return false;
                        },
                    });
                });
			});
		</script>
    </body>
</html>