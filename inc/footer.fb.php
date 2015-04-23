<script>
jQuery(document).ready(function(){
		jQuery.ajaxSetup({ cache: true });		
		jQuery.getScript('//connect.facebook.net/en_UK/all.js', function(){
		FB.init({
		  appId      : '822162021210177',		  
		  version: 'v2.3' 
		});
		//FB.getLoginStatus(loginStatus);
		FB.Canvas.scrollTo(0,0);
			d = setTimeout(function(){
				FB.Canvas.setSize();
			}, 3000);
		});//getScript	
});
//LLike home
</script>