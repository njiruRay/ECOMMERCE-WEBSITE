<!DOCTYPE html>
<meta charset="utf-8" />
<meta
  name="viewport"
  content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
/>
    <title>FarmsFresh.com</title>

    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
  />
  
<!-- custom logo file link  -->
    <script src="https://kit.fontawesome.com/9209a55e72.js" crossorigin="anonymous"></script>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    <script src="style.js"></script>

</head>
<body>


<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo"><img id="logo1"  src="images/farmer.png" alt="My Image">FarmsFresh </a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#features">features</a>
        <a href="#products">products</a>
        <a href="#categories">categories</a>
        <a href="#review">review</a>
        <a href="#blogs">podcast</a>
    </nav>

    <div class="icons">
        <div class="fa-solid fa-bars" id="menubtn"></div>
        <div class="fa-solid fa-magnifying-glass"  id="searchbtn"></div>
        <div class="fa-solid fa-cart-shopping" id="cartbtn"></div>
        <div class="fa-solid fa-arrow-right-to-bracket" id="loginbtn"></div>
       

        <form action="" class="searchform">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    

        <form action="" class="loginform">
            <h3>login now</h3>
            <input type="email" placeholder="your email" class="box">
            <input type="password" placeholder="your password" class="box">
            <p>forget your password <a href="#">click here</a></p>
            <p>don't have an account <a href="#">create now</a></p>
            <input type="submit" value="login now" class="btn">
        </form>

    </header>



    <section class="home" id="home">

        <div class="content">
            <h2>fresh and <span>organic</span> products for you</h2>
            <p>Online grocery shopping made easy at Groco, wide range of products at best prices. 
            order from the wide range of products available.</p>
            <a href="#" class="btn">shop now</a>
        </div>
       
    
    </section>



    <section class="features" id="features">

        <h1 class="heading"> our <span>features</span> </h1>
    
        <div class="box-container">
    
            <div class="box">
                <img src="https://thumbs.dreamstime.com/b/groceries-paper-bag-vector-illustration-97077851.jpg" alt="">
                <h3>fresh and organic</h3>
                <p>Fresh and handpicked farm products available at your doorsteps in just one click</p>
                <a href="#" class="btn">read more</a>
            </div>
    
            <div class="box">
                <img src="https://img.freepik.com/free-vector/delivery-staff-ride-motorcycles-shopping-concept_1150-34879.jpg?w=2000" alt="">
                <h3>free delivery</h3>
                <p>We charge absolutely zero charges on every item delivered.</p>
                <a href="#" class="btn">read more</a>
            </div>
    
            <div class="box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt2zpTwIGOCExd1_-Rp3dPqGHPSwZaQykRjA&usqp=CAU" alt="">
                <h3>easy payments</h3>
                <p>Cash on delivery and wide range of online payments such as any upi,credit or debit card.</p>
                <a href="#" class="btn">read more</a>
            </div>
    
        </div>
    
    </section>
    

<!--Products section -->


<section class="products" id="products">

    <h1 class="heading"> our <span>products</span> </h1>
    
    <div class="swiper mySwiper proslide">
        <div class="swiper-wrapper">
          <div class="swiper-slide prbox"> <img src="https://5.imimg.com/data5/VN/YP/MY-33296037/orange-600x600-500x500.jpg" alt="">
            <h3>orange</h3>
            <div class="price">Rs 50.00/kg</div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">add to cart</a></div>


          <div class="swiper-slide prbox"> <img src="https://thumbs.dreamstime.com/b/lemon-isolated-24834437.jpg" alt="">
            <h3>lemon</h3>
            <div class="price"> Ksh 200.00/kg </div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">add to cart</a></div>


          <div class="swiper-slide prbox"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_c4mzTsqYoLWHNziM4mHQEEp6-qCek6H7bQ&usqp=CAU" alt="">
            <h3>onion</h3>
            <div class="price"> Ksh150.00/kg</div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">add to cart</a></div>


          <div class="swiper-slide prbox"><img src="https://media.istockphoto.com/photos/fresh-raw-rib-eye-steaks-isolated-on-white-picture-id935316446?k=20&m=935316446&s=612x612&w=0&h=IW28n9nLykgGnHYlk_IKbyvRUEWcyzDyfPCz1VENk6k=" alt="">
            <h3>meat</h3>
            <div class="price">Ksh 550.00/kg</div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">add to cart</a></div>

            <div class="swiper-slide prbox">
            <img src="https://thumbs.dreamstime.com/z/cabbage-19608230.jpg" alt="">
            <h3>cabbage</h3>
            <div class="price"> Ksh 50.00/kg </div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">add to cart</a>
</div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>

<!--another product section-->

      <div class="swiper mySwiper proslide">
        <div class="swiper-wrapper">
          <div class="swiper-slide prbox"> <img src="https://static7.depositphotos.com/1002351/792/i/450/depositphotos_7926477-stock-photo-new-potato.jpg" alt="">
            <h3>potato</h3>
            <div class="price"> Ksh 100.00/kg </div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">add to cart</a></div>


          <div class="swiper-slide prbox">  <img src="https://m.media-amazon.com/images/I/71cs5TNn-LL._SX679_.jpg" alt="">
            <h3>avocado</h3>
            <div class="price"> Ksh 55.00/kg </div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">add to cart</a></div>


          <div class="swiper-slide prbox">  <img src="https://thumbs.dreamstime.com/b/fresh-carrot-pack-together-isolated-white-background-as-package-design-element-72604163.jpg" alt="">
            <h3>carrot</h3>            <div class="price"> Ksh 33.00/kg</div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">add to cart</a></div>


          <div class="swiper-slide prbox"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRe3b6Bz47LFvTK3gdHfCy0UD6TczwKxZfjSw&usqp=CAU" alt="">
            <h3>Tomatos</h3>
            <div class="price"> Ksh 100.00/kg </div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">add to cart</a></div>

            <div class="swiper-slide prbox">
            <img src="https://media.istockphoto.com/photos/set-of-egg-isolated-picture-id1028690210?k=20&m=1028690210&s=612x612&w=0&h=bHEOKHGkw_gy0pwJF0_qoOONVvEEobCM8TsL3w0nbeU=" alt="">
            <h3>Eggs</h3>
            <div class="price">Ksh 420.00/Tray </div>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <a href="#" class="btn">add to cart</a>
</div>

<div class="swiper-slide prbox">
    <img src="https://static.libertyprim.com/files/familles/ananas-large.jpg?1569271716" alt="">
    <h3>Pineapple</h3>
    <div class="price"> Ksh 90.00/kg </div>
    <div class="stars">
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star-half-alt"></i>
    </div>
    <a href="#" class="btn">add to cart</a>
</div>


        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>





</section>


    
<!-- products section ends -->



<!-- categories section starts  -->

<section class="categories" id="categories">

    <h1 class="heading"> product <span>categories</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMjGNCKvP_nRTzRCZHjuVYV2Iyp7vxc4UfWA&usqp=CAU" alt="">
            <h3>vegetables</h3>
            <p>upto 45% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="https://img.freepik.com/free-photo/colorful-fruits-tasty-fresh-ripe-juicy-white-desk_179666-169.jpg?w=2000" alt="">
            <h3>fresh fruits</h3>
            <p>upto 50% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">  p
            <img src="https://img.etimg.com/thumb/width-1200,height-900,imgsize-395786,resizemode-1,msid-75523395/industry/cons-products/food/sales-of-dairy-products-soar-as-people-work-eat-from-home.jpg" alt="">
            <h3>dairy products</h3>
            <p>upto 30% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <div class="box">
            <img src="https://media.istockphoto.com/photos/selection-of-assorted-raw-meat-food-for-zero-carb-carnivore-diet-picture-id1310910433?b=1&k=20&m=1310910433&s=170667a&w=0&h=90bSQx1pP4ohKPE_BtFP-vUGkYfKpekZi3zAMNE7HiY=" alt="">
            <h3>fresh meat</h3>
            <p>upto 10% off</p>
            <a href="#" class="btn">shop now</a>
        </div>

    </div>

</section>





<section class="review" id="review">

    <h1 class="heading"> customer's <span>review</span> </h1>

<div class="swiper mySwiper cusreview">
    <div class="swiper-wrapper">
      <div class="swiper-slide box"><img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fA%3D%3D&w=1000&q=80">
        <p>Amazing service. I ordered late in the day and it came the very next day. 
            It was very reasonably priced.</p>
      
        <h3>Doreen Njoki</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i></div>
</div>

<div class="swiper-slide box"><img src="https://manofmany.com/wp-content/uploads/2019/06/50-Long-Haircuts-Hairstyle-Tips-for-Men-2.jpg">
        <p>Quality of the foods and beverages were really good. Well safe packaging. 
            Longer time of expiration date for the food</p>
      
        <h3>Steve Kinuthia</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i></div>

        </div>
      <div class="swiper-slide box"><img src="https://media.istockphoto.com/photos/smiling-indian-man-looking-at-camera-picture-id1270067126?k=20&m=1270067126&s=612x612&w=0&h=ZMo10u07vCX6EWJbVp27c7jnnXM2z-VXLd-4maGePqc=">
                <p>Great range of products, good prices! Best place for Kenyan groceries!</p>
              
                <h3>Dennis Munene</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i></div>

</div>
      <div class="swiper-slide box"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSOGB8hL92pHixnkA7yY-IrWBfJNDSl3FTe8w&usqp=CAU">
                <p>Fresh products, good quality and time. Keep doing same quality.I would definitely shop from them again.</p>
              
                <h3>Alvin Mugo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i></div>
</div>

      <div class="swiper-slide box"><img src="https://media-s3-us-east-1.ceros.com/forbes/images/2021/12/06/bbff530cddcb7ed1b79ecee931f9f854/artboard-2-copy-6.jpg">
                <p>Very happy with my delivery, super fast service and all received well packed with no breakage.
                     Will definitely order again from this company</p>
              
                <h3>Brian Murithi</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i></div>
</div>
      
      
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>



<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3> farmsfresh <img id="logo1"  src="images/farmer.png" alt="My Image"></i> </h3>
            <p>Limuru Road,Nairobi,Kenya</p>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +254-794-120-396 </a>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +254-743-049-413 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> farmsfresh@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Limuru Road, Nairobi </a>
        </div>

        <div class="box"> 
            <h3>quick links</h3>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#features" class="links"> <i class="fas fa-arrow-right"></i> features </a>
            <a href="#products" class="links"> <i class="fas fa-arrow-right"></i> products </a>
            <a href="#categories" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
            <a href="#review" class="links"> <i class="fas fa-arrow-right"></i> review </a>
            <a href="#" class="links"> <i class="fas fa-arrow-right"></i> podcast </a>
        </div>

    </div>

    <div class="credit"> Est. <span>2024</span> | all rights reserved </div>

</section>

<!-- footer section ends -->






  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween:30,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },

        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },

          1041: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
        },
    
    });
  </script>

<!-- css styling  -->



</body>
</html>