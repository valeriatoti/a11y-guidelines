<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm020'; $nav=1; $nav_items=array('exes','samp','reqs','res','faq'); $category='xhtml'; $page_name='Page Numbers'; ?>
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
		
		<section id="xhtm020" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm020-desc" class="usage">
				<p>If an ebook is produced from the same workflow as a print document, print pagination markers should be retained
					in the document. These markers benefit readers in mixed print/digital environments, such as a classroom,
					as the page numbers allow a common point of reference between the two editions.</p>
				
				<p>Page break locations can be added to the markup using <code>span</code> and <code>div</code> tags with an 
					<code>epub:type</code> attribute set to the value <code>pagebreak</code>.</p>
				
				<p>The page number associated with each break point can be represented either as text content of the element 
					(<a href="#xhtm020-ex01">Example 1</a>) or embedded as hidden elements using the <code>title</code> 
					attribute to carry the number (<a href="#xhtm020-ex02">Example 2</a>).</p>
				
				<p>When including page numbers, a <a href="../nav/pagelist.php"><code>page-list nav</code></a> should also be included to
					faciliate navigation. The <code>page-list nav</code> is used to look up the location of the page break when the reader
					requests to move to a specific location. (An <code>id</code> attribute must be attached to each element 
					containing a page number to allow creation of the <code>page-list nav</code>.)</p>
				
				<p>Do not use CSS styling to hide page numbers, as this practice typically results in the element not being
					linkable to, which will prevent navigation using the page list.</p>
				
				<p>When including print pagination references, the package document metadata must also include 
					<a href="http://idpf.org/epub3/latest/publications#sec-opf-dcsource">a <code>dc:source</code>
					element identifying the print source</a>.</p>
			</section>
			
			<section id="xhtm020-ex" class="example">
				<h3>Examples</h3>
				
				<figure id="xhtm020-ex01">
					<figcaption>Example 1 &#8212; Page number as content element</figcaption>
					<pre class="prettyprint linenums"><code>&lt;p>
   &#8230;
   &lt;span epub:type="pagebreak" id="page23">23&lt;/span>
   &#8230;
&lt;/p></code></pre>
				</figure>
				
				<figure id="xhtm020-ex02">
					<figcaption>Example 2 &#8212; Page number as empty element</figcaption>
					<pre class="prettyprint linenums"><code>&lt;p>
   &#8230;
   &lt;span
         epub:type="pagebreak"
         id="page24"
         title="24"/>
   &#8230;
&lt;/p></code></pre>
				</figure>
				
				<figure id="xhtm020-ex03">
					<figcaption>Example 3 &#8212; Page number as block element</figcaption>
					<pre class="prettyprint linenums"><code>&lt;div epub:type="pagebreak" id="page25">25&lt;/div></code></pre>
				</figure>
				
				<figure id="xhtm020-ex04">
					<figcaption>Example 4 &#8212; Package document source declaration</figcaption>
					<pre class="prettyprint linenums"><code>&lt;package&#8230;>
   &#8230;
   &lt;metadata
      xmlns:dc="http://purl.org/dc/elements/1.1/">
      &#8230;
      &lt;dc:source id="src-id">
         urn:isbn:9780375704024
      &lt;/dc:source>
   &lt;/metadata>
&lt;/package></code></pre>
				</figure>
			</section>
			
			<section id="xhtm020-samp" class="sample">
				<h3>Samples</h3>
				
				<p>The <a href="http://code.google.com/p/epub-samples/">EPUB Samples Project</a> contains the following 
					publications that include print page numbering:</p>
				
				<ul>
					<li><a href="http://code.google.com/p/epub-samples/downloads/list">Georgia</a></li>
				</ul>
			</section>
			
			<section id="xhtm020-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub/vocab/structure/#pagebreak">pagebreak property</a></li>
				</ul>
			</section>
			
			<section id="xhtm020-res" class="res">
				<h3>Additional Resources</h3>
				
				<ul>
					<li>NCX &#8212; <a href="http://www.daisy.org/z3986/2005/Z3986-2005.html#li_392a"><code>pageList</code> element</a></li>
				</ul>
			</section>
			
			<section id="xhtm020-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="xhtm020-faq06">Does the page number reflect the page that is ending or the page that is starting?</dt>
					<dd><p>The page number always reflects the page that is starting.</p>
					</dd>
					<dt id="xhtm020-faq07">Does the page break marker placement follow the print position?</dt>
					<dd><p>No, page break markers are always placed at the start of the page's content, regardless
						of whether the page number is printed at the top or bottom of the page in the print
						edition. When a user jumps to a specific page, they want to jump to the start of the content
						for that page, not the end.</p>
					</dd>
					<dt id="xhtm020-faq01">Should I include the page numbers as content or empty elements?</dt>
					<dd><p>There are pros and cons to each approach.</p>
						<p>If you include the page numbers as text content
							within a <code>span</code> or <code>div</code>, the pages will be more easily accessible to both sighted 
							readers and readers using assistive technologies. This method has been employed in previous DAISY standards. 
							The potential downside, however, is that mainstream reading systems will not provide equivalent functionality 
							to turn off unwanted content, forcing readers to view the page numbers. Additionally, current assistive
							technologies may not provide content filtering on the <code>epub:type</code> attribute, also interfering
							with reading.</p>
						<p>Page numbers as empty elements are the more traditional mainstream approach, with anchor tags having 
							served this function in the past. Using the <code>title</code> attribute on an empty element, however,
							potentially complicates the rendering/announcing of the pages. Page numbers that 
							mix alphanumeric characters, for example, could not include both visual and aural alternatives.</p>
					</dd>
					<dt id="xhtm020-faq02">Do page numbers really matter anymore?</dt>
					<dd><p>Yes. Despite the assertions of the futurists and technophiles, print still reigns supreme. As a result, 
							anyone in a mixed print/digital environment &#8212; using an assistive 
							technology or not &#8212; needs a way synchronize electronic and print content.</p>
						<p>Also note that reading is not a solitary activity. From educational settings to reading clubs, the need
							to coordinate print and digital is very real.</p></dd>
					<dt id="xhtm020-faq03">Why is the <code>page-list nav</code> necessary?</dt>
					<dd><p>Although the <a href="../nav/pagelist.php"><code>page-list nav</code></a> provides readers a way 
							to manually look up pages, it is primarily intended to facilitate quick-access through the reading
							system. To implement a feature that can jump a reader to a specific page that they voice or type
							in, reading system need to be able to map the location quickly without having to randomly load and
							scan content files. The <code>page-list nav</code> is how these lookups occur.</p></dd>
					<dt id="xhtm020-faq04">Where do I put a page number when the page break occurs in the middle of a list?</dt>
					<dd><p>List often break across pages, with one item ending at the bottom of one and a new item
							starting at the top of the next. In these cases, it's not possible to locate the page number
							between the two list items, as it's not valid for a list to contain anything but list items.</p>
						<p>The obvious solutions are to either insert the page number as the very last element in the item
							that ends the page:</p>
						
						<pre><code>&lt;li>&#8230;.&lt;span
      epub:type="pagebreak"
      id="page24"
      title="24"/>&lt;/li>
   &lt;li>&#8230;&lt;/li>
</code></pre>
						<p>or to place it as the very first element in the list item that starts the page</p>
						<pre><code>&lt;li>&#8230;.&lt;/li>
   &lt;li>&lt;span
      epub:type="pagebreak"
      id="page24"
      title="24"/>&#8230;&lt;/li>
</code></pre>
						<p>Best practice at this time is to place the page break inside the concluding element,
							but both methods are acceptable. When included in the trailing list item,
							an assistive technology should announce the new list item that starts
							the next page to the reader, whereas if the page number starts the list item
							the reader may not be made aware they are in a list until reaching the next
							item.</p>
						<p>One practice to avoid is creating a new list item just for the page break. As page
							breaks are often not visible content, an empty list item will be confusing to all 
							readers.</p>
					</dd>
					<dt id="xhtm020-faq05">Can I use <code>a</code> tags for page numbers?</dt>
					<dd><p>The <code>a</code> element has two specific uses defined in HTML5: for links when the <code>href</code>
						attribute is present, and for placeholder links when it is not (e.g., a link that might be active in
						another context or after some interaction by the user). As page breaks are not links, and are never 
						intended to be activated as links, it is semantically incorrect to use them for page breaks.</p>
					</dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>