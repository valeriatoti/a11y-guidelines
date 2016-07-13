<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='tts020'; $nav=1; $nav_items=array( 'exes','reqs','faq'); $category='tts'; $page_name='CSS3 Speech'; ?>
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
		
		<section id="tts020" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<div epub:type="warning">
				<p class="label">Note</p>
				<p>The CSS3 Speech module was not a recommendation at the time that EPUB 3 was finalized, but has 
					since reach Candidate Recommendation status. Until an update to EPUB 3 occurs, all supported 
					properties from the module must still be prefixed with <code>-epub-</code> (reading systems will 
					automatically map the prefixed properties to the new official versions, so there will be no 
					need to revisit old content).</p>
			</div>
			
			<section id="tts020-desc" class="usage">
				<p>The CSS3 Speech module provides additional text-to-speech (TTS) enhancement functionality.
					Unlike <a href="pls.php">PLS lexicons</a> and <a href="ssml.php">SSML markup</a>, the Speech
					module properties are not focused on defining the correct pronunciation of words.</p>
				
				<p>The primary property the CSS3 Speech module adds for enhancing TTS playback is 
					<code class="property">speak-as</code>. This property provides the ability to control whether the TTS engine
					will read each character (setting to <code class="value">spell-out</code>) or number 
					(<code class="value">digit</code>) in a string out. (See <a href="#tts020-ex01">Example 1</a>
					and <a href="#tts020-ex02">Example 2</a>.) TTS engines often use unreliable tests 
					based on the apparent wordiness of acronyms to determine whether to voice them, but this property
					allows you to override that behavior.</p>
				
				<p>The <code class="property">speak-as</code> property also takes the complimentary values
					<code class="value">literal-punctuation</code> and <code class="value">no-punctuation</code>.
					The values, as expected, control whether the TTS engine will voice punctuation.</p>
				
				<p>The module also includes the <code class="property">speak</code> property, which provides
					the ability to control TTS rendering of content, regardless of whether the containing
					element is visible or not. Setting the <code class="value">none</code> value disables
					rendering on an element, and setting the <code class="value">normal</code> value enables.</p>
				
				<p>The following table lists the remaining properties from the Speech module that are supported
					in EPUB 3. These properties are focused on non-prosodic aspects of TTS playback.</p>
				
				<table border="1">
					<caption>Additional EPUB 3-supported Speech module properties</caption>
					<colgroup>
						<col style="width: 10%; max-width: 8em;"/>
						<col style="width: 90%;"/>
					</colgroup>
					<tr>
						<td></td>
						<th>Description</th>
					</tr>
					<tr>
						<th><code class="property">pause</code></th>
						<td><p>The <code class="property">pause</code> property controls the amount of pause that occurs before
								and after the element that it is applied to. Pauses are typically used to identify transitions
								between major structures, such as between paragraphs and when new sections are beginning. TTS
								engines use punctuation to provide pauses within the flow of the narrative.</p>
							<p>The value of the <code class="property">pause</code> property is a time value indicating the 
								pause length. If only a single value is specified:</p>
							<pre class="prettyprint linenums"><code class="lang-css">-epub-pause: 50ms</code></pre>
							<p>that time is applied both before and after the associated element.</p>
							<p>You can individually control the time to pause before and after by including a second time value:</p>
							<pre class="prettyprint linenums"><code class="lang-css">-epub-pause: 50ms 0ms</code></pre>
							<p>The amount of pause specified occurs before any aural <code class="property">cue</code> and 
								<code class="property">rest</code> at the start of the associated element, and after 
								any <code class="property">rest</code> and <code class="property">cue</code> at the 
								end of the element.</p>
						</td>
					</tr>
					<tr>
						<th><code class="property">cue</code></th>
						<td><p>The <code class="property">cue</code> property provides the ability to uniquely identify
								elements with an aural sound. Cues are helpful in distinguishing new headings, for example,
								as pauses alone are not a good indicator.</p>
							<p>Note that the cue property will render the associated audio clip both before and after the
								heading if only a single value is specified:</p>
							<pre class="prettyprint linenums"><code class="lang-css">-epub-cue: url('audio/ping.mp3');</code></pre>
							<p>Readers typically only expect a cue to signal the start, so use the <code class="value">null</code>
								value to disable cues after the associated element has been rendered:</p>
							<pre class="prettyprint linenums"><code class="lang-css">-epub-cue: url('audio/ping.mp3') null;</code></pre>
							<p>The aural cue occurs between any <code class="property">pause</code> and 
								<code class="property">rest</code> at the start of the associated element, and 
								between any <code class="property">rest</code> and <code class="property">cue</code> 
								at the end of the element.</p>
						</td>
					</tr>
					<tr>
						<th><code class="property">rest</code></th>
						<td>
							<p>The <code class="property">rest</code> property controls the pause that occurs between the
								any aural cues and the rendering of the associated element, both before and after.</p>
							<p>The value of the <code class="property">rest</code> property is a time value indicating the 
								pause length. If only a single value is specified:</p>
							<pre class="prettyprint linenums"><code class="lang-css">-epub-rest: 25ms</code></pre>
							<p>that time is applied both before and after the associated element.</p>
							<p>You can individually control the time to pause before and after by including a second time value:</p>
							<pre class="prettyprint linenums"><code class="lang-css">-epub-rest: 25ms 0ms</code></pre>
							<p>The amount of rest specified occurs after any <code class="property">pause</code> and 
								<code class="property">cue</code> at the start of the associated element, and before 
								any <code class="property">cue</code> and <code class="property">pause</code> at the 
								end of the element.</p>
						</td>
					</tr>
					<tr>
						<th><code class="property">voice-family</code></th>
						<td>
							<p>The <code class="property">voice-family</code> property provides control over the gender and
								type of voice used for TTS playback, allowing content producers to create more realistic
								TTS playback (e.g., alternating gender to match the character).</p>
							<p>Although it's possible to name the voice to use:</p>
							<pre class="prettyprint linenums"><code class="lang-css">-epub-voice-family: 'Dave';</code></pre>
							<p>in practice, with the wide variety of devices an EPUB may be played on, such specificity is 
								only so useful as it requires knowing the names of all voices available on all devices.</p>
							<p>Instead, it is better to request a voice using the pattern: age?, gender, integer?
								(where the question mark indicates the field is optional):</p>
							<pre class="prettyprint linenums"><code class="lang-css">.king-lear {
   -epub-voice-family: old male 1;
}</code></pre>
							<p>The age value may be <code class="value">child</code>, <code class="value">young</code> or
								<code class="value">old</code>; the gender <code class="value">male</code>,
								<code class="value">female</code> or <code class="value">neutral</code>; and, when
								specified, the integer indicates the ordinal position of the voice to use (i.e., when more
								than one matching voice is available).</p>
						</td>
					</tr>
				</table>
			</section>
			
			<section id="tts020-ex" class="example">
				<h3>Examples</h3>
				<figure id="tts020-ex01">
					<figcaption>Example 1 &#8212; Spelling out letters</figcaption>
					<pre class="prettyprint linenums"><code>&lt;abbr class="spell">IBM&lt;/abbr>
&lt;span class="spell">IOU&lt;/span></code></pre>
					<pre class="prettyprint linenums"><code class="lang-css">.spell {
   -epub-speak-as: spell-out
}</code></pre>
				</figure>
				
				<figure id="tts020-ex02">
					<figcaption>Example 2 &#8212; Spelling out numbers</figcaption>
					<pre class="prettyprint linenums"><code>&lt;span class="digits">911&lt;/span>
&lt;span class="digits">416 555-0123&lt;/span>
&lt;span class="digits">90210&lt;/span></code></pre>
					<pre class="prettyprint linenums"><code class="lang-css">.digits {
   -epub-speak-as: digits
}</code></pre>
				</figure>
				
				<figure id="tts020-ex03">
					<figcaption>Example 3 &#8212; Voicing punctuation</figcaption>
					<pre class="prettyprint linenums"><code>&lt;p>
   Example one is correctly punctuated as follows:
   &lt;span class="punctuate answer">The Franks, 
   a warlike people of Germany, gave their 
   name to France.&lt;/span>
&lt;/p></code></pre>
					<pre class="prettyprint linenums"><code class="lang-css">.punctuate {
   -epub-speak-as: literal-punctuation
}</code></pre>
				</figure>
				
				<figure id="tts020-ex04">
					<figcaption>Example 4 &#8212; Ignoring punctuation</figcaption>
					<pre class="prettyprint linenums small"><code>&lt;p>The telegram from Dr. King to President Kennedy
   read as follows:&lt;/p>
&lt;blockquote>
   &lt;pre class="silent">
   HOWEVER I AM CONVINCED THAT UNLESS SOME STEPS ARE TAKEN BY
   THE FEDERAL GOVERMENT TO RESTORE A SENSE OF CONFIDENCE IN
   THE PROTECTION OF LIFE, LIMB AND PROPERTY MY PLEAS SHALL FALL
   ON DEAF EARS AND WE SHALL SEE THE WORST RACIAL HOLOCAUST THIS
   NATION HAS EVER SEEN AFTER TODAYS TRAGEDY, INVESTIGATION WILL
   NOT SUFFICE.
   &lt;/pre>
   &lt;cite>&lt;a 
      href="http://www.jfklibrary.org/Asset-Viewer/-crU2bLgN0CcGkys8dkuHg.aspx"
      >September 15, 1963 Telegram&lt;/a>&lt;/cite>
&lt;/blockquote></code></pre>
					<pre class="prettyprint linenums"><code class="lang-css">.silent {
   -epub-speak-as: no-punctuation
}</code></pre>
				</figure>
				
				<figure id="tts020-ex05">
					<figcaption>Example 5 &#8212; Adding pauses, cues and rests to headings</figcaption>
					<pre class="prettyprint linenums"><code class="lang-css">h1 {
   -epub-pause: 50ms 25ms;
   -epub-cue: url('audio/ping.mp3') none;
   -epub-rest: 10ms 0ms
}</code></pre>
				</figure>
				
				<figure id="tts020-ex06">
					<figcaption>Example 6 &#8212; Alternating voice gender</figcaption>
					<pre class="prettyprint linenums"><code class="lang-css">.male {
   -epub-voice-family: male
}

.female {
   -epub-voice-family: female
}</code></pre>
					<pre class="prettyprint linenums"><code class="lang-css">&lt;p class="female">
   Alice: But I don't want to go among mad people.
&lt;/p>

&lt;p class="male">
   The Cat: Oh, you can't help that.
   We're all mad here. I'm mad. You're mad.
&lt;/p></code></pre>
				</figure>
				
				<figure id="tts020-ex07">
					<figcaption>Example 7 &#8212; Using different same-gender voices</figcaption>
					<pre class="prettyprint linenums"><code class="lang-css">.huck {
   -epub-voice-family: child male 1
}

.tom {
   -epub-voice-family: child male 2
}</code></pre>
					<pre class="prettyprint linenums"><code class="lang-css">&lt;p class="tom">
   "Well—I—I—well, that ought to settle it, of course; 
   but I can't somehow seem to understand it no way.  
   Looky here, warn't you ever murdered AT ALL?"
&lt;/p>

&lt;p class="huck">
   "No. I warn't ever murdered at all—I played it on 
   them. You come in here and feel of me if you don't 
   believe me."
&lt;/p></code></pre>
				</figure>
			</section>
			
			<section id="tts020-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				<ul>
					<li>EPUB 3 &#8212; <a href="http://idpf.org/epub3/latest/contentdocs#sec-css-voice-characteristics">CSS 3.0 Speech</a></li>
					<li>CSS3 &#8212; <a href="http://www.w3.org/TR/2011/WD-css3-speech-20110818/">Speech Module</a> (working draft referenced by EPUB 3)</li>
				</ul>
			</section>
			
			<section id="tts020-faq" class="faq">
				<h3>Frequently Asked Questions</h3>
				
				<dl class="faq">
					<dt id="tts005-faq01">Are CSS3 Speech properties supported at this time?</dt>
					<dd><p>At the time of writing, no reading systems have appeared that support the CSS3 Speech properties. 
							Please send a report if the situation changes and this page has not been updated.</p></dd>
					<dt id="tts005-faq02">Can I force the TTS engine to say acronyms instead of spell them?</dt>
					<dd>
						<p>The Speech module does not provide a way to tell an engine it must voice a capitalized term. When 
							including an acronym like EPUB, you would have to use a lexicon or attach an SSML pronunciation 
							attribute to absolutely ensure that it does not get spelled out.</p>
					</dd>
					<dt id="tts005-faq03">Why do I need to control the voicing of punctuation?</dt>
					<dd>
						<p>Although most engines will voice significant pause points, such as colons, they will typically
							not render each punctuation point in a document as it would ruin the reading experience. There
							are times when it is critical to ensure that the reader is able to hear all the punctuation in
							a sentence or phrase, such as in grammar textbooks, programming guides and the like. 
							(See <a href="#tts020-ex03">Example 3</a>.)</p>
						<p>Accessible technologies also enable the pronunciation of all punctuation by default in elements
							such as <code>pre</code> and <code>code</code>. Although the benefit of reading all punctuation
							in computer code should be obvious, it's not always the case that preformatted text needs to
							such detailed rendering. Applying <code class="value">no-punctuation</code> to a <code>pre</code>
							block of text ensures that it will be read without punctuation being announced.</p>
					</dd>
				</dl>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>