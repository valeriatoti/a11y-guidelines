<?php include_once('../includes/xml-declaration.php'); ?>
<?php $id='wai'; $nav=2; $nav_items=array('wcag' => 'WCAG', 'aria' => 'WAI-ARIA'); $category='content'; $page_name='EPUB and Web Accessibility'; ?>
<!DOCTYPE html>
<html xml:lang="en" lang="en"
	xmlns="http://www.w3.org/1999/xhtml"
	xmlns:epub="http://www.idpf.org/2007/ops">
	
	<head>
		<?php include_once('../includes/title.php'); ?>
		<?php include_once('../includes/html5-shiv.php'); ?>
		<link type="text/css" rel="stylesheet" href="../css/epub3.css"/>
		
		<style type="text/css">
			dl dt {
				font-style: italic;
				margin-top: 1em;
			}
			dl > dd > ol {
				margin-left: 0em;
				padding-left: 0em;
			}
		</style>
	</head>
	
	<body>
		<?php include_once('../includes/header.php'); ?>
		
		<section id="wai" class="section">
			<?php include_once('../includes/page-title.php'); ?>
			
			<section class="desc">
				<p>Under the hood of any EPUB you will find a range of web technologies, but key among them for content production 
					are XHTML5, SVG, CSS and JavaScript. Creating accessible content using these technologies is the focus of this guide, 
					and many of the practices outlined in it naturally are drawn from the work of the World Wide Web Consortium (W3C),
					the leading authority on accessible web content.</p>
				
				<p>The W3C's Web Accessibility Initiative (WAI, pronounced <em>way</em>) maintains two sets of guidelines covering
					the creation of accessible web-based content:</p>
				
				<dl>
					<dt><a href="http://www.w3.org/TR/WCAG/">Web Content Accessibility Guidelines (WCAG) 2.0</a></dt>
					<dd>WCAG (pronounced wuh-cag) defines guidelines for the markup and presentation of web content.</dd>
					<dt><a href="http://www.w3.org/TR/wai-aria/">Accessible Rich Internet Applications (WAI-ARIA) 1.0</a></dt>
					<dd>WAI-ARIA defines how to create dynamic (scripted) content accessibly.</dd>
				</dl>
				
				<p>The goal of this guide is not to attempt to replace, supersede or otherwise override either of these 
					guidelines, but to function as a means of simplifying the mapping of many of their best practices onto EPUB 
					production. (Note: the guide does not attempt to provide complete coverage of either standard, only practices 
					common to ebook publishing.)</p>
				
				<p>Further, the checklist and checkpoints provided on this site are designed to facilitate accessible 
					production, not to be conformance checklists to either standard. When compliance with WCAG or WAI-ARIA
					is mandated, whether by legislation or binding agreement, compliance must be measured directly against 
					those standards.</p>
				
				<p>This guide does present information not found in the WAI guidelines, notably WCAG. As EPUB currently makes use of 
					XML serialization of HTML5, which is still under development, new WCAG practices have not yet been released to
					address this content (but the maintainers of this guide are endeavouring to keep the information consistent with 
					evolving practices). There are also many unique features to EPUB, such as PLS lexicons and the Navigation Document, 
					that are not specifically addressed in WCAG or HTML5 at this time.</p>
				
				<p>The following subsections provide a quick introduction to the WAI guidelines for those who are not familiar
					with their purpose.</p>
			</section>
			
			<section id="wai-wcag" class="reqs">
				<h3>Web Content Acessibility Guidelines (WCAG)</h3>
				
				<section id="wcag-overview">
					<h4>Overview</h4>
					
					<p>WCAG is the internationally recognized standard for creating accessible web content. 
						By aligning EPUB 3 with the web stack, the IDPF has also aligned the creation of EPUB content with the best 
						practices outlined in WCAG.</p>
					
					<p>The primary advantage of this approach to accessibility is that it keeps EPUB aligned with the body of work
						that has already been done to make web content accessible. It also immediately makes web content accessibility 
						specialists knowledgeable about the issues involved in ebook production. And, more generally, it means that 
						content creators seeking to discover how to make their publications more accessible have a wealth of general 
						resources available to them beyond just this site.</p>
					
					<p>But EPUB is also its own unique format, and WCAG is not a simple blanket set of practices that all apply 
						in every situation. This guide aims to bridge this gap for EPUB content by focusing on how to make rich 
						publications that adhere to WCAG. Unlike the wild web, where each site's design often brings its own 
						unique issues, books are generally composed of the same sets of building blocks, making accessibility 
						mappings useful to a broad range of publishers.</p>
				</section>
				
				<section id="wcag-structure">
					<h4>Structure</h4>

					<p>The WCAG guidelines take a layered approach to accessibility, starting with four high-level <em>principles</em> that all
						content creators should strive to achieve. These principles are defined as follows:</p>
					
					<ol>
						<li><a href="http://www.w3.org/TR/WCAG/#perceivable">Perceivable</a>—Information and user interface components must be 
							presentable to users in ways they can perceive.</li>
						<li><a href="http://www.w3.org/TR/WCAG/#operable">Operable</a>—User interface components and navigation must be operable.</li>
						<li><a href="http://www.w3.org/TR/WCAG/#understandable">Understandable</a>—Information and the operation of user interface 
							must be understandable.</li>
						<li><a href="http://www.w3.org/TR/WCAG/#robust">Robust</a>—Content must be robust enough that it can be interpreted reliably 
							by a wide variety of user agents, including assistive technologies.</li>
					</ol>
					
					<p>At the next level, each of these principles is broken down into a set of <em>guidelines</em> for achieving compliance.</p>
					
					<dl>
						<dt>Perceivable</dt>
						<dd>
							<ol class="none">
								<li>1.1 Provide text alternatives for any non-text content so that it can be changed into other forms people need, 
									such as large print, braille, speech, symbols or simpler language.</li>
								<li>1.2 Provide alternatives for time-based media.</li>
								<li>1.3 Create content that can be presented in different ways (for example simpler layout) without losing 
									information or structure.</li>
								<li>1.4 Make it easier for users to see and hear content including separating foreground from background.</li>
							</ol>
						</dd>
						<dt>Operable</dt>
						<dd>
							<ol class="none">
								<li>2.1 Make all functionality available from a keyboard.</li>
								<li>2.2 Provide users enough time to read and use content.</li>
								<li>2.3 Do not design content in a way that is known to cause seizures.</li>
								<li>2.4 Provide ways to help users navigate, find content, and determine where they are.</li>
							</ol>
						</dd>
						<dt>Understandable</dt>
						<dd>
							<ol class="none">
								<li>3.1 Make text content readable and understandable.</li>
								<li>3.2 Make Web pages appear and operate in predictable ways.</li>
								<li>3.3 Help users avoid and correct mistakes.</li>
							</ol>
						</dd>
						<dt>Robust</dt>
						<dd>
							<ol class="none">
								<li>4.1 Maximize compatibility with current and future user agents, including assistive technologies.</li>
							</ol>
						</dd>
					</dl>
					
					<p>A further level below the guidelines are the <em>success criteria</em>, which is the level where WCAG moves
						from a general outline for accessible content to how to practically achieve it. These criteria are quite
						extensive, so are not be reproduced here. For more information, refer to the 
						<a href="http://www.w3.org/TR/WCAG20/">WCAG guidelines</a>.</p>
					
					<p>After these three levels of progressive refinement of what it takes to create accessible content, you
						reach the <em>sufficient and advisory techniques</em> for testing compliance to the success criteria.
						These criteria provide the format-specific information you need to verify your content.</p>
					
					<p>This guide focuses on the techniques, but understanding the higher-level concepts is also necessary 
						to truly understand what makes content accessible. You will find links to the relevant techniques 
						throughout this site, while the introductions to each section endeavour to explain why making these 
						structures accessible is necessary (i.e., how they fit into the higher-level guidelines).</p>
				</section>
				
				<section id="wcag-mapping">
					<h4>Conformance</h4>
					
					<p>WCAG defines three levels of conformance (from 'A' to 'AAA') to indicate the breadth of support a site provides, where
						an AA rating is typically required to meet most accessibility legislation.</p>
					
					<p>These levels are useful when dealing with contractors, outsourcers and other parties where a baseline agreement
						on what constitutes an accessible EPUB 3 publication is needed. As WCAG 2.0 does not yet address HTML5, 
						and because EPUB has its own unique features, no attempt is made in this guide to define a similar conformance 
						ranking system or try to list exactly what is required to meet any given level at this time. Content 
						creators are instead encouraged to strive for the highest degree of conformance to the success criteria.</p>
					
					<p>Note that when evaluating an EPUB for conformance, the <em>entire</em> publication should be treated as though it constitutes 
						a single document. Although individual documents within any publication may be conformant to WCAG, if the content is predominantly
						inaccessible it must not presented as though it adheres to any success level. For example, it would not accurate to portray a 
						fixed-layout, image-based publication with no text alternatives as accessible because it contains an introduction with accessible
						text and a heading.</p>
				</section>
			</section>
			
			<section id="wai-aria" class="reqs">
				<h3>Accessible Rich Internet Applications (ARIA)</h3>
				
				<section id="aria-overview">
					<h4>Overview</h4>
					
					<p>Scripting provides a greater challenge to accessible production in ebooks than does markup, as is true on the wider web.
						Where content structures are generally similar across the publishing industry, interactive widgets and dynamic content
						are typically unique to each publication, making it difficult to provide simple one-size-fits-all guidelines. Content creators
						must instead learn how to use ARIA roles, states and properties to enhance this kind of content.</p>
					
					<p>Roles provide a means of indicating the nature an element plays in the document, similar to the structural semantics that
						the <a href="semantics/epub-type.php"><code>epub:type</code> attribute</a> provides, but aimed more specifically
						at relaying pertinent information to accessibility APIs.</p>
					
					<p>States and properties are another means of conveying information, but about the nature of elements that are being
						used in non-standard ways (and sometimes to enhance normal usage). Creating dynamic controls and widgets
						using standard HTML elements coupled with JavaScripted events is a common practice, but one that leaves
						an information vacuum. For example, if an image is a button, is it currently pressed or not? States and properties
						enable someone using an assistive technology to interact with these controls by presenting the information
						in a way the AT can use.</p>
					
					<p>This guide provides only a basic introduction to ARIA in the scripting section.</p>
				</section>
				
				<section id="aria-differences">
					<h4>Conformance</h4>
					
					<p>Unlike WCAG, ARIA does not have a grading system for content compliance. Due to the dynamic nature of the content
						that benefits from ARIA roles, states and properties, and the range of needs that readers may have, the best approach
						to applying ARIA is to test your content for actual usability, or to have it tested by organizations that specialize 
						in this content.</p>
				</section>
			</section>
		</section>
		
		<?php include_once('../includes/footer.php'); ?>
	</body>
</html>