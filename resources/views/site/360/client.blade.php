<section id="clients" class="clients section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
                {
                  "loop": true,
                  "speed": 600,
                  "autoplay": {
                    "delay": 5000
                  },
                  "slidesPerView": "auto",
                  "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                  },
                  "breakpoints": {
                    "320": {
                      "slidesPerView": 2,
                      "spaceBetween": 40
                    },
                    "480": {
                      "slidesPerView": 3,
                      "spaceBetween": 60
                    },
                    "640": {
                      "slidesPerView": 4,
                      "spaceBetween": 80
                    },
                    "992": {
                      "slidesPerView": 3,
                      "spaceBetween": 120
                    }
                  }
                }
            </script>
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide d-flex justify-content-center align-items-center"><img src="{{asset('img/logo-espindola-imob.jpg')}}" class="img-fluid" style="max-width: 150px; max-height: 110px;" alt=""></div>
                <div class="swiper-slide d-flex justify-content-center align-items-center"><img src="{{asset('img/logo-nomades.png')}}" class="img-fluid" style="max-width: 150px; max-height: 110px;" alt=""></div>
                <div class="swiper-slide d-flex justify-content-center align-items-center"><img src="{{asset('img/logo-cactos.jpg')}}" class="img-fluid" style="max-width: 150px; max-height: 110px;" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section>
