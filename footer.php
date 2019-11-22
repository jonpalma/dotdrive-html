<footer>
    <div class="container pt-5 pb-5 text-white" id="contact">
        <div class="row align-items-center pt-5 pb-5">
            <div class="col-lg-5 col-md-5 col-sm-12 mt-4 mb-4">
                <img src="img/logo-white.png" alt="logo" class="img-fluid mb-5">
                <p>
                    Address. 13029 Pellicano Dr.<br>
                    El Paso Texas<br>
                    79928
                </p>
                <p>
                    Tel. (915)241-7909
                </p>
                <p>
                    Email. info@dotdrive.net
                </p>
                <!-- <a href="" target="_blank" class="btn btn-link"><img src="img/f-fb.png" alt="facebook" class="img-fluid"></a>
                <a href="" target="_blank" class="btn btn-link"><img src="img/f-tw.png" alt="twitter" class="img-fluid"></a>  
                -->  

            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 text-center">
                <h2 class="no-divider">Contact Us!</h2>
                <iframe src="http://nearmx.com/safety/contact/contact.php" allowtransparency="true" style="border: none; width: 100%; height: 420px;"></iframe>
            </div>
        </div>
    </div>
    <div class="text-center text-white footer-bottom pt-2 pb-2">
        <span class="text-center">All rights reserved 2019. <a href="#" data-toggle="modal" data-target="#privacy">Privacy Notice.</a></span>
    </div>
</footer>

<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="slick/slick.min.js" type="text/javascript"></script>
<script>
    (() => {
        let slick = $('.slick-init'),
            initSlick = () => {
                slick.on('init', function (event, slick) {
                    let center = $('.slick-center');
                    $('.slck-adj').removeClass('slck-adj');
                    $('.slck-lat').removeClass('slck-lat');
                    center.prev().addClass('slck-adj').prev().addClass('slck-lat');
                    center.next().addClass('slck-adj').next().addClass('slck-lat');
                    $(`[data-tgt-slick]`).removeClass('transition').removeClass('active');
                    $(`[data-tgt-slick=${center.data('slick-index')}]`).addClass('active');
                    console.log(event, slick, center.data('slick-index'));
                }).on('beforeChange', function (event, slick, currentSlide, nextSlide) {
                    let slckC = $('.slick-center'),
                        center = null,
                        direction = '';
                    if (Math.abs(nextSlide - currentSlide) === 1) {
                        direction = (nextSlide - currentSlide > 0) ? "right" : "left";
                    }
                    else {
                        direction = (nextSlide - currentSlide > 0) ? "left" : "right";
                    }
                    switch (direction) {
                        case 'right':
                            center = slckC.next();
                            break;
                        case 'left':
                            center = slckC.prev();
                            break;
                    }
                    $('.slck-adj').removeClass('slck-adj');
                    $('.slck-lat').removeClass('slck-lat');
                    center.prev().addClass('slck-adj').prev().addClass('slck-lat');
                    center.next().addClass('slck-adj').next().addClass('slck-lat');
                    $(`[data-tgt-slick=${currentSlide}]`).removeClass('active').addClass('transition');
                }).on('afterChange', function (event, slick, currentSlide, data) {
                    let current = $(`[data-tgt-slick=${currentSlide}]`);
                    $(`.transition[data-tgt-slick]`).removeClass('transition');
                    current.addClass('active');
                });

                slick.slick({
                    centerMode: true,
                    centerPadding: '0',
                    slidesToShow: 5,
                    arrows: true,
                    prevArrow: `<button class="slck-prev"><i class="fas fa-chevron-left"></i></button`,
                    nextArrow: `<button class="slck-next"><i class="fas fa-chevron-right"></i></button`,
                    swipe: false,
                    responsive: [
                        {
                            breakpoint: 767,
                            settings: {
                                arrows: true,
                                centerMode: true,
                                centerPadding: '0',
                                slidesToShow: 3,
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                arrows: false,
                                centerMode: true,
                                centerPadding: '0',
                                slidesToShow: 1,
                                autoplay: true,
                            }
                        }
                    ]
                });
            };
        initSlick();

        let rtime,
            timeout = false,
            delta = 200;

        $(window).resize(function() {
            rtime = new Date();
            if (timeout === false) {
                timeout = true;
                setTimeout(resizeend, delta);
            }
        });

        function resizeend() {
            if (new Date() - rtime < delta) {
                setTimeout(resizeend, delta);
            } else {
                timeout = false;
                console.log('here');
                slick.slick('unslick');
                initSlick();
            }
        }
    })();
</script>
</body>
</html>