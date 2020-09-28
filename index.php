<?php
get_header();
?>
    <!-- Preloader Start -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- Preloader Ends -->
    <!-- Wrapper Starts -->
    <div id="switcher" class="" style="margin-left: -500px; display: none;">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul class="color-style">
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img src=<?php echo THEME_PATH."images/styleswitcher/purple.png" ?> alt="purple"></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img src=<?php echo THEME_PATH."images/styleswitcher/red.png" ?> alt="red"></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img src=<?php echo THEME_PATH."images/styleswitcher/blueviolet.png" ?> alt="blueviolet"></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img src=<?php echo THEME_PATH."images/styleswitcher/blue.png" ?> alt="blue"></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img src=<?php echo THEME_PATH."images/styleswitcher/goldenrod.png" ?> alt="goldenrod"></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img src=<?php echo THEME_PATH."images/styleswitcher/magenta.png" ?> alt="magenta"></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img src=<?php echo THEME_PATH."images/styleswitcher/yellowgreen.png" ?> alt="yellowgreen"></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img src=<?php echo THEME_PATH."images/styleswitcher/orange.png" ?> alt="orange"></a>
                </li>
				<li>
                    <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img src=<?php echo THEME_PATH."images/styleswitcher/green.png" ?> alt="green"></a>
                </li>
				<li>
                    <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img src=<?php echo THEME_PATH."images/styleswitcher/yellow.png" ?> alt="yellow"></a>
                </li>
            </ul>
			<h4>BODY SKIN</h4>

            <label> <input class="dark_switch" type="radio" name="color_style" id="is_light" value="light"> Light</label>
		    <label> <input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark" checked="checked">  Dark</label><br>
			
            <h4 class="mt10">Language</h4>
            <?php do_action('wpml_add_language_selector'); ?>
            <div id="hideSwitcher">×</div>
        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor" style="margin-left: 0px; display: block;"><i class="fa fa-cog fa-spin"></i></div>
    <div class="wrapper">
		<div class="main-picture hide-on-med-and-down">
		</div>
        <div id="bl-main" class="bl-main">
            <!-- Top Left Section Starts -->
            <section class="topleft">
                <div class="bl-box row valign-wrapper">
                    <div class="row valign-wrapper mb-0">
                        <div class="title-heading">
                            <div class="selector uppercase" id="selector">
                                <h3 class="ah-headline p-none m-none">
                                    <span class="font-weight-400">Hi There ! I'm</span>
									<span class="my-name">HENRY PHUC LE</span>
                                    <span class="ah-words-wrapper">
										<b class="is-visible">BLOGGER</b>
										<b>MARKETER</b>
										<b>ENTREPRENEUR</b>
									</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Top Left Section Ends -->
            <!-- About Section Starts -->
            <?php get_template_part( 'template-parts/about-me', '' ); ?>
            <!-- About Ends -->
            <!-- Portfolio Starts -->
            <?php get_template_part( 'template-parts/my-story', '' ); ?>
            <!-- Portfolio Section Ends -->
            <!-- Contact Section Starts -->
            <?php get_template_part( 'template-parts/reaching-me-out', '' ); ?>
            <!-- Contact Section Ends -->
            <!-- Portfolio Panel Items Starts -->
            <?php get_template_part( 'template-parts/works', '' ); ?>
            <!-- Portfolio Panel Items Ends -->
        </div>
    </div>
    <!-- Wrapper Ends -->
    <!-- MODAL -->
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <div class="row" style="background-color:#aaa;">
                <div class="column">
                    <img src=<?php echo THEME_PATH."images/projects/project-5.jpg" ?> alt="project">
                    <div class="video-container">
                        <iframe class="video" src="https://www.youtube.com/embed/7e90gBu4pas" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="column">
                    <div class="accordion">Section 1 <i class="fa fa-plus" aria-hidden="true"></i><i class="fa fa-minus" aria-hidden="true"></i></div>
                    <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <div class="accordion">Section 2 <i class="fa fa-plus" aria-hidden="true"></i><i class="fa fa-minus" aria-hidden="true"></i></div>
                    <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <div class="accordion">Section 3 <i class="fa fa-plus" aria-hidden="true"></i><i class="fa fa-minus" aria-hidden="true"></i></div>
                    <div class="panel">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            
            </div>
        </div>
    </div>

<?php

get_footer();
?>