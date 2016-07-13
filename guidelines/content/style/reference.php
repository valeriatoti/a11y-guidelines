<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='css025'; $nav=2; $nav_items=array('css21' => 'CSS 2.1', 'css21classes' => 'CSS 2.1 Pseudo-Classes', 'css21elements' => 'CSS 2.1 Pseudo-Elements', 'css3speech' => 'CSS Speech Module', 'css3text' => 'CSS Text Level 3', 'css3writemode' => 'CSS Writing Modes Module Level 3', 'css3multicol' => 'CSS Multi-column Layout Module'); $category='style'; $page_name='CSS Property Reference'; ?>
<!DOCTYPE html>
<html xml:lang="en" lang="en"
	xmlns="http://www.w3.org/1999/xhtml"
	xmlns:epub="http://www.idpf.org/2007/ops">
	
	<head>
		<?php include_once('../../includes/title.php'); ?>
		<?php include_once('../../includes/html5-shiv.php'); ?>
		<link type="text/css" rel="stylesheet" href="../../css/epub3.css"/>
		<style type="text/css">
			table, th, td {
				border: none;
			}
			table {
				width: 95%;
				border-bottom: 1px solid rgb(0,0,0);
			}
			
			tr {
				border-top: 1px solid rgb(0,100,0);
			}
			
			tr:hover {
				background-color: rgb(255,255,200);
			}
			
			th {
				color: rgb(0,0,0);
				background-color: rgb(236,236,236);
			}
			
			td {
				vertical-align: top;
				padding: 0.4em;
			}
			
			td.property {
				font-size: 90%;
				font-weight: bold;
				color: rgb(150,150,150);
				width: 12em;
				padding: 0.5em;
				border-right: 1px dashed rgb(0,0,200);
			}
			
			td.property ul {
				margin: 0em;
				padding: 0em;
			}
			
			td ul {
				margin: 0em;
				padding: 0em 0em 0em 1.3em;
			}
			
			ul.nobull {
				list-style-type: none;
			}
			
			td.issues {
				padding-left: 1em;
			}
			
			td li {
				padding-bottom: 0.5em;
			}
			
		</style>
		<?php include_once('../../includes/js.php'); ?> 
	</head>
	
	<body>
		<?php include_once('../../includes/header.php'); ?>
		
		<section id="css025" class="section">
			<?php include_once('../../includes/page-title.php'); ?> 
			
			<section id="css025-usage" class="usage">
				<p>EPUB 3 reading systems that visually render content are expected to provide support for the CSS 
					properties listed on this page, but support is not required. Properties not listed here may 
					still be used (e.g., from evolving CSS 3 modules), but content authors should use due diligence 
					and assess the impact on rendering and accessibility when using such properties.</p>
			</section>
			
			<section id="css025-css21" class="reqs">
				<h3>CSS 2.1</h3>
				
				<table>
					<thead>
						<tr>
							<th>Property</th>
							<th>Considerations</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/colors.html#propdef-background">background</a>
							</td>
							<td class="issues">
								The <code class="property">background</code> property is a shorthand for defining one or more 
								properties. Refer to each individual background-*  property for potential issues.<br/>
								Note that background properties are largely unsupported at this time outside of
								fixed layouts.
							</td>
						</tr>
						
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/colors.html#propdef-background-attachment">background-attachment</a>
							</td>
							<td class="issues">
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/colors.html#propdef-background-color">background-color</a>
							</td>
							<td class="issues">
								<ul>
									<li>Ensure sufficient contrast with text color</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/colors.html#propdef-background-image">background-image</a>
							</td>
							<td class="issues">
								<ul>
									<li>Ensure sufficient contrast with content color (text and graphic)</li>
									<li>High mix of gradients and colors in images can make reading overlaid text difficult</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/colors.html#propdef-background-position">background-position</a>
							</td>
							<td class="issues">
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/colors.html#propdef-background-repeat">background-repeat</a>
							</td>
							<td class="issues">
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<ul class="nobull">
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border">border</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-top">border-top</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-right">border-right</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-bottom">border-bottom</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-left">border-left</a></li>
								</ul>
							</td>
							<td class="issues">
								These <code class="property">border</code> properties are shorthands for defining
								one or more properties. Refer to each individual border-* property for issues
							</td>
						</tr>
						
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/tables.html#propdef-border-collapse">border-collapse</a>
							</td>
							<td class="issues"></td>
						</tr>
	
						<tr>
							<td class="property">
								<ul class="nobull">
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-color">border-color</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-top-color">border-top-color</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-right-color">border-right-color</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-bottom-color">border-bottom-color</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-left-color">border-left-color</a></li>
								</ul>
							</td>
							<td class="issues">
								<ul>
									<li>An element's border color must never be the sole means of conveying information about
										the nature of its content. See the <a href="color.php">Color info page</a></li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/tables.html#propdef-border-spacing">border-spacing</a>
							</td>
							<td class="issues"></td>
						</tr>
	
						<tr>
							<td class="property">
								<ul class="nobull">
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-style">border-style</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-top-style">border-top-style</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-right-style">border-right-style</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-bottom-style">border-bottom-style</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-left-style">border-left-style</a></li>
								</ul>
							</td>
							<td class="issues"></td>
						</tr>
	
						<tr>
							<td class="property">
								<ul class="nobull">
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-width">border-width</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-top-width">border-top-width</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-right-width">border-right-width</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-bottom-width">border-bottom-width</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-border-left-width">border-left-width</a></li>
								</ul>
							</td>
							<td class="issues">
								<ul>
									<li>When using color to convey meaning, ensure borders are thick enough that visual
										readers can discern the color</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<ul class="nobull">
									<li><a href="http://www.w3.org/TR/CSS21/visuren.html#propdef-bottom">bottom</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/visuren.html#propdef-left">left</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/visuren.html#propdef-right">right</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/visuren.html#propdef-top">top</a></li>
								</ul>
							</td>
							<td class="issues">
								<ul>
									<li>Reading system support for absolute and fixed positioning is not guaranteed</li>
									<li>Content should not be positioned in a way that makes its discoverability
										problematic for readers with low vision and/or using zooming software</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/tables.html#propdef-caption-side">caption-side</a>
							</td>
							<td class="issues"></td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/visuren.html#propdef-clear">clear</a>
							</td>
							<td class="issues"></td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/visufx.html#propdef-clip">clip</a>
							</td>
							<td class="issues">
								<ul>
									<li>Although clipping content to 1 pixel is sometimes used on the Web to hide
										content, support for the property and its reliance on absolute positioning
										makes the practice not recommended in EPUBs</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/colors.html#propdef-color">color</a>
							</td>
							<td class="issues">
								<ul>
									<li>See the <a href="color.php">Color info page</a> for the range of considerations
										when coloring text and graphical content</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/generate.html#propdef-content">content</a>
							</td>
							<td class="issues">
								<ul>
									<li>Any content inserted using this property should be purely presentational, as it
										typically won't be available to assistive technologies</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<ul class="nobull">
									<li><a href="http://www.w3.org/TR/CSS21/generate.html#propdef-counter-increment">counter-increment</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/generate.html#propdef-counter-reset">counter-reset</a></li>
								</ul>
							</td>
							<td class="issues"></td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/ui.html#propdef-cursor">cursor</a>
							</td>
							<td class="issues">
								<ul>
									<li>Avoid changing the cursor such that clickable elements are no longer
										distinguishable</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								direction
							</td>
							<td class="issues">
								The <code class="property">direction</code> property is not supported in EPUB 3. HTML5 markup, such as 
								the <code><a href="http://www.w3.org/TR/html5/text-level-semantics.html#the-bdi-element">bdi</a></code>
								and <code><a href="http://www.w3.org/TR/html5/text-level-semantics.html#the-bdo-element">bdo</a></code> 
								elements and <code><a href="http://www.w3.org/TR/html5/dom.html#the-dir-attribute">dir</a></code>
								attribute, should be used to express directionality
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/visuren.html#propdef-display">display</a>
							</td>
							<td class="issues">
								<ul>
									<li>Setting the <code class="property">display</code> property to the value
										<code class="value">none</code> removes the element from rendering
										both visually and to assistive technologies. It is not a mechanism for hiding
										content from visual display that should be rendered by ATs.</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/tables.html#propdef-empty-cells">empty-cells</a>
							</td>
							<td class="issues">
								<ul>
									<li>Setting the <code class="property">empty-cells</code> property is not required
										for HTML5 tables, as borders are rendered (do not insert placeholder text such 
										as dashes or non-breaking spaces)</li>
									<li>For forwards compatibility with EPUB 2 reading systems, the 
										property should be set to the value <code class="value">show</code> 
										to ensure table borders are drawn around empty cells</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/visuren.html#propdef-float">float</a>
							</td>
							<td class="issues">
								<ul>
									<li>Elements should not be floated in a way that makes their discoverability
										problematic for readers with low vision and/or using zooming software</li>
									<li>Ensure sufficient margins exist around floated content so that it is clearly
										distinguishable from the content that flows around it</li>
									<li>When floating primary content to the right, ensure that it is not positioned
										in the markup to accommodate the float (i.e., it occurs at the logical reading
										point so that it makes sense in non-visual playback contexts)</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/fonts.html#propdef-font">font</a>
							</td>
							<td class="issues">
								The <code class="property">font</code> property is a shorthand for defining
								one or more properties. Refer to each individual font-* property 
								for issues
							</td>
						</tr>
						
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/fonts.html#propdef-font-family">font-family</a>
							</td>
							<td class="issues">
								<ul>
									<li>Avoid fonts that do not provide sufficient character differentiation, such as sans-serif
										fonts that represent capital I, lower-case L and the number 1 as identical (or near-identical)
										characters (e.g., Arial).</li>
									<li>Avoid cursive and highly ornamented fonts that can be difficult for readers to
										decipher</li>
									<li>Try to limit the number of fonts used in any given publication and use families
										consistently (e.g., one family for headings and one for body content)</li>
									<li>Give preference to fonts that provide sufficient kerning between characters</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/fonts.html#propdef-font-size">font-size</a>
							</td>
							<td class="issues">
								<ul>
									<li>Use relative sizes such as percentages and ems to facilitate scaling</li>
									<li>Ensure default font size does not affect legibility of the prose (e.g., avoid
										specifying <code class="value">x-small</code>, <code class="value">xx-small</code> and
										equivalent font sizes)</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/fonts.html#propdef-font-style">font-style</a>
							</td>
							<td class="issues">
								<ul>
									<li>Use CSS to apply italics only for decorative purposes (similar to using the 
										<code>i</code> element). Use <code>em</code> tags if the words are 
										to be stressed</li>
									<li>Avoid lengthy use of decorative italics, as italicized words can be harder to read
										than roman face</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/fonts.html#propdef-font-variant">font-variant</a>
							</td>
							<td class="issues"></td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/fonts.html#propdef-font-weight">font-weight</a>
							</td>
							<td class="issues">
								<ul>
									<li>Use CSS to apply bolding only for decorative purposes (similar to using the 
										<code>b</code> element). Use <code>strong</code> tags if the words are 
										to be stressed</li>
									<li>Avoid lengthy use of decorative bolding, as bolded words can be harder to read
										than roman face</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/visudet.html#propdef-height">height</a>
							</td>
							<td class="issues">
								<ul>
									<li>Assistive technologies typically ignore content that has 0 height and/or width
										set on its containing element, so do not use this property to hide content
										that is only intended for non-visual playback.</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/text.html#propdef-letter-spacing">letter-spacing</a>
							</td>
							<td class="issues">
								<ul>
									<li>The <code class="property">letter-spacing</code> property can be used to increase
										the kerning between letters to improve the readability of tightly constructed fonts</li>
									<li>Whitespace should never be added between the letters of a word that is not intended
										to be spelled out. Always use this property to visually expand the spacing between
										characters when such spacing is necessary</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/visudet.html#propdef-line-height">line-height</a>
							</td>
							<td class="issues">
								<ul>
									<li>Use caution when changing line heights. Slight increases in the line height can 
										improve overall readability, but too much space between lines can have the
										opposite effect (e.g., it becomes harder to distinguish paragraphs)</li>
									<li>Avoid shrinking the line height to compress content</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/generate.html#propdef-list-style">list-style</a>
							</td>
							<td class="issues">
								The <code class="property">list-style</code> property is a shorthand for defining
								one or more properties. Refer to each individual list-style-* property 
								for issues
							</td>
						</tr>
						
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/generate.html#propdef-list-style-image">list-style-image</a>
							</td>
							<td class="issues">
								<ul>
									<li>Avoid using images to convey the meaning of a list. If the image is important
										to comprehension of the items, ensure that a semantic is attached to the list
										to convey that meaning. If the list represents a figure or aside, use the
										appropriate container element and include a caption</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/generate.html#propdef-list-style-position">list-style-position</a>
							</td>
							<td class="issues"></td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/generate.html#propdef-list-style-type">list-style-type</a>
							</td>
							<td class="issues">
								<ul>
									<li>Do not change the nature of a list using the <code class="property">list-style-type</code>
										property (e.g., to not use the property to give an unordered list the appearance of
										ordering)</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<ul class="nobull">
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-margin">margin</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-margin-top">margin-top</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-margin-right">margin-right</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-margin-bottom">margin-bottom</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-margin-left">margin-left</a></li>
								</ul>
							</td>
							<td class="issues">
								<ul>
									<li>Note that reading systems typically restrict the ability to modify body margins</li>
									<li>Changing margins to move content off screen, common on the Web, is not guaranteed
										to work in reading systems. This practice is also known to cause problems depending
										on the reader's preferred reading direction and the placement of the content so
										is not recommended for that reason, as well</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<ul class="nobull">
									<li><a href="http://www.w3.org/TR/CSS21/visudet.html#propdef-max-height">max-height</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/visudet.html#propdef-max-width">max-width</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/visudet.html#propdef-min-height">min-height</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/visudet.html#propdef-min-width">min-width</a></li>
								</ul>
							</td>
							<td class="issues"></td>
						</tr>
	
						<tr>
							<td class="property">
								<ul class="nobull">
									<li><a href="http://www.w3.org/TR/CSS21/page.html#propdef-orphans">orphans</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/page.html#propdef-widows">widows</a></li>
								</ul>
							</td>
							<td class="issues"></td>
						</tr>
	
						<tr>
							<td class="property">
								<ul class="nobull">
									<li><a href="http://www.w3.org/TR/CSS21/ui.html#propdef-outline">outline</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/ui.html#propdef-outline-color">outline-color</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/ui.html#propdef-outline-style">outline-style</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/ui.html#propdef-outline-width">outline-width</a></li>
								</ul>
							</td>
							<td class="issues">
								<ul>
									<li>Outlines surround borders and serve a similar function. The issues with each
										are the same. See the corresponding border properties for more information</li>
									<li>Ensure when using both borders and outlines that sufficient contrast is maintained
										between them if they both visually convey information.</li>
								</ul>
							</td>
						</tr>
						
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/visufx.html#propdef-overflow">overflow</a>
							</td>
							<td class="issues">
								<ul>
									<li>Avoid using the <code class="value">hidden</code> value, as content may not
										be visible, especially when zoomed</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<ul class="nobull">
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-padding">padding</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-padding-top">padding-top</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-padding-right">padding-right</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-padding-bottom">padding-bottom</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/box.html#propdef-padding-left">padding-left</a></li>
								</ul>
							</td>
							<td class="issues"></td>
						</tr>
	
						<tr>
							<td class="property">
								<ul class="nobull">
									<li><a href="http://www.w3.org/TR/CSS21/page.html#propdef-page-break-after">page-break-after</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/page.html#propdef-page-break-before">page-break-before</a></li>
									<li><a href="http://www.w3.org/TR/CSS21/page.html#propdef-page-break-inside">page-break-inside</a></li>
								</ul>
							</td>
							<td class="issues"></td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/visuren.html#propdef-position">position</a>
							</td>
							<td class="issues">
								<ul>
									<li>Absolute positioning should not be used to re-order content differently
										than it is laid out in the markup</li>
									<li>Elements should not be absolutely positioned in a way that makes their 
										discoverability problematic for readers with low vision and/or using 
										zooming software</li>
									<li>Note that the <code class="value">fixed</code> value is not included in
										the EPUB 3 Style Sheets profile and its use is not recommended (see the
										<a href="http://idpf.org/epub3/latest/contentdocs#sec-css-oeb-head-foot">oeb-page-head
											and oeb-page-foot</a> custom properties for including static headers 
										and footers)</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/generate.html#propdef-quotes">quotes</a>
							</td>
							<td class="issues"></td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/tables.html#propdef-table-layout">table-layout</a>
							</td>
							<td class="issues"></td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/text.html#propdef-text-align">text-align</a>
							</td>
							<td class="issues">
								<ul>
									<li>Avoid justifying text, as the uneven spacing that occurs between words
										can reduce the readability for some people.</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/text.html#propdef-text-decoration">text-decoration</a>
							</td>
							<td class="issues">
								<ul>
									<li>Use the <code>del</code> element to semantically mark deleted text</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/text.html#propdef-text-indent">text-indent</a>
							</td>
							<td class="issues">
								<ul>
									<li>A sometimes used trick to hide text for assistive technologies is to use
										a large negative value, but like negative margins this technique is not
										reliable in reading systems and may cause issues depending on the reader's
										preferred text direction</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/text.html#propdef-text-transform">text-transform</a>
							</td>
							<td class="issues">
								<ul>
									<li>Avoid lengthy decorative use of capitalization as it can make words difficult
										to distinguish and read</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								unicode-bidi
							</td>
							<td class="issues">
								The <code class="property">unicode-bidi</code> property is not supported in EPUB 3. HTML5 markup, such as 
								the <code><a href="http://www.w3.org/TR/html5/text-level-semantics.html#the-bdi-element">bdi</a></code>
								and <code><a href="http://www.w3.org/TR/html5/text-level-semantics.html#the-bdo-element">bdo</a></code> 
								elements and <code><a href="http://www.w3.org/TR/html5/dom.html#the-dir-attribute">dir</a></code>
								attribute, should be used to express directionality
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/visudet.html#propdef-vertical-align">vertical-align</a>
							</td>
							<td class="issues"></td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/visufx.html#propdef-visibility">visibility</a>
							</td>
							<td class="issues">
								<ul>
									<li>Hidden content is not available to assistive technologies, so do not use this
										property to hide content from visual rendering that is intended to be read out</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/text.html#propdef-white-space">white-space</a>
							</td>
							<td class="issues"></td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/visudet.html#propdef-width">width</a>
							</td>
							<td class="issues">
								<ul>
									<li>Assistive technologies typically ignore content that has 0 width and/or height
										set on its containing element, so do not use this property to hide content
										that is only intended for non-visual playback.</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/text.html#propdef-word-spacing">word-spacing</a>
							</td>
							<td class="issues">
								<ul>
									<li>Increasing word spacing can help improve readability of tightly constructed fonts</li>
									<li>Use this property in preference to adding non-breaking spaces to increase the 
										space between words</li>
								</ul>
							</td>
						</tr>
	
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/visuren.html#propdef-z-index">z-index</a>
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<ul class="nobull">
									<li>azimuth</li>
									<li>cue</li>
									<li>cue-after</li>
									<li>cue-before</li>
									<li>elevation</li>
									<li>pause</li>
									<li>pause-after</li>
									<li>pause-before</li>
									<li>pitch</li>
									<li>pitch-range</li>
									<li>play-during</li>
									<li>richness</li>
									<li>speak</li>
									<li>speak-header</li>
									<li>speak-numeral</li>
									<li>speak-punctuation</li>
									<li>speech-rate</li>
									<li>stress</li>
									<li>voice-family</li>
									<li>volume</li>
								</ul>
							</td>
							<td class="issues">
								<ul>
									<li>Properties from the <a href="http://www.w3.org/TR/CSS21/aural.html">CSS 2.1 Aural 
										style sheets informative appendix</a> should not be used in EPUB 3. The 'aural' media 
										type was deprecated by the same appendix, and the <a href="#css025-css3speech">CSS 3 
											Speech module</a> defines the properties for the new 'speech' type.</li>
								</ul>
							</td>
						</tr>
					</tbody>
				</table>
			</section>
			
			<section id="css025-css21classes" class="reqs">
				<h3>CSS 2.1 Pseudo-Classes</h3>
				
				<table>
					<thead>
						<tr>
							<th>Pseudo-Class</th>
							<th>Considerations</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/selector.html#dynamic-pseudo-classes">:active</a>
							</td>
							<td class="issues">
							</td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/selector.html#first-child">:first-child</a>
							</td>
							<td class="issues">
							</td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/selector.html#dynamic-pseudo-classes">:focus</a>
							</td>
							<td class="issues">
							</td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/selector.html#dynamic-pseudo-classes">:hover</a>
							</td>
							<td class="issues">
								The <code>:hover</code> pseudo-selector should never be used, as it is not device independent and
								may not be activatable by many readers as ebook readers typically do not have mice.
							</td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/selector.html#lang">:lang</a>
							</td>
							<td class="issues">
							</td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/selector.html#link-pseudo-classes">:link</a>
							</td>
							<td class="issues">
							</td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/selector.html#link-pseudo-classes">:visited</a>
							</td>
							<td class="issues">
							</td>
						</tr>
					</tbody>
				</table>
			</section>
			
			<section id="css025-css21elements" class="reqs">
				<h3>CSS 2.1 Pseudo-Elements</h3>
				
				<table>
					<thead>
						<tr>
							<th>Pseudo-Element</th>
							<th>Considerations</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/selector.html#before-and-after">:before</a><br/>and<br/>
								<a href="http://www.w3.org/TR/CSS21/selector.html#before-and-after">:after</a>
							</td>
							<td class="issues">
								<ul>
									<li>Not all assistive technologies announce text injected using the <code>:before</code> and <code>:after</code>
										pseudo-elements.</li>
									<li>Since the expected behavior is to announce the injected text, avoid the using the pseudo-elements for 
										decorative purposes.</li>
									<li>Readers without CSS support will not have access to the injected text.</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/selector.html#first-letter">:first-letter</a>
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/CSS21/selector.html#first-line-pseudo">:first-line</a>
							</td>
							<td class="issues"></td>
						</tr>
					</tbody>
				</table>
			</section>
			
			<section id="css025-css3speech" class="reqs">
				<h3>CSS Speech Module</h3>
				
				<p>Note that prefixed properties should be used until the CSS 3 Speech module becomes a recommendation
					and a revision to EPUB 3 is released. The syntax for the prefixed properties is taken from the Working Draft
					dated August, 18, 2011. Each prefixed property links to this draft. The semantics are drawn from the current 
					draft or recommendation and are provided on the corresponding CSS property in parentheses.</p>
				
				<table>
					<thead>
						<tr>
							<th>Property</th>
							<th>Considerations</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/2011/WD-css3-speech-20110818/#cue-props-cue">-epub-cue</a><br/>
								(<a href="http://www.w3.org/TR/css3-speech/#cue-props-cue">cue</a>)
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/2011/WD-css3-speech-20110818/#pause-props-pause">-epub-pause</a><br/>
								(<a href="http://www.w3.org/TR/css3-speech/#pause-props-pause">pause</a>)
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/2011/WD-css3-speech-20110818/#rest-props-rest">-epub-rest</a><br/>
								(<a href="http://www.w3.org/TR/css3-speech/#rest-props-rest">rest</a>)
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/2011/WD-css3-speech-20110818/#speaking-props-speak">-epub-speak</a><br/>
								(<a href="http://www.w3.org/TR/css3-speech/#speaking-props-speak">speak</a>)
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/2011/WD-css3-speech-20110818/#speaking-props-speak-as">-epub-speak-as</a><br/>
								(<a href="http://www.w3.org/TR/css3-speech/#speaking-props-speak-as">speak-as</a>)
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/2011/WD-css3-speech-20110818/#voice-props-voice-family">-epub-voice-family</a><br/>
								(<a href="http://www.w3.org/TR/css3-speech/#voice-props-voice-family">voice-family</a>)
							</td>
							<td class="issues"></td>
						</tr>
					</tbody>
				</table>
			</section>
			
			<section id="css025-css3text" class="reqs">
				<h3>CSS Text Level 3</h3>
				
				<p>Note that prefixed properties should be used until the CSS Text module becomes a recommendation
					and a revision to EPUB 3 is released. The syntax for the prefixed properties is taken from the Working Draft
					dated April, 12, 2011. Each prefixed property links to this draft. The semantics are drawn from the current 
					draft or recommendation and are provided on the corresponding CSS property in parentheses.</p>
				
				<table>
					<thead>
						<tr>
							<th>Property</th>
							<th>Considerations</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/2011/WD-css3-text-20110412/#hyphens">-epub-hyphens</a><br/>
								(<a href="http://www.w3.org/TR/css3-text/#hyphens">hyphens</a>)
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/2011/WD-css3-text-20110412/#line-break">-epub-line-break</a><br/>
								(<a href="http://www.w3.org/TR/css3-text/#line-break">line-break</a>)
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/2011/WD-css3-text-20110412/#text-align-last">-epub-text-align-last</a><br/>
								(<a href="http://www.w3.org/TR/css3-text/#text-align-last">text-align-last</a>)
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/2011/WD-css3-text-20110412/#text-emphasis">-epub-text-emphasis</a><br/>
								(<a href="http://www.w3.org/TR/css3-text/#text-emphasis">text-emphasis</a>)
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/2011/WD-css3-text-20110412/#text-emphasis-color">-epub-text-emphasis-color</a><br/>
								(<a href="http://www.w3.org/TR/css3-text/#text-emphasis-color">text-emphasis-color</a>)
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/2011/WD-css3-text-20110412/#text-emphasis-style">-epub-text-emphasis-style</a><br/>
								(<a href="http://www.w3.org/TR/css3-text/#text-emphasis-style">text-emphasis-style</a>)
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/2011/WD-css3-text-20110412/#word-break">-epub-word-break</a><br/>
								(<a href="http://www.w3.org/TR/css3-text/#word-break">word-break</a>)
							</td>
							<td class="issues"></td>
						</tr>
					</tbody>
				</table>
			</section>
			
			<section id="css025-css3writemode" class="reqs">
				<h3>CSS Writing Modes Module Level 3</h3>
				
				<p>Note that prefixed properties should be used until the CSS 3 Writing Modes module becomes a recommendation
					and a revision to EPUB 3 is released. The syntax for the prefixed properties is taken from the Working Draft
					dated April, 28, 2011. Each prefixed property links to this draft. The semantics are drawn from the current 
					draft or recommendation and are provided on the corresponding CSS property in parentheses.</p>
				
				<table>
					<thead>
						<tr>
							<th>Property</th>
							<th>Considerations</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/2011/WD-css3-writing-modes-20110428/#text-combine-horizontal0">-epub-text-combine-horizontal</a><br/>
								(<a href="http://www.w3.org/TR/css3-writing-modes/#text-combine-horizontal0">text-combine-horizontal</a>)
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/2011/WD-css3-writing-modes-20110428/#text-combine-mode0">-epub-text-combine-mode</a><br/>
								(<a href="http://www.w3.org/TR/css3-writing-modes/#text-combine-mode0">text-combine-mode</a>)
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/2011/WD-css3-writing-modes-20110428/#text-orientation0">-epub-text-orientation</a><br/>
								(<a href="http://www.w3.org/TR/css3-writing-modes/#text-orientation0">text-orientation</a>)
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/2011/WD-css3-writing-modes-20110428/#writing-mode1">-epub-writing-mode</a><br/>
								(<a href="http://www.w3.org/TR/css3-writing-modes/#writing-mode1">writing-mode</a>)
							</td>
							<td class="issues"></td>
						</tr>
					</tbody>
				</table>
			</section>
			
			<section id="css025-css3multicol" class="reqs">
				<h3>CSS Multi-column Layout Module</h3>
				
				<table>
					<thead>
						<tr>
							<th>Property</th>
							<th>Considerations</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/css3-multicol/#break-after">break-after</a>
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/css3-multicol/#break-before">break-before</a>
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/css3-multicol/#break-inside">break-inside</a>
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/css3-multicol/#column-count">column-count</a>
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/css3-multicol/#column-fill">column-fill</a>
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/css3-multicol/#column-gap0">column-gap</a>
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/css3-multicol/#column-rule0">column-rule</a>
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/css3-multicol/#column-rule-color">column-rule-color</a>
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/css3-multicol/#column-rule-style">column-rule-style</a>
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/css3-multicol/#column-rule-width">column-rule-width</a>
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/css3-multicol/#column-span0">column-span</a>
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/css3-multicol/#column-width">column-width</a>
							</td>
							<td class="issues"></td>
						</tr>
						<tr>
							<td class="property">
								<a href="http://www.w3.org/TR/css3-multicol/#columns0">columns</a>
							</td>
							<td class="issues"></td>
						</tr>
					</tbody>
				</table>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>