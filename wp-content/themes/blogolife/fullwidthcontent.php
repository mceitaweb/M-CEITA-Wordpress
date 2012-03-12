<?php
/**
 * The default template for displaying content
 * @package wplook
 * @subpackage BlogoLife
 * @since BlogoLife 1.0
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="entry-header"><h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'wplook' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1></header>

	<div class="entry-content">
	<div class="img-container" style="width: 400px; float: left; display: block;"><img src="http://204.106.31.83/wp-content/uploads/2012/03/mceita_home_pic.jpg" alt="" title="mceita_home_pic" width="380" height="253" class="size-full wp-image-574" /></div>
<div class="options_container" style="width: 400px; float: left; display: block;"><h3>M-CEITA is your trusted advisor for adoption and effective use of Electronic Health Records (EHR). Which statement best describes you?</h3>
<h2 class="handle"><a style="float: left;" href="#">I'm a healthcare provider who has already adopted an EHR</a></h2>
<div class="service_content_container">
<div class="block">
M-CEITA can help you
<ul>
<li>Learn about Meaningful Use</li>
<li>Attest to Meaningful Use and collect incentive payments from the government.</li>
<li>Enhance your IT workflow with Lean process redesign</li>
<li>Connect with other State and Federal resources</li>
</ul>
</div>
</div>

<h2 class="handle"><a style="float: left;" href="#">I'm a healthcare provider who is considering EHR adoption</a></h2>

<div class="service_content_container">
<div class="block">
M-CEITA can help you
<ul>
<li>Select an EHR vendor</li>
<li>Plan for EHR implementation</li>
</ul>
</div>
</div>

<h2 class="handle"><a style="float: left;" href="#">I'm a healthcare provider and I don't know why I should adopt an EHR</a></h2>
<div class="service_content_container">
<div class="block">
M-CEITA can help you
<ul>
<li>Understand the costs and benefits of EHR</li>
<li>Plan for EHR implementation</li>
<li>Attest to Meaningful Use and collect incentive payments from the government</li>
</ul>
</div>
</div>

<h2 class="handle"><a style="float: left;" href="#">I'm just curious about the Meaningful Use EHR Incentive Program</a></h2>
<div class="service_content_container">
<div class="block">
M-CEITA can help you
<ul>
<li>Learn about Meaningful Use </li>
</ul>
</div>
</div>

</div>

	</div>
	<div class="clear"></div>
</article>	