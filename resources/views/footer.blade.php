   @include('modals')
	
	<!--footer-->
		<div class="footer">
		   <p>All Rights Reserved &copy; {{$settings->site_name}} 2019</p>
		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="{{ asset('js/classie.js')}}"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<!--
	<script src="{{ asset('js/jquery.nicescroll.js')}}"></script>
	<script src="{{ asset('js/scripts.js')}}"></script>
	-->
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="{{ asset('js/bootstrap.js')}}"> </script>
   <!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
  window.__lc = window.__lc || {};
  window.__lc.license = 11759130;
  (function() {
    var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
    lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
  })();
</script>
<noscript>
<a href="https://www.livechatinc.com/chat-with/11759130/" rel="nofollow">Chat with us</a>,
powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
</noscript>
<!-- End of LiveChat code -->
@auth
<script type="text/javascript">
setTimeout(() => {
  LC_API.set_visitor_email("{{Auth::user()->email}}");
LC_API.set_visitor_name("{{Auth::user()->name}}");
}, 2000);
</script>
   
@endauth
</body>
</html>