<h2>Dom</h2>

<p>Manipulating the document object model (DOM).</p>

<h3>html</h3>

<p>Adds elements or changes the content of an element on a page.</p>

<p>syntax:</p>

<pre><code>x$(window).html( location, htmlFragment );
</code></pre>

<p>_or_</p>

<pre><code>x$(window).html( htmlFragment );
</code></pre>

<p>arguments:</p>

<ul>
<li>location:string can be one of inner, outer, top, bottom</li>
<li>htmlFragment:string any string of html markup</li>
</ul>

<p>example:</p>

<pre><code>x$('#foo').html( 'inner',  htmlFragment );
x$('#foo').html( 'outer',  htmlFragment );
x$('#foo').html( 'top',    htmlFragment );
x$('#foo').html( 'bottom', htmlFragment );
</code></pre>

<p>_or_</p>

<pre><code>x$('#foo').html('&lt;p&gt;sweet as honey&lt;/p&gt;');
</code></pre>

<h2>Event</h2>

<p>A good old fashioned event handling system.</p>

<h3>on</h3>

<p>Registers a callback function to a DOM event on the element collection.</p>

<p>This method has shortcut aliases for: </p>

<ul>
<li>click</li>
<li>load</li>
<li>touchstart</li>
<li>touchmove</li>
<li>touchend</li>
<li>touchcancel</li>
<li>gesturestart</li>
<li>gesturechange</li>
<li>gestureend</li>
<li>orientationchange</li>
</ul>

<p>For more information see:</p>

<ul>
<li>http://developer.apple.com/webapps/docs/documentation/AppleApplications/Reference/SafariWebContent/HandlingEvents/chapter<em>7</em>section<em>1.html#//apple</em>ref/doc/uid/TP40006511-SW1</li>
</ul>

<p>syntax:</p>

<pre><code>x$('button').on( 'click', function(){ alert('hey that tickles!') });
</code></pre>

<p>arguments:</p>

<ul>
<li>type:string the event to subscribe to click|load|etc</li>
<li>fn:function a callback function to execute when the event is fired</li>
</ul>

<p>example:</p>

<pre><code>x$(window).load(function(e){
    x$('.save').touchstart( function(evt){ alert('tee hee!') });    
});
</code></pre>

<h2>Style</h2>

<p>Anything related to how things look. Usually, this is CSS.</p>

<h3>setStyle</h3>

<p>syntax: </p>

<p><code>x$('DIV').setStyle('width','100px');</code></p>

<p>arguments: </p>

<ul>
<li>prop (JavaScript CSS Key ie: borderColor NOT border-color ), val - String</li>
</ul>

<p>example:</p>

<h3>getStyle</h3>

<p>syntax: 
arguments: prop (CSS Key ie: border-color NOT borderColor)
if callback is a function, it will pass the value into the function orherwise return the proprty
example:
TODO: prop should be JS property, not CSS property</p>

<h3>addClass</h3>

<p>syntax:</p>

<p>$('.foo').addClass('awesome');</p>

<p>arguments:</p>

<p>className:string the name of the CSS class to apply</p>

<p>example:</p>

<h3>removeClass</h3>

<p>syntax:</p>

<p>$('.foo').removeClass('awesome');</p>

<p>arguments:</p>

<p>className:string the name of the CSS class to remove</p>

<p>example:</p>

<h3>css</h3>

<p>syntax: </p>

<p><code>x$(selector).css(object);</code></p>

<p>arguments: </p>

<ul>
<li>JSON object of key/value paires to set/modify style on.</li>
</ul>

<p>example:</p>

<p><code>x$('#box5').css({ backgroundColor:'blue', width:'100px', border:'2px solid red' });</code></p>

<h2>Fx</h2>

<p>Animations mostly but we're not excluding any ideas.</p>

<h3>tween</h3>

<p>syntax:</p>

<pre><code>x$('#box').tween({ left:100px, backgroundColor:'blue' });

x$('#box').tween([{ left:100px, backgroundColor:'green', duration:.2 }, { right:100px }]);

x$('#box').tween({ left:100px}).tween({ left:100px });
</code></pre>

<p>arguments:</p>

<p>properties:object an object literal of element properties to tween.</p>

<p>_or_</p>

<p>queue:array an array literal of objects which contain properties to tween sequentially.</p>

<p>example:</p>

<h2>Xhr</h2>

<p>Remoting methods and ultilites.  </p>

<h3>xhr</h3>

<p>syntax:</p>

<p><code>xhr('path/to/file.html', {});</code></p>

<p>arguments:</p>

<p>url:string the url for request</p>

<p>options:object</p>

<ul>
<li>method:string get|put|delete|post default get</li>
<li>async:boolen default false</li>
<li>data:string url encoded string of parameters to send</li>
<li><p>callback:function to call on 200 status</p></li>
<li><p>Returns responseText back 
example:</p></li>
</ul>

<h3>xhrjson</h3>

<p>syntax:</p>

<p><code>xhr('path/to/file.html', {});</code></p>

<p>arguments:</p>

<p>url:string the url for request</p>

<p>options:object (Options is the same as XHR with map:object and new callback:function)</p>

<ul>
<li>method:string get|put|delete|post default get</li>
<li>async:boolen default false</li>
<li>data:string url encoded string of parameters to send</li>
<li>map:object {'dom selector':'json key'}</li>
<li>callback:function - this function is applied to each json value</li>
</ul>
