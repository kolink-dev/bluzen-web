<script>
        // ------------ Navigator side start ------------
        $(window).scroll(function () {
            const this_scroll_top = $(this).scrollTop();
            const fix_top_value = 0; // top 
            const m01_y = $("#top").offset().top;
            const m02_y = $("#about-us").offset().top -450;
            const m03_y = $("#our-clients").offset().top -420;
            const m04_y = $("#our-partners").offset().top -420;
            const m05_y = $("#our-projects").offset().top -420;

            let this_pass = "1";
            if (this_scroll_top >= (m01_y - fix_top_value) || this_scroll_top < (m02_y - fix_top_value)) {
                this_pass = "1";
            }
            if (this_scroll_top >= (m02_y - fix_top_value)) {
                this_pass = "2";
            }
            if (this_scroll_top >= (m03_y - fix_top_value)) {
                this_pass = "3";
            }
            if (this_scroll_top >= (m04_y - fix_top_value)) {
                this_pass = "4";
            }
            if (this_scroll_top >= (m05_y - fix_top_value)) {
                this_pass = "5";
            }

            
            fn_menu_on(this_pass);
        });

        function fn_menu_on(n){
            let active_class = '';
            if (n==1 || n==3) {
                active_class = 'active_location2';
                default_class = 'default_location2';
            } else {
                active_class = 'active_location';
                default_class = 'default_location'
            }

            remove_class = 'default_location active_location default_location2 active_location2';

            console.log(active_class);

            $('#main_location').find('a').removeClass(remove_class);
            $('#main_location').find('a').addClass(default_class);
            $('#quick_btn'+n).addClass(active_class);
        }
        // ------------ Navigator side end ------------
</script>
