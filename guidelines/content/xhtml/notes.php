<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='xhtm080'; $nav=1; $nav_items=array('exes','reqs','res'); $category='xhtml'; $page_name='Notes'; ?>
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
		
		<section id="xhtm080" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="xhtm080-desc" class="usage">
				<p>Footnotes and endnotes have proven an impediment to the reading experience in the past because
					they interrup the narrative flow. When footnotes were placed immediately following the paragraph
					that referenced them, readers had to manually navigate past them each time, as they were typically
					indistinguishable from text content (e.g., in <code>div</code> or <code>p</code> tags). Even endnotes,
					grouped at the end of the section, required the user to jump past them.</p>
				
				<p>The HTML5 structural elements, together with the <code>epub:type</code> attribute, provide a means of 
					alleviating this problem, by clearly marking individual footnotes and endnotes, and sections of them.
					Not only will this allow accessible reading systems to ignore the notes except when followed from their
					referents, but it allows any reading system to handle them more intelligently (e.g., as pop-ups).</p>
				
				<p>Notes placed within the primary narrative should be tagged using the HTML5 <code>aside</code> element (see
					<a href="#xhtm080-ex01">Example 1</a>). This usage ensures that even if the EPUB semantic is not recognized,
					the notes will still be treated as secondary content due the nature of the HTML5 <code>aside</code> element.</p>
				
				<p>The type of note must be identified using the <code>epub:type</code> attribute. The 
					<a href="http://idpf.org/epub/vocab/structure/">EPUB 3 Structural Semantics</a> Vocabulary defines the 
					following note types:</p>
				
				<ul>
					<li><code class="property">footnote</code> &#8212; a note that would normally be placed at the bottom of a print or electronic page</li>
					<li><code class="property">rearnote</code> &#8212; a note that would normally be placed at the end of a section or publication</li>
					<li><code class="property">note</code> &#8212; a note that has no specific spatial display positioning associated with it</li>
				</ul>
				
				<p>Notes that are grouped at the end of a section do not need to be individually tagged as <code>aside</code>, but should
					be grouped in a <code>section</code> carrying the appropriate semantic <code class="property">footnotes</code> or 
					<code class="property">rearnotes</code> (see <a href="#xhtm080-ex02">Example 2</a>). Lists are an effective means
					of representing groups of notes in these sections, as they allow readers to move through them more effectively 
					(e.g., each list item number will typically correspond sequentially to the contained note number, and readers should 
					have the ability to jump through more than one list item at a time when there are many notes).</p>
				
				<p epub:type="bridgehead">Notes in Tables</p>
				
				<p>If notes occur in a table, avoid placing them in a <code>tfoot</code> element, as it is intended for summaries of the columns. 
					Footnotes can follow the table or can be grouped together with the table inside a <code>figure</code>.</p>
				
				<p>See the <a href="tables.php">Tables section</a> for an example.</p>
				
				<p epub:type="bridgehead">Note References</p>
				
				<p>Note references must be tagged using the HTML5 <code>a</code> element with an <code>epub:type</code> attribute
					designating the property <code class="property">noteref</code>.</p>
				
				<p>Do not use the <code>sup</code> element to superscript note references, as it is redundant presentational tagging.
					The CSS <code>vertical-align</code> property can be set to superscript the <code>a</code> elements. 
					(See <a href="#xhtm080-ex03">Example 3</a> below.)</p>
				
				<p epub:type="bridgehead">Back Referencing</p>
				
				<p>Although not specifically required to be accessible, it is good practice to back-link groups of notes to their 
					referent locations in the text (see <a href="#xhtm080-ex04">Example 4</a>). If a reader is surveying your notes, 
					this will allow them to quickly find the text the note refers to.</p>
			</section>
			
			<section id="xhtm080-ex" class="example">
				<h3>Examples</h3>
				
				<figure id="xhtm080-ex01">
					<figcaption>Example 1 &#8212; Footnotes in the body</figcaption>
					<pre class="prettyprint linenums"><code>&lt;p>
   In that
   year&lt;a href="#ft2f" epub:type="noteref">2&lt;/a>
   there were 67 mills engaged in the manufacture of
   cotton goods &#8230;
&lt;/p>

&lt;aside id="ft2f" epub:type="footnote">
   &lt;p>
      2 The manufacturing statistics for 1900 which
      follow are not those given in the Twelfth
      Census, but are taken from the 
      &lt;em>Census of Manufactures&lt;/em> &#8230;
   &lt;/p>
&lt;/aside>

&lt;p>&#8230;&lt;/p></code></pre>
				</figure>
				
				<figure id="xhtm080-ex02">
					<figcaption>Example 2 &#8212; Endnote section</figcaption>
					<pre class="prettyprint linenums"><code>&lt;section epub:type="rearnotes"> 
   &lt;h2>End Notes&lt;/h2>
   &lt;ol>
      &lt;li id="en001" epub:type="rearnote">
         According to the usual nomenclature, the
         branch flowing S.W. is called the Chattooga;
         this unites with the Tallulah to form the 
         Tugaloo, which &#8230;
      &lt;/li>
      &#8230;
   &lt;/ol>   
&lt;/section></code></pre>
				</figure>
				
				<figure id="xhtm080-ex03">
					<figcaption>Example 3 &#8212; CSS to superscript note references</figcaption>
					<pre class="prettyprint linenums"><code class="language-css">@namespace epub "http://www.idpf.org/2007/ops";

a[epub|type~='noteref'] {
   vertical-align: super;
   line-height: normal;
   font-size: smaller;
}</code></pre>
				</figure>
				
				<figure id="xhtm080-ex04">
					<figcaption>Example 4 &#8212; Back-linking notes</figcaption>
					<pre class="prettyprint linenums"><code>&lt;li id="en001" epub:type="rearnote">
   &lt;a href="#en01-ref" title="note reference 1">1&lt;/a> 
   According to the usual nomenclature, the &#8230;
&lt;/li></code></pre>
				</figure>
				
			</section>
			
			<section id="xhtm080-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/sections.html#the-aside-element">The <code>aside</code> element</a></li>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub/vocab/structure/#h_notes">Notes vocabulary properties</a></li>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub/vocab/structure/#h_links">References vocabulary properties</a></li>
				</ul>
			</section>
			
			<section id="xhtm080-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li>CSS3 &#8212; <a href="http://www.w3.org/TR/css3-namespace/#syntax">CSS Namespaces Module</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>