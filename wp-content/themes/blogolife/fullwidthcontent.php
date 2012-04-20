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
	<div class="img-container" style="width: 400px; float: left; display: block;">
	<img src="/wp-content/uploads/2012/03/mceita_home_pic.jpg" alt="" title="mceita_home_pic" width="380" height="253" class="size-full wp-image-574" />
	<img src="/wp-content/uploads/2012/03/mceita_home_pic2.jpg" alt="" title="mceita_home_pic2" width="380" height="253" class="alignnone size-full wp-image-599" />
	<img src="/wp-content/uploads/2012/03/mceita_home_pic3.jpg" alt="" title="mceita_home_pic3" width="380" height="253" class="alignnone size-full wp-image-600" />
	</div>
<div class="options_container" style="width: 400px; float: left; display: block;"><h2 style="margin-top: -5px;">M-CEITA is your trusted advisor for adoption and effective use of Electronic Health Records (EHR).<br /><br />Which statement best describes you?</h2>
<h2 class="handle"><a style="float: left;" href="#">I'm a healthcare provider who has already adopted an EHR</a></h2>
<div class="service_content_container">
<div class="block">
M-CEITA can help you
<ul>
<li><a href="/?page_id=177">Learn about Meaningful Use</a></li>
<li><a href="/?page_id=14">Attest to Meaningful Use and collect incentive payments from the government</a></li>
<li><a href="/?page_id=14">Enhance your IT workflow with Lean process redesign</a></li>
<li><a href="/?page_id=14">Connect with other State and Federal resources</a></li>
</ul>
</div>
</div>

<h2 class="handle"><a style="float: left;" href="#">I'm a healthcare provider who is considering EHR adoption</a></h2>

<div class="service_content_container">
<div class="block">
M-CEITA can help you
<ul>
<li><a href="/?page_id=14">Select an EHR vendor</a></li>
<li><a href="/?page_id=14">Plan for EHR implementation</a></li>
</ul>
</div>
</div>

<h2 class="handle"><a style="float: left;" href="#">I'm a healthcare provider and I don't know why I should adopt an EHR</a></h2>
<div class="service_content_container">
<div class="block">
M-CEITA can help you
<ul>
<li><a href="/?page_id=20">Understand the costs and benefits of EHR</a></li>
<li><a href="/?page_id=14">Plan for EHR implementation</a></li>
<li><a href="/?page_id=14">Attest to Meaningful Use and collect incentive payments from the government</a></li>
</ul>
</div>
</div>

<h2 class="handle"><a style="float: left;" href="#">I'm just curious about the Meaningful Use EHR Incentive Program</a></h2>
<div class="service_content_container">
<div class="block">
M-CEITA can help you
<ul>
<li><a href="/?page_id=177">Learn about Meaningful Use</a></li>
</ul>
</div>
</div>

</div>

	</div>
	<div class="clear"></div>
</article>	