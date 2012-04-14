<link href="../../app/webroot/colorpicker/css/colorpicker.css" rel="stylesheet" type="text/css" />
<link href="../../app/webroot/colorpicker/css/layout.css" rel="stylesheet" type="text/css" />

<h1>COLOR TEST</h1>


<style>

.filter {
background: rgba(250, 24, 26, .5);
}
</style>

	<script type="text/javascript" src="../../app/webroot/colorpicker/js/jquery.js"></script>
	<script type="text/javascript" src="../../app/webroot/colorpicker/js/colorpicker.js"></script>
    <script type="text/javascript" src="../../app/webroot/colorpicker/js/eye.js"></script>
    <script type="text/javascript" src="../../app/webroot/colorpicker/js/utils.js"></script>
    <script type="text/javascript" src="../../app/webroot/colorpicker/js/layout.js?ver=1.0.2"></script>

<!--<div class="filter" style="position:absolute;z-index:1000;top:200px;left:138px; width:460px; height:109px">

</div>
-->





<div>
<img src="../../app/webroot/img/awning-for-bg-page001.svg" width="680" height="109" /> 

</div>

<!--<div class="wrapper">
        <h1>Color Picker - jQuery plugin</h1>
       
        <div class="tabsContent">
            <div class="tab">
                <h2>About</h2>
                <p>A simple component to select color in the same way you select color in Adobe Photoshop</p>
				<h3>Last update</h3>
				<p>23.05.2009 - Check Download tab</p>
                <h3>Features</h3>
                <ul>
                    <li>Flat mode - as element in page</li>
                    <li>Powerful controls for color selection</li>
					<li>Easy to customize the look by changing some images</li>
					<li>Fits into the viewport</li>
                </ul>
				<h3>License</h3>
				<p>Dual licensed under the MIT and GPL licenses.</p>
                <h3>Examples</h3>
                <p>Flat mode.</p>
                <p id="colorpickerHolder">
                </p>
                <pre>
$('#colorpickerHolder').ColorPicker({flat: true});
                </pre>
                <p>Custom skin and using flat mode to display the color picker in a custom widget.</p>
				<div id="customWidget">
					<div id="colorSelector2"><div style="background-color: #00ff00"></div></div>
	                <div id="colorpickerHolder2">
	                </div>
				</div>

				<p>Attached to an text field and using callback functions to update the color with field's value and set the value back in the field by submiting the color.</p>
				<p><input type="text" maxlength="6" size="6" id="colorpickerField1" value="00ff00" /></p>
				<p><input type="text" maxlength="6" size="6" id="colorpickerField3" value="0000ff" /></p>
				<p><input type="text" maxlength="6" size="6" id="colorpickerField2" value="ff0000" /></p>
				<pre>$('#colorpickerField1, #colorpickerField2, #colorpickerField3').ColorPicker({
	onSubmit: function(hsb, hex, rgb, el) {
		$(el).val(hex);
		$(el).ColorPickerHide();
	},
	onBeforeShow: function () {
		$(this).ColorPickerSetColor(this.value);
	}
})
.bind('keyup', function(){
	$(this).ColorPickerSetColor(this.value);
});
</pre>
				<p>Attached to DOMElement and using callbacks to live preview the color and adding animation.</p>
				<p>
			  <div id="colorSelector"><div style="background-color: #0000ff"></div></div>
				</p>
				<pre>
$('#colorSelector').ColorPicker({
	color: '#0000ff',
	onShow: function (colpkr) {
		$(colpkr).fadeIn(500);
		return false;
	},
	onHide: function (colpkr) {
		$(colpkr).fadeOut(500);
		return false;
	},
	onChange: function (hsb, hex, rgb) {
		$('#colorSelector div').css('backgroundColor', '#' + hex);
	}
});
</pre>
            </div>
            <div class="tab">
                
            <div class="tab">
                <h2>Implement</h2>
                <p>Attach the Javascript and CSS files to your document. Edit CSS file and fix the paths to  images and change colors to fit your site theme.</p>
                <pre>
&lt;link rel="stylesheet" media="screen" type="text/css" href="css/colorpicker.css" /&gt;
&lt;script type="text/javascript" src="js/colorpicker.js"&gt;&lt;/script&gt;
                </pre>
                <h3>Invocation code</h3>
                <p>All you have to do is to select the elements in a jQuery way and call the plugin.</p>
                <pre>
 $('input').ColorPicker(options);
                </pre>
                <h3>Options</h3>
                <p>A hash of parameters. All parameters are optional.</p>
                <table>
                	<tr>
                		<td><strong>eventName</strong></td>
                		<td>string</td>
                		<td>The desired event to trigger the colorpicker. Default: 'click'</td>
                	</tr>
                	<tr>
                		<td><strong>color</strong></td>
                		<td>string or hash</td>
                		<td>The default color. String for hex color or hash for RGB and HSB ({r:255, r:0, b:0}) . Default: 'ff0000'</td>
                	</tr>
                	<tr>
                		<td><strong>flat</strong></td>
                		<td>boolean</td>
                		<td>Whatever if the color picker is appended to the element or triggered by an event. Default false</td>
                	</tr>
                	<tr>
                		<td><strong>livePreview</strong></td>
                		<td>boolean</td>
                		<td>Whatever if the color values are filled in the fields while changing values on selector or a field. If false it may improve speed. Default true</td>
                	</tr>
                	<tr>
                		<td><strong>onShow</strong></td>
                		<td>function</td>
                		<td>Callback function triggered when the color picker is shown</td>
                	</tr>
                	<tr>
                		<td><strong>onBeforeShow</strong></td>
                		<td>function</td>
                		<td>Callback function triggered before the color picker is shown</td>
                	</tr>
                	<tr>
                		<td><strong>onHide</strong></td>
                		<td>function</td>
                		<td>Callback function triggered when the color picker is hidden</td>
                	</tr>
                	<tr>
                		<td><strong>onChange</strong></td>
                		<td>function</td>
                		<td>Callback function triggered when the color is changed</td>
                	</tr>
                	<tr>
                		<td><strong>onSubmit</strong></td>
                		<td>function</td>
                		<td>Callback function triggered when the color it is chosen</td>
                	</tr>
                </table>
                <h3>Set color</h3>
                <p>If you want to set a new color.</p>
                <pre>$('input').ColorPickerSetColor(color);</pre>
				<p>The 'color' argument is the same format as the option color, string for hex color or hash for RGB and HSB ({r:255, r:0, b:0}).</p>
            </div>
        </div>
</div>
-->
<script type="text/javascript">


//$('#colorSelector').ColorPicker({
//	color: '#0000ff',
//	onShow: function (colpkr) {
//		$(colpkr).fadeIn(500);
//		return false;
//	},
//	onHide: function (colpkr) {
//		$(colpkr).fadeOut(500);
//		return false;
//	},
//	onChange: function (hsb, hex, rgb) {
//		$('#colorSelector div').css('backgroundColor', '#' + hex);
//	}
//});

</script>