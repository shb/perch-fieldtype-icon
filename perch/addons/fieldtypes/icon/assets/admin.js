PerchFieldType_icon = function ( itemID )
{
	this.item = docuemnt.getElementById( itemID );
	
	//this.addEventListener( "change", this.onChange, false );
}

PerchFieldType_icon.onChange = function ( event )
{
	var evt = event || window.event
	  , tgt = evt.target || evt.srcElement
	  , pwId = tgt.id+"_preview"
	  , pw = document.getElementById( pwId );
	pw.className = "fa fa-"+tgt.value+" fa-2x fa-fw";
}
