    <link rel="stylesheet" href="./css/main.css" />
<style type="text/css">
	 @media screen and (min-width: 768px) {
    .hero {
       background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
        url("../images/banner1.jpg") center/cover no-repeat;
    }
</style>
<?php
include("header.php");
?>
<div class="hero">
        <div class="hero-banner" class="f1">
          <h1>گالری طلای سنجاق</h1>
          <p>کالکشن های بروز طلای دستساز در سنجاق</p>
          <a href="./index2.php" class="btn btn-hero">
            <i class="bi bi-gem"></i>
            ثبت سفارش</a>
			
        </div>
      </div>
    </header>
    <!-- End of header -->
<!--تقسیم بندی-->
<style type="text/css">
	.maintaghsim{
		background:#fff;
		padding-left: 50px;
		padding-right: 50px;
		display: flex;
		flex-wrap: wrap;
		justify-content:center;
	}
	.taghsim{
		margin: 0px 10px;
	}
	.childd{
		
/*		border: solid  2px #957509;*/
		width:220px;
		height: 300px;
		margin:2px;
		border-radius: 40px;
		direction: rtl;
	    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
		margin: 0px auto;
        margin-top: 5px;
		background: black;
		position: relative;
		transition: all 0.5s;
	}
	.infoo{
		position: absolute;
		top: 50%;
		left: 50%;
		color: white;
		transform: translate(-50%,-50%);
		transition: all 0.3s;
		opacity: 0;
		width: 100%;
		border-radius: 40px;
		
	}
	.childd:hover .infoo{
		opacity: 1 ;
		
	}
	.childd:hover .img1{
		opacity: 0.3 ;
	}
	.childd:hover{
		transform: scale(1.08);
	}
/*
	.img1:hover{
		opacity: 0.8 ;
	}
*/
	.img1{
		width: 100%;
		height: 100%;
		border-radius: 39px ;
		transition: all 0.5s;
		
	
	}


	
</style>
<div class="section-title" style="margin-top: 40px; margin-bottom: 10px;">
        <h2>دسته بندی</h2>
      </div>
<div class="maintaghsim">
	
<a href="mahsolat.php?id=2">
	<div class="taghsim">
		<div class="childd">
			<img src="images/galery/a1.jpg" class="img1">
			<div class="infoo">
			<center>
             <b style="color: #fff;"> انگشتر</b>	 
			 </center>
          </div>  
		</div>
	</div>
</a>
	
<a href="mahsolat.php?id=3">
	<div class="taghsim">
		<div class="childd">
			<img src="images/galery/g1.jpg" class="img1">
			<div class="infoo">
			<center>
             <b style="color: #fff;"> گردنبند</b>	 
			 </center>
          </div>  
		</div>
	</div>
</a>
<a href="mahsolat.php?id=1">
	<div class="taghsim">
		<div class="childd">
			<img src="images/galery/go1.jpg" class="img1">
			<div class="infoo">
			<center>
             <b style="color: #fff;"> گوشواره</b>	 
			 </center>
          </div>  
		</div>
	</div>
</a>
	
	</a>
<a href="mahsolat.php?id=4">
	<div class="taghsim">
		<div class="childd">
			<img src="images/galery/d1.jpg" class="img1">
			<div class="infoo">
			<center>
             <b style="color: #fff;">دستبند </b>	 
			 </center>
          </div>  
		</div>
	</div>
</a>
</a>
</div>

    <!-- Services Section -->
   <!-- About section -->
   <section class="section" id="about">
      <div class="section-title">
        <h2>درباره <span>ما</span></h2>
      </div>
      <div class="section-center about-center">
        <article class="about-img">
          <img class="about-photo" src="./images/j1.jpg" alt="about-img"  />
        </article>

        <article class="about-info">
          <h3>گالری طلای سنجاق</h3>
          <p>
            گالری طلا سنجاق در سال ۱۳۹۳ با تمرکز بر طراحی‌های اختصاصی و در نظر
            گرفتن سلیقه‌های مینیمال مخاطبان، تاسیس شد. طراحی وساخت محصولات
            دست‌ساز توسط استادکارانی برجسته و ارائه کالکشن‌های اختصاصی پرطرفدار،
            منجر به رشد پیوسته سنجاق و گشایش بیش از ۲۰ نمایندگی در سراسر کشور شد
            تا امروز همراه با شما به درخشیدن ادامه دهیم.
          </p>
          <p>
            تـداوم لـذت خــرید بـرای هــمراهـان همیشـگی ســنجاق از اصلی تـرین
            اهداف گالری ســنـجاق است
          </p>
			<p>
			 <b><i class="bi bi-whatsapp"> </i></b>   تماس از واتساپ :09374648445<br>
			<b><i class="bi bi-envelope"></i></b>   ایمیل : sanjaaqgold@gmail.com<br>
			</p>
          <!-- <a href="#" class="btn">مشاهده بیشتر</a> -->
        </article>
      </div>
    </section>
    <!-- End About Section -->


<style type="text/css">
	 .services {
    background: var(--clr-grey-4);
    border-radius: 75px ;
    border: 20px solid #fff;
   
  }
</style>
     <section class="section services" id="services">
            <div class="section-title">
                <h2>خدمات <span>ما</span></h2>
            </div>

            <div class="section-center services-center">
                <article class="service">
                    <span class="service-icon">
                      <i class="bi bi-shield-fill-check"></i>
                    </span>

                    <div class="service-info">
                        <h4 class="service-title">امنیت بالا در خرید</h4>
                        <p class="service-text">
                           محصول خود را درب منزل با امنیت کامل و سالم دریافت کنید 
                        </p>
                    </div>
                </article>

                <article class="service">
                    <span class="service-icon">
                       <i class="bi bi-box-seam-fill"></i>
                    </span>
                    <div class="service-info">
                        <h4 class="service-title">ارسال رایگان</h4>
                        <p class="service-text">
                         ارسال در 24 ساعت کاری از شعب محل سکونت خود
                        </p>
                    </div>
                </article>

                <article class="service">
                    <span class="service-icon">
                        <i class="bi bi-clipboard-data-fill"></i>
                    </span>
                    <div class="service-info">
                        <h4 class="service-title">گارانتی</h4>
                        <p class="service-text">
                                 تمامی محصولات دارای 2 سال گارانتی می باشد و طرح آنها ثابت خواهد ماند
                        </p>
                    </div>
                </article>
            </div>
        </section>
    <!-- Articles Section -->
    <section class="section" id="articles">
      <div class="section-title">
        <h2>کالکشن ها</h2>
      </div>

      <div class="section-center articles-center">
        <article class="article-card">
          <div class="article-img-container">
            <img
              class="article-img"
              src="./images/col1.jpg"
              alt="article-img"
            />
            <p class="article-category">CANDO</p>
          </div>
          <div class="article-info">
            <div class="article-title">
              <h4>کالکشن کندو</h4>
            </div>
            <p class="p-center">
              کالکشن دستساز با طلای 18 عیار با آبکاری دستگاه CVN تحت لیسانس
              فرانسه و بلژیک
            </p>
            <div class="article-footer">
              <p>
                <span>
                  <i class="bi bi-pencil-square"></i>
                  طراح:استاد محمد رئیسی
                </span>
              </p>
              <a href="callection.php#cando">نمایش</a>
            </div>
          </div>
        </article>

        <article class="article-card">
          <div class="article-img-container">
            <img
              class="article-img"
              src="./images/col2.jpg"
              alt="article-img"
            />
            <p class="article-category">FEREKANS</p>
          </div>
          <div class="article-info">
            <div class="article-title">
              <h4>کالکشن فرکانس</h4>
            </div>
            <p class="p-center">
              کالکشن دستساز با طلای 18 عیار با آبکاری دستگاه CVN تحت لیسانس
              فرانسه و بلژیک
            </p>
            <div class="article-footer">
              <p>
                <span>
                  <i class="bi bi-pencil-square"></i>
                  طراح : دلارام ملک
                </span>
              </p>
              <a href="callection.php#ferekans">نمایش</a>
            </div>
          </div>
        </article>

        <article class="article-card">
          <div class="article-img-container">
            <img
              class="article-img"
              src="./images/col3.jpg"
              alt="article-img"
            />
            <p class="article-category">TABESH</p>
          </div>
          <div class="article-info">
            <div class="article-title">
              <h4>کالکشن تابش</h4>
            </div>
            <p class="p-center">
              کالکشن دستساز با طلای 18 عیار با آبکاری دستگاه CVN تحت لیسانس
              فرانسه و بلژیک
            </p>
            <div class="article-footer">
              <p>
                <span>
                  <i class="bi bi-pencil-square"></i>
                  طراح :سپهر جامی
                </span>
              </p>

              <a href="callection.php#tabesh">نمایش</a>
            </div>
          </div>
        </article>
      </div>

      <div class="article-btn">
        <a href="callection.php" class="btn">مشاهده کالکشن ها </a>
      </div>
    </section>
    <!-- End Articles Section -->
    

    <!-- End About Section -->

  <!-- Contact Section -->
<style type="text/css">

	 .contact {
   background: var(--clr-primary-2);
   border-radius: 0px;
   border: solid 0px #fff;
  }
	.btn-submit {
    font-family: var(--ff-primary);
    background: var(--clr-primary-3);
    color: var(--clr-white);
    cursor: pointer;
    transition: var(--transition);
  }
</style>
        <section class="section contact" id="contact">
            <div class="section-center contact-center">
                <article class="contact-title">
                    <h3>جهت با خبر شدن از تخفیف ها ، پیشنهادات مهیج، اخبار و ....</h3>
                    <p>  با عضویت در باشگاه مشتریان سنجاق 1000 امتیاز دریافت کنید </p>
                </article>
 
                <form class="contact-form" action="bashgah.php" method="get">
                    <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="ایمیل خود را وارد کنید"
                    />
                  <button type="submit" class="btn-submit">عضویت در خبرنامه</button> 
                </form>
            </div>
        </section>
        <!-- End Contact Section -->

        <!-- Gallery Section -->
        <section id="gallery">
            <div class="gallery-center">
                <article class="gallery-img-container">
                    <img
                        class="gallery-img"
                        src="images/galery/22.jfif"
                        alt="gallery-img"
                    />
<!--					1-->
                    <a class="gallery-icon" href="#">
                        <i class="bi bi-balloon-heart"></i>
                    </a>
                </article>

                <article class="gallery-img-container">
                    <img
                        class="gallery-img"
                        src="images/galery/4.jfif"
                        alt="gallery-img"
                    />
<!--					2-->
                    <a class="gallery-icon" href="#">
                        <i class="bi bi-bookmark-heart"></i>
                    </a>
					
                </article>

                <article class="gallery-img-container">
                    <img
                        class="gallery-img"
                        src="images/galery/11.jfif"
                        alt="gallery-img"
                    />
<!--					3-->
                    <a class="gallery-icon" href="#">
                       <i class="bi bi-balloon-heart"></i>
                    </a>
                </article>

                <article class="gallery-img-container">
                    <img
                        class="gallery-img"
                        src="images/galery/14.jfif"
                        alt="gallery-img"
                    />
<!--					4-->
                    <a class="gallery-icon" href="#">
                        <i class="bi bi-bookmark-heart"></i>
                    </a>
                </article>

                <article class="gallery-img-container">
                    <img
                        class="gallery-img"
                        src="images/galery/19.jfif"
                        alt="gallery-img"
                    />
<!--					5-->
                    <a class="gallery-icon" href="#">
                        <i class="bi bi-balloon-heart"></i>
                    </a>
                </article>

                <article class="gallery-img-container">
                    <img
                        class="gallery-img"
                        src="images/galery/7.jfif"
                        alt="gallery-img"
                    />
<!--					6-->
                    <a class="gallery-icon" href="#">
                       <i class="bi bi-bookmark-heart"></i>
                    </a>
                </article>

                <article class="gallery-img-container">
                    <img
                        class="gallery-img"
                        src="images/galery/18.jfif"
                        alt="gallery-img"
                    />
<!--					7-->
                    <a class="gallery-icon" href="#">
                      <i class="bi bi-balloon-heart"></i>
                    </a>
                </article>

                <article class="gallery-img-container">
                    <img
                        class="gallery-img"
                        src="images/galery/2.jfif"
                        alt="gallery-img"
                    />
<!--					8-->
                    <a class="gallery-icon" href="#">
                       <i class="bi bi-bookmark-heart"></i>
                    </a>
                </article>
            </div>
        </section>
        <!-- End Gallery Section -->

<?php
include("footer.php");
?>