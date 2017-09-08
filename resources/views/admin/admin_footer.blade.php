
	<div id="footer">
	<footer>
		
	</footer>
	</div>
<script src="../js/nicEdit.js" type="text/javascript"></script>
<script>
var area1;

function toggleArea1() {
	if(!area1) {
		area1 = new nicEditor({fullPanel : true}).panelInstance('myArea1',{hasPanel : true});
	} else {
		area1.removeInstance('myArea1');
		area1 = null;
	}
}

bkLib.onDomLoaded(function() { toggleArea1(); });
</script>	
</body>
</html>