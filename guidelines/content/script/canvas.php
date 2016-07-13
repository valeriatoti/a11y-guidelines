<?php include_once('../../includes/xml-declaration.php'); ?>
<?php $id='sc030'; $nav=1; $nav_items=array( 'exes','reqs','res'); $category='script'; $page_name='Canvas'; ?>
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
		
		<section id="sc030" class="section">
			<?php include_once('../../includes/page-title.php'); ?>
			
			<section id="sc030-desc" class="usage">
				<p>The <code>canvas</code> element provides a two-dimensional drawing surface, which introduces the same 
					accessibility issues as occur with <a href="../xhtml/images.php">images</a>. That the element
					can be used for static and dynamic images makes it similar in nature to SVG, and further complicates
					access.</p>
				
				<p>When using the element to draw static two-dimensional images, consider wrapping the element as
					a <code>figure</code> and <a href="../xhtml/figures.php">embedding a description in the caption</a>.</p>
				
				<p>If the element is used to draw bar graphs, pie charts and similar data representations, also
					consider making that data available in a more accessible form (e.g., as a table).</p>
				
				<div epub:type="note">
					<p class="label">Note</p>
					<p>The HTML specification requires that equivalent fallback content be provided when using the
						<code>canvas</code> element. Although this content can be embedded in the <code>canvas</code>
						element itself, doing so may interfere with other accessibility requirements (e.g., a description
						should not be included in the <code>canvas</code> if the <code>canvas</code> element already
						contains shadow DOM elements for scripting).</p>
				</div>
				
				<p>Before scripting content, consider the impact it will have on the user experience. If the information
					that you draw is critical to the comprehension of the book, ensure that scripting the element
					is only an <a href="pe.php">enhancement of that information</a> (i.e., do not lock it up in a 
					requirement that scripting be enabled).</p>
				
				<p>Ideally, when scripting the <code>canvas</code> element the element should remain accessible.
					Since the element is just a bitmap image, current accessibility work is aimed at providing a
					shadow DOM that can be manipulated. To this end, developers can embed accessible elements (using
					WAI-ARIA states and properties) inside the <code>canvas</code> element to represent what is being 
					drawn, thereby allowing assistive technologies to interact with the accessible elements in similar
					fashion to how someone would visually interact with the display.</p>
				
				<p>Early experimental support is only just beginning to appear, however, so this page is subject
					to change.</p>
			</section>
			
			<section id="sc030-ex" class="example">
				<h3>Examples</h3>
				<figure id="sc030-ex01">
					<figcaption>Example 1 &#8212; Wrapping a canvas in a figure</figcaption>
					<pre class="prettyprint linenums small"><code>&lt;figure>
   &lt;figcaption>
      &lt;span class="caption">Figure 1 — Sales 
      of tablets by manufacturer: Sorny 45%, 
      MagnetBox 25%, Panaphonics 30%&lt;/span>
   &lt;/figcaption>
   &lt;canvas id="piechart" width="400" height="400">&lt;/canvas>
&lt;/figure>
&lt;script>
&lt;![CDATA[
   function drawPie() {
   
      var mfctr = new Array();
          mfctr[0] = new Array();
          mfctr[0].name = 'Sorny';
          mfctr[0].pct = 45;
          mfctr[0].color = 'rgb(0,0,255)';
          mfctr[1] = new Array();
          mfctr[1].name = 'MagnetBox';
          mfctr[1].pct = 25;
          mfctr[1].color = 'rgb(0,255,0)';
          mfctr[2] = new Array();
          mfctr[2].name = 'Panaphonics';
          mfctr[2].pct = 30;
          mfctr[2].color = 'rgb(255,0,0)';
      
      var canvas = document.getElementById('piechart');
      
      var context = canvas.getContext('2d');
          context.clearRect(0, 0, canvas.width, canvas.height);
      
      var lastpos = 0;
      var labelpos = 325;
      
      for (var i = 0; i &lt; mfctr.length; i++) {
         
         var m = mfctr[i];
         
         context.fillStyle = m.color;
         context.beginPath();
         context.moveTo(200,150);
         context.arc(200,150,150,lastpos,lastpos+(Math.PI*2*(m.pct/100)),false);
         context.lineTo(200,150);
         context.fill();
         
         context.strokeStyle = 'rgb(0,0,0)';
         context.stroke();
         
         context.fillStyle = m.color;
         context.font = "16pt Arial";
         
         var text = m.name;
         var offset = context.measureText(text);
         context.fillText(text, 0, labelpos);
         
         var pctlabel = ' -- ' + m.pct + '%';
         
         context.fillStyle = 'rgb(0,0,0)';
         context.fillText(pctlabel, offset.width, labelpos);
         
         labelpos += 35;
         lastpos += Math.PI*2*(m.pct/100);
      }
   }
   
   drawPie();
]]&gt;
&lt;/script></code></pre>
					
					<p>Following is a working demo of this code:</p>
					
					<figure>
						<figcaption>
							<span class="caption">Figure 1 — Sales 
								of tablets by manufacturer: Sorny 45%, 
								MagnetBox 25%, Panaphonics 30%</span>
						</figcaption>
						<canvas id="piechart" width="400" height="400">
						  <ul>
							<li>Sorny 45%</li>
							<li>MagnetBox 25%</li>
							<li>Panaphonics 30%</li>
						  </ul>
						</canvas>
						<script>
   <![CDATA[
      function drawPie() {
      
         var mfctr = new Array();
             mfctr[0] = new Array();
         	 mfctr[0].name = 'Sorny';
         	 mfctr[0].pct = 45;
         	 mfctr[0].color = 'rgb(0,0,255)';
             mfctr[1] = new Array();
             mfctr[1].name = 'MagnetBox';
         	 mfctr[1].pct = 25;
         	 mfctr[1].color = 'rgb(0,255,0)';
             mfctr[2] = new Array();
             mfctr[2].name = 'Panaphonics';
         	 mfctr[2].pct = 30;
         	 mfctr[2].color = 'rgb(255,0,0)';
         
         var canvas = document.getElementById('piechart');
         
         var context = canvas.getContext('2d');
             context.clearRect(0, 0, canvas.width, canvas.height);
         
         var lastpos = 0;
         var labelpos = 325;
         
         for (var i = 0; i < mfctr.length; i++) {
            
            var m = mfctr[i];
            
            context.fillStyle = m.color;
            context.beginPath();
            context.moveTo(200,150);
            context.arc(200,150,150,lastpos,lastpos+(Math.PI*2*(m.pct/100)),false);
            context.lineTo(200,150);
            context.fill();
            
            context.strokeStyle = 'rgb(0,0,0)';
            context.stroke();
            
            context.fillStyle = m.color;
            context.font = "16pt Arial";
            
            var text = m.name;
            var offset = context.measureText(text);
            context.fillText(text, 0, labelpos);
            
            var pctlabel = ' -- ' + m.pct + '%';
            
            context.fillStyle = 'rgb(0,0,0)';
            context.fillText(pctlabel, offset.width, labelpos);
            
            labelpos += 35;
            lastpos += Math.PI*2*(m.pct/100);
         }
      }
      
      drawPie();
   ]]>
   </script>
					</figure>
				</figure>
			</section>
			
			<section id="sc030-reqs" class="reqs">
				<h3>Compliance References and Standards</h3>
				
				<ul>
					<li>HTML5 &#8212; <a href="http://www.w3.org/TR/html5/scripting-1.html#the-canvas-element">The <code>canvas</code> element</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G15.html">G15: Using a tool to ensure that content does not violate the general flash threshold or red flash threshold</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G19.html">G19: Ensuring that no component of the content flashes more than three times in any 1-second period</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G103.html">G103: Providing visual illustrations, pictures, and symbols to help explain ideas, events, and processes</a></li>
					<li>WCAG 2.0 &#8212; <a href="http://www.w3.org/TR/WCAG20-TECHS/G111.html">G111: Using color and pattern</a></li>
				</ul>
			</section>
			
			<section id="sc030-res" class="res">
				<h3>Additional Resources</h3>
				<ul>
					<li><a href="http://www.jumis.com/cme-wcag.html">Canvas Method Experiments in WCAG</a></li>
					<li><a href="http://www.jumis.com/cme-tech.html">Canvas Uses and Techniques for WCAG</a></li>
				</ul>
			</section>
		</section>
		
		<?php include_once('../../includes/footer.php'); ?>
	</body>
</html>