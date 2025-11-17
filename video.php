<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Testimonials Slider</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        /* सामान्य स्टाइल */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .sec-space {
            padding: 50px 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        .section-header-center {
            text-align: center;
            margin-bottom: 40px;
        }
        .sub-heading {
            color: #007bff;
            font-size: 16px;
            font-weight: 600;
        }
        h2 {
            font-size: 32px;
            margin: 10px 0 0;
        }
        .video-card {
            position: relative;
            cursor: pointer;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        .video-card video {
            width: 100%;
            display: block;
            height: auto;
        }
        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .play-button {
            width: 60px;
            height: 60px;
            background: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            /* Simple Triangle for Play icon */
            clip-path: polygon(30% 20%, 30% 80%, 75% 50%);
            background-color: #007bff;
        }
        
        /* Swiper Custom CSS */
        .video-testimonials {
            padding: 10px 0; /* आवश्यक होने पर पैडिंग */
        }
        .swiper-slide {
            transition: width 0.3s ease, opacity 0.3s ease;
            opacity: 0.7; /* साइड स्लाइड्स को थोड़ा डिम करने के लिए */
        }
        .swiper-slide-active {
            opacity: 1; /* एक्टिव स्लाइड को फुल ओपेसिटी */
        }

        /* --- मोबाइल ब्रेकपॉइंट (480px और नीचे) --- */
        @media (max-width: 480px) {
            /* 'slidesPerView: 'auto'' के साथ काम करने के लिए सामान्य स्लाइड की width सेट करें */
            .video-testimonials .swiper-slide {
                width: 100px !important; /* साइड स्लाइड्स की width कम करें */
            }

            /* सक्रिय (Active) स्लाइड की width को 250px सेट करें */
            .video-testimonials .swiper-slide-active {
                width: 250px !important;
            }
        }
        /* --- पॉपअप स्टाइल --- */
        .video-popup {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
        }
        .video-popup-content {
            position: relative;
            max-width: 90%;
            max-height: 90%;
            background: transparent;
        }
        #popupVideo {
            display: block;
            max-width: 100%;
            max-height: 100vh;
        }
        .close-popup {
            position: absolute;
            top: 20px;
            right: 30px;
            color: #fff;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            z-index: 1001;
        }
    </style>
</head>
<body>

    <div class="container sec-space video-testimonials-sec">
        <div class="section-header-center">
            <p class="sub-heading">Real Stories, Real Journeys</p>
            <h2>Traveler Testimonials</h2>
        </div>
        
        <div class="swiper video-testimonials">
            <div class="swiper-wrapper video-gallery">
                <div class="swiper-slide">
                    <div class="video-card">
                        <video src="assets/img/hop-on-hop.mp4" loop muted></video>
                        <div class="video-overlay">
                            <div class="play-button"></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-card">
                        <video src="assets/img/hop-on-hop.mp4" loop muted></video>
                        <div class="video-overlay">
                            <div class="play-button"></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-card">
                        <video src="assets/img/hop-on-hop.mp4" loop muted></video>
                        <div class="video-overlay">
                            <div class="play-button"></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-card">
                        <video src="assets/img/hop-on-hop.mp4" loop muted></video>
                        <div class="video-overlay">
                            <div class="play-button"></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-card">
                        <video src="assets/img/hop-on-hop.mp4" loop muted></video>
                        <div class="video-overlay">
                            <div class="play-button"></div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="video-card">
                        <video src="assets/img/hop-on-hop.mp4" loop muted></video>
                        <div class="video-overlay">
                            <div class="play-button"></div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

        <div class="video-popup" id="videoPopup">
            <div class="video-popup-content">
                <span class="close-popup">&times;</span>
                <video id="popupVideo" controls autoplay></video>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Swiper Initialization
            var swiper = new Swiper(".video-testimonials", {
                // स्लाइडर को केंद्र में रखने के लिए
                centeredSlides: true, 
                slidesPerView: 4,
                spaceBetween: 30,
                grabCursor: true,
                loop: true,
                
                // Breakpoints
                breakpoints: {
                    // डेस्कटॉप और बड़े स्क्रीन
                    1366: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    },
                    768: {
                        slidesPerView: 3, // 768px पर 3 कार्ड बेहतर है
                        spaceBetween: 20,
                    },
                    // मोबाइल के लिए (480px और नीचे)
                    480: { 
                        // 'auto' slidesPerView का उपयोग करें ताकि CSS slide width को नियंत्रित कर सके
                        slidesPerView: '3', 
                        spaceBetween: 10,
                    },
                    0: {
                        slidesPerView: '3', 
                        spaceBetween: 10,
                    },
                },

                // Optional: Coverflow Effect (यदि आपको यह चाहिए)
                // coverflowEffect: {
                //     rotate: 0,
                //     stretch: -40,
                //     depth: 200,
                //     modifier: 1.5,
                //     slideShadows: false,
                // },
            });

            /* ------------------- Video Popup Logic ------------------- */
            const videoCards = document.querySelectorAll('.video-card');
            const videoPopup = document.getElementById('videoPopup');
            const popupVideo = document.getElementById('popupVideo');
            const closePopup = document.querySelector('.close-popup');

            videoCards.forEach(card => {
                card.addEventListener('click', function() {
                    // स्रोत वीडियो URL प्राप्त करें
                    const videoSrc = this.querySelector('video').getAttribute('src');
                    
                    // पॉपअप वीडियो स्रोत सेट करें
                    popupVideo.setAttribute('src', videoSrc);
                    
                    // पॉपअप दिखाएं
                    videoPopup.style.display = 'flex';
                    
                    // वीडियो प्ले करें
                    popupVideo.play();
                });
            });

            // पॉपअप बंद करने का फंक्शन
            function closeVideoPopup() {
                popupVideo.pause();
                popupVideo.removeAttribute('src'); // वीडियो को हटाने के लिए
                videoPopup.style.display = 'none';
            }

            // 'x' बटन पर बंद करें
            closePopup.addEventListener('click', closeVideoPopup);

            // ESC की पर बंद करें
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    closeVideoPopup();
                }
            });

            // पॉपअप के बाहर क्लिक करने पर बंद करें
            videoPopup.addEventListener('click', function(event) {
                if (event.target === videoPopup) {
                    closeVideoPopup();
                }
            });

            // सुनिश्चित करें कि वीडियो स्वाइप करते समय म्यूट हो
            document.querySelectorAll('.video-card video').forEach(video => {
                 video.muted = true; // सभी स्लाइड वीडियो को म्यूट रखें
            });
        });
    </script>

</body>
</html>