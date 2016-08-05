<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm065'; $nav=1; $nav_items=array('reqs','faq'); $category='xhtml'; $page_name='Descriptions'; ?>
<!DOCTYPE html>
<html xml:lang="en" lang="en"
	xmlns="http://www.w3.org/1999/xhtml"
	xmlns:epub="http://www.idpf.org/2007/ops">
	
	<head>
		<?php include_once('../../includes/title.php'); ?>
		<?php include_once('../../includes/html5-shiv.php'); ?>
		<link type="text/css" rel="stylesheet" href="../../css/epub3.css"/>
		<?php include_once('../../includes/js.php'); ?>
	</head>
	
	<body>
		<?php include_once('../../includes/header.php'); ?>
		
		<section id="xhtm065" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm065-desc" class="usage">
				
				<p>There are many reasons why describing content adds to its accessibility for all readers. 
					Although often misperceived to be useful only for non-visual readers, descriptions
					facilitate comprehension and provide context for readers with a wide range of needs.
					They can also assist readers whose first language may not be that of the text being read.</p>
				
				<p>This section reviews the current ARIA solution for attaching descriptions using the
					<code>aria-describedby</code> attribute.</p>
				
				<section id="xhtm065-desc-by">
					<h4><code>aria-describedby</code></h4>
					
					<p>The <code>aria-describedby</code> attribute can be used to add a description to any HTML5
						element, not just <code>img</code>, and is the currently recommended mechanism for referencing
						descriptions in EPUB 3.</p>
					
					<p>The attribute references the ID of the element on the page containing the description. For example:</p>
					
					<pre class="prettyprint linenums"><code>&lt;table aria-describedby="table-desc">
    &#8230;
&lt;table>

&lt;aside id="table-desc">
    &lt;p>The table is composed of three smaller tables
          each of which &#8230; &lt;/p>
&lt;/aside></code></pre>
					
					<p>Note that the ID reference does not include a hash (#) at the start, as the value is
						not a URI. If the description is spread across multiple elements, the ID of each can
						be listed in the attribute (this technique is more common for forms element descriptions).</p>
					
					<p>It is not required that the element containing the description be visible content.
						The <code>aria-describedby</code> attribute can point to hidden elements:</p>
					
					<pre class="prettyprint linenums"><code>&lt;img &#8230; aria-describedby="img-desc"/>

&lt;aside id="img-desc" hidden="hidden">
    &#8230;
&lt;/aside></code></pre>
					
					<p>Before using hidden content too extensively, the ability to navigate the description is removed when
						content is not visible, as it no longer has a block or inline context. Hidden descriptions are 
						typically read as one long text string.</p>
					
					<p>One of the primary limitations of <code>aria-describedby</code> is that the element containing 
						the description must be present in the same page as the content that is being described, so it 
						is not possible to reference out-of-band descriptions directly. The current workaround to this 
						limitation is to reference the external description through an <code>iframe</code> element:</p>
					
					<pre class="prettyprint linenums"><code>&lt;img src="bunny.jpg" aria-describedby="bunny-desc"/>

&lt;iframe id="bunny-desc" src="bunny-description.xhtml" hidden="hidden">&lt;/iframe></code></pre>
					
					<p>Although using an <code>iframe</code> in this fashion mimics the out-of-band functionality
						of the <code>longdesc</code> attribute (i.e., that the descriptions can be contained in separate 
						files), there are a number of drawbacks:</p>
					
					<ul>
						<li>There is no way to reference into the content in the <code>iframe</code> from an
							<code>aria-describedby attribute</code>. In other words, you can reference specific content
							within the <code>iframe</code>; all content in the <code>iframe</code> will be rendered.
							Although this won't be problematic if your out-of-band description file only contains a single
							description, it impedes the ability to use the 
							<a href="http://www.diagramcenter.org/development/content-model.html">DIAGRAM description framework</a>.
							Without customing handling, all of the descriptions in a DIAGRAM file will be rendered.</li>
						
						<li>The <code>iframe</code> will normally be announced as a separate document. Although
							the <code>seamless</code> attribute is designed to stop this behaviour in aural renderings,
							the attribute is poorly supported and also at risk of removal from HTML5.</li>
						
						<li>The <code>iframe</code> approach also slows down the loading of documents, since each description must be
							loaded, unlike proper out-of-band linking mechanisms, which allow the content to only be loaded as requested
							by the reader.</li>
					</ul>
					
					<p>Although the usability of <code>aria-describedby</code> decreases the less simple your description
						requirements are, it is the most viable solution at this time.</p>
				</section>
				
			</section>
			
			<section id="xhtm065-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>WAI &#8212; <a href="http://www.w3.org/TR/wai-aria/states_and_properties#aria-describedby">WAI-ARIA 1.0 - aria-describedby</a></li>
				</ul>
			</section>
			
			<section id="xhtm065-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				<dl>
					<dt>Why link to visible descriptions?</dt>
					<dd>
						<p>Even though a description is a visible part of the current page, linking to it provides a programmatic
							means for users of assistive technologies to rapidly access the description without having to hunt
							through the page content.</p>
					</dd>
					<dt>Why not <code>longdesc</code>?</dt>
					<dd>
						<p>The <code>longdesc</code> attribute is an HTML5 extension not currently supported by EPUB. It is also
						limited to being attached to <code>img</code> elements.</p>
					</dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>