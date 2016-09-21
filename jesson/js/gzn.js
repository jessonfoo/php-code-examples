<script type="text/javascript">
$(document).ready(function(){
	$('li#menu-item-60, div.nav-sublist-dropdown').mouseover(function(){
		$('#menu-item-60 > div.nav-sublist-dropdown').show();
	});
	$('li#menu-item-60, div.nav-sublist-dropdown').mouseout(function(){
		$('#menu-item-60 > div.nav-sublist-dropdown').hide();
	});
	$('li#menu-item-60 > a').click(function(){
		return false;
	});
});
</script>
