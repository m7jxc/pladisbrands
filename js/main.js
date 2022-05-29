
/* nav */

        $(window).scroll(function() {
            var scroll = $(this).scrollTop();
            if( scroll > $('#top-w').outerHeight() - 0 )
            {
                $('#menu-w').addClass('menu-f').removeClass('menu-w');
            }
            else
            {
                $('#menu-w').removeClass('menu-f').addClass('menu-w');
            }
        });

/* menu button */

        var burger = $('.menu-trigger');

        burger.each(function(index){
            var $this = $(this);

            $this.on('click', function(e){
                e.preventDefault();
                $(this).toggleClass('active-' + (index+1));
            })
        });

/* */

        $(function() {
            $('.menu-trigger').click(function(){
                $('#menu-w').fadeToggle(300);
            });
        });

/* lightGallery */

        $(function() {
            $('.lightGallery').lightGallery({
                thumbnail:false,
                loop:true
            });
        });

/* */

        $(function() {
            $('.box-9 img').click(function(){
                $('.box-9').stop().children('.hover').addClass('fadeOutDown2').removeClass('fadeInUp2').addClass('animated').fadeOut(500);
                $(this).parent().children('.hover').stop().fadeIn(0).addClass('fadeInUp2').removeClass('fadeOutDown2').addClass('animated');
            });
        });

        $(function() {
            $('.box-9 .close').click(function(){
                $(this).parent().stop().addClass('fadeOutDown2').removeClass('fadeInUp2').addClass('animated').fadeOut(500);
            });
        });

/* */
        $(function() {
            $('.wrapper, .close').click(function(){
                $('.wrapper, .thnx').fadeOut(300);
            });
        });

/* form validate */

        $(function() {
            $('#form').validate(
                {
                    rules: {
                        "name": {
                            required: true,
                            maxlength: 40
                        },
                        "numb":{
                            required:true
                        },
                        "subject": {
                            required: true
                        },
                        "message": {
                            required: true
                        }
                    },
                    messages: {
                        "name": {
                            required: ""
                        },
                        "numb":{
                            required:""
                        },
                        "subject": {
                            required: ""
                        },
                        "message": {
                            required: ""
                        }
                    }
                });
        });

/* thnx */

        $(function() {
            $('#form').ajaxForm(function() {
                $('.wrapper, .thnx').fadeIn(300);
                $('#form')[0].reset();
            });
        });

/* animation */

        $('.ani-menu').waypoint(function () {
            $(this).addClass('fadeInDown0').addClass('animated');
        }, {
            offset:'100%'
        });

        $('.ani-1').waypoint(function () {
            $(this).addClass('fadeInDown').addClass('animated');
        }, {
            offset:'100%'
        });

        $('.ani-2').waypoint(function () {
            $(this).addClass('fadeInLeft').addClass('animated');
        }, {
            offset:'100%'
        });

        $('.ani-3').waypoint(function () {
            $(this).addClass('fadeInUp').addClass('animated');
        }, {
            offset:'85%'
        });

        $('.ani-4').waypoint(function () {
            $(this).addClass('fadeInLeft').addClass('animated');
        }, {
            offset:'85%'
        });

        $('.ani-5').waypoint(function () {
            $(this).addClass('fadeInRight').addClass('animated');
        }, {
            offset:'85%'
        });

 /* number animation (http://aishek.github.io/jquery-animateNumber) */

        var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(' ');

        $('.number-1').waypoint(function () {
            $(this).animateNumber({ number: 26000, numberStep: comma_separator_number_step }, 1500);
        }, {
            offset:'85%'
        });

        $('.number-2').waypoint(function () {
            $(this).animateNumber({ number: 34, numberStep: comma_separator_number_step }, 1500);
        }, {
            offset:'85%'
        });

        $('.number-3').waypoint(function () {
            $(this).animateNumber({ number: 120, numberStep: comma_separator_number_step }, 1500);
        }, {
            offset:'85%'
        });

        $('.number-4').waypoint(function () {
            $(this).animateNumber({ number: 25, numberStep: comma_separator_number_step }, 1500);
        }, {
            offset:'85%'
        });

/* end */