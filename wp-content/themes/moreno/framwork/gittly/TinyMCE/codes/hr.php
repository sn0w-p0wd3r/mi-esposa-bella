<script type="text/javascript">
var HRDialog = {
	local_ed : 'ed',
	init : function(ed) {
		HRDialog.local_ed = ed;
		tinyMCEPopup.resizeToInnerSize();
	},
	insert : function insertHR(ed) {
	 
		// Try and remove existing style / blockquote
		tinyMCEPopup.execCommand('mceRemoveNode', false, null);
		 
		// set up variables to contain our input values
		var style = jQuery('select#hr-style').val();
		var margin_top = jQuery('input#hr-margin-top').val();
		var margin_bottom = jQuery('input#hr-margin-bottom').val(); 
		 
		 
		//set highlighted content variable
		var mceSelected = tinyMCE.activeEditor.selection.getContent();
		
		// setup the output of our shortcode
		var output = '';
		
		output = '&nbsp;';
		output = '[hr type="' + style + '" margin_top="'+margin_top+'" margin_bottom="'+margin_bottom+'"]';

		tinyMCEPopup.execCommand('mceReplaceContent', false, output);
		 
		// Return
		tinyMCEPopup.close();
	}
};
tinyMCEPopup.onInit.add(HRDialog.init, HRDialog);
 
</script>
<form action="/" method="get" accept-charset="utf-8">
	<div class="form-section clearfix">
        <label for="hr-style">Type</label>
        <select name="hr-style" id="hr-style" size="1">
            <option value="hr">Style #1</option>
             <option value="hr2">Style #2</option>
            <option value="hr3">Style #3</option>
            <option value="hr4">Style #4</option>
        </select>
    </div>
	<div class="form-section clearfix">
        <label for="hr-margin-top">Margin Top</label>
        <input type="text" name="hr-margin-top" value="" id="hr-margin-top" />
    </div>
  	<div class="form-section clearfix">
        <label for="hr-margin-bottom">Margin Bottom</label>
        <input type="text" name="hr-margin-bottom" value="" id="hr-margin-bottom" />
    </div>
        
	<a href="javascript:HRDialog.insert(HRDialog.local_ed)" id="insert" style="display: block; line-height: 24px;">Insert</a>
</form>