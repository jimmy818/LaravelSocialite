<div class="footer">
    <p>&copy; 2018 Glance Design Dashboard. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">w3layouts</a></p>
</div>
<!--//footer-->
</div>

<!-- new added graphs chart js-->

<script src="{{{ asset('admin/js/utils.js') }}}"></script>
<script src="{{{ asset('admin/js/classie.js') }}}"></script>
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
<!-- //Classie --><!-- //for toggle left push menu script -->

<!--scrolling js-->
<script src="{{{ asset('admin/js/jquery.nicescroll.js') }}}"></script>
<script src="{{{ asset('admin/js/scripts.js') }}}"></script>
<!--//scrolling js-->

<!-- side nav js -->
<script src='{{{ asset('admin/js/SidebarNav.min.js') }}}' type='text/javascript'></script>
<script>
    $('.sidebar-menu').SidebarNav()
</script>
<!-- //side nav js -->

<!-- Bootstrap Core JavaScript -->
<script src="{{{ asset('admin/js/bootstrap.js') }}}"> </script>
<!-- //Bootstrap Core JavaScript -->

</body>
</html>