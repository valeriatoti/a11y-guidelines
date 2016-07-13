<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='tts015'; $nav=1; $nav_items=array( 'ex','reqs','res','faq'); $category='tts'; $page_name='SSML'; ?>
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
		
		<section id="tts015" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="tts015-desc" class="usage">
				<p>SSML &#8212; the <a href="http://www.w3.org/TR/speech-synthesis11/">Speech
					Synthesis Markup Language</a> &#8212; provides a way for content creators to enhance the
					default synthetic speech rendering of their publications at the markup level. The liberal use of
					SSML ensures that anyone listening to your work via TTS playback hears the prose as intended, not
					based on the best guess of their rendering engine.</p>
				
				<p>The <code>phoneme</code> element from SSML has been implemented in EPUB 3 as a pair of attributes for 
					defining pronunciations at the markup level:</p>
				
				<ul>
					<li>The <code>ssml:alphabet</code> attribute is used to set the default
						phonetic alphabet.</li>
					<li>The <code>ssml:ph</code> attribute is used to define the pronunciation for 
						any element with text content or for which a phonetic pronunciation can be 
						associated (e.g., an empty element whose voicing is derived from an attached 
						attribute).</li>
				</ul>
				
				<p>(Support for the full SSML specification is not available in EPUB 3.)</p>
				
				<p>Unlike <a href="pls.php">PLS lexicons</a>, SSML provides fine-grained control over pronunciation
					at the markup level. SSML can be used to override a default pronunciation for heteronyms, to
					correctly pronounce complex word and number forms, etc.</p>
				
				<p>To use the SSML attributes, you must first declare the SSML namespace. The declaration is
					typically made once per document on the root <code>html</code> element. (See 
					<a href="#tts015-ex01">Example 1</a>.)</p>
				
				<p>A default alphabet is also typically defined once on the root <code>html</code>
					element, as it is rare to need to switch phonetic alphabets within any single document.
					Adding the <code>ssml:alphabet</code> attribute to the root ensures that all instance of the 
					<code>ssml:ph</code> attribute have an in-scope alphabet defined. It is an error to define a 
					pronunciation in an <code>ssml:ph</code> attribute without an in-scope alphabet, and will result 
					in rendering errors. (See <a href="#tts015-ex01">Example 1</a>.)</p>
				
				<p>When an <code>ssml:ph</code> attribute
					is encountered, it's value is passed to the text-to-speech (TTS) engine in place of
					the element's content, providing the lowest-level override. The pronunciation of
					SSML attributes also takes precedence over PLS lexicon entries, ensuring that heteronyms
					and other exceptions to the rule can be properly handled.</p>
				
				<p>Note that the value of the <code>ssml:ph</code> attribute entirely replaces the 
					content of the element that it is attached to, including all descendant elements. The
					attribute should not be attached to a <code>p</code> tag to define the pronunciation
					of one word contained in the paragraph, for example, as only that one word will be read
					in place of the entire paragraph. The use of <code>span</code> elements is recommended when no 
					markup exists on the word(s) that need a pronunciation attached.</p>
				
				<p>The SSML attributes are not valid on SVG or MathML content, but are valid on any XHTML content
					that can be embedded in those grammars.</p>
			</section>
			
			<section id="tts015-ex" class="example">
				<h3>Example</h3>
				<figure id="tts015-ex01">
					<figcaption>Example 1 &#8212; Declaring the SSML namespace and phonetic alphabet on the document root</figcaption>
					<pre class="prettyprint linenums"><code>&lt;html …
   xmlns:ssml="http://www.w3.org/2001/10/synthesis"
   ssml:alphabet="x-sampa">
   &#8230;
&lt;/html></code></pre>
				</figure>
				
				<figure id="tts015-ex02">
					<figcaption>Example 2 &#8212; Declaring a phonetic alphabet and pronunciation at the word level</figcaption>
					<pre class="prettyprint linenums"><code>&lt;p>
   &#8230; farther &lt;span 
   ssml:alphabet="ipa" ssml:ph="nɔrθ">N.&lt;/span>
   another elevation begins &#8230;
&lt;/p></code></pre>
					<p>(Note that single letters are a poor choice to define in a lexicon because they could be initials, directions or other forms of contractions depending on context.)</p>
				</figure>
				
				<figure id="tts015-ex03">
					<figcaption>Example 3 &#8212; Defining different pronunciations for heteronyms</figcaption>
					<pre class="prettyprint linenums"><code>&lt;p>
   The guitarist was playing a
   &lt;span ssml:ph="beIs">bass&lt;/span> that was shaped
   like a &lt;span ssml:ph="b&amp;s">bass&lt;/span>.
&lt;/p></code></pre>
				</figure>
				
				<figure id="tts015-ex04">
					<figcaption>Example 4 &#8212; Defining a pronunciation when a default alphabet has already been set</figcaption>
					<pre class="prettyprint linenums"><code>&lt;p>
   The guitarist was playing a bass that was shaped
   like a &lt;span ssml:ph="b&amp;s">bass&lt;/span>.
&lt;/p></code></pre>
					<p>A <a href="pls.php">PLS lexicon</a> would including the following entry to define the default pronunciation:</p>
					<pre class="prettyprint linenums"><code>&lt;lexeme>
   &lt;grapheme>bass&lt;/grapheme>
   &lt;phoneme>beIs&lt;/phoneme>
&lt;/lexeme></code></pre>
				</figure>
				
				<figure id="tts015-ex05">
					<figcaption>Example 5 &#8212; Defining different pronunciations based on context</figcaption>
					<pre class="prettyprint linenums"><code>&lt;p>
   You'll be an
   &lt;span ssml:ph="Ekstr@ lArdZ">XL&lt;/span>
   by the end of Super Bowl 
   &lt;span ssml:ph="'fOrti">XL&lt;/span>
   at the rate you're eating.
&lt;/p></code></pre>
				</figure>
			</section>
			
			<section id="tts015-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				<ul>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/contentdocs#sec-xhtml-ssml-attrib">SSML Attributes</a></li>
				</ul>
			</section>
			
			<section id="tts015-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.w3.org/TR/speech-synthesis11/">Speech Synthesis Markup Language (SSML) Version 1.1</a></li>
					<li><a href="http://www.phon.ucl.ac.uk/home/sampa/x-sampa.htm">Computer-coding the IPA: a proposed extension of SAMPA</a> (X-SAMPA)</li>
					<li><a href="http://www.langsci.ucl.ac.uk/ipa/ipachart.html">Reproduction of The International Phonetic Alphabet (Revised to 2005)</a></li>
				</ul>
			</section>
			
			<section id="tts015-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="tts005-faq01">Are lexicons supported at this time?</dt>
					<dd><p>At the time of writing, no reading systems have appeared that support the new SSML enhancements 
							in EPUB 3. Please send a report if the situation changes and this page has not been updated.</p></dd>
					<dt id="tts005-faq02">Should I use IPA or X-SAMPA or something else to write my pronunciations?</dt>
					<dd><p>Although IPA is arguably the most widely recognized phonetic alphabet, that does not mean that it
							has full support even in existing synthetic speech engines. Some engines support only their own
							alphabets, for example. IPA is also less developer-friendly than X-SAMPA because it uses
							Unicode characters that require modifying most keyboard layouts to input, whereas X-SAMPA is 
							ASCII-based. Internal workflows should be a determining factor at this time. The ultimate 
							answer will depend on what engines are employed in reading systems.</p>
						<p>Note that it is possible to translate one alphabet representation to the other, so work in either 
							alphabet shouldn't ever be <q>lost</q> if there does turn out to be a clear winner and loser.</p>
					</dd>
					<dt id="tts005-faq03">Should I use PLS lexicons or SSML?</dt>
					<dd><p>The inclusion of the technologies in EPUB 3 was not to require a choice to be made; the 
							technologies are meant to complement each other. PLS lexicons allow you to define a
							word once and have the TTS engine do the work of replacing it each time it occurs in
							the prose. <a href="ssml.php">SSML</a>, on the other hand, provides the fine-grained
							control that is just not possible in a lexicon, at the price of having to tag each instance
							of a term that has to be replaced.</p>
						<p>It is possible to use SSML exclusively, but it is costly in terms of production time and
							can excessively bloat the size of your content files depending on how many unique
							terms have to be handled and how often they occur.</p>
					</dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>