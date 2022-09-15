<?php 
  session_start();
 
  if(isset($_GET['lang'])){
    if($_GET['lang'] == 'eng'){
      $_SESSION["language"] = "eng";
    }else{
      $_SESSION["language"] = "idn";
    }
  }else{
    $_SESSION["language"] = "eng";
  }
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Wiswakarma Museum aims at excavating and empowering the potency of Balinese culture in order to preserve it for dynamic development of its cultural existence.">
    <meta name="keywords" content="Wiswakarma Museum, Museum, Wiswakarma">
    <meta name="author" content="Masa Digital">
    <title>Wiswakarma Museum</title>
    <link rel="icon" href="assets/img/icon.png">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;0,700;1,500;1,600;1,700&family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/vendor/owlcarousel/assets/docs.theme.min.css">
    <link rel="stylesheet" href="assets/vendor/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendor/owlcarousel/assets/owl.theme.default.min.css">
    <script src="assets/vendor/owlcarousel/jquery.min.js"></script> 
    <script src="assets/vendor/owlcarousel/owl.carousel.min.js"></script> 


    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  </head>
 
  <body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="50">


    <header class="header-destop">
      <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-light bg-transparent menuatas">
        <div class="container-fluid p-0 d-flex justify-content-end">
        
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars "></i>
          </button>
          <div class="collapse navbar-collapse " id="navbarScroll">
            <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll  ">
              <li class="nav-item">
                <a class="nav-link "  href="#profile">PROFILE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#colection">COLECTION</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#activity">ACTIVITY</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">CONTACT</a>
              </li>
             
             
            </ul>
            <div class="nav-item dropdown d-flex">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
               <?php
               
                  if($_SESSION['language'] == 'idn'){
                    echo "IDN";
                  }else{
                    echo "ENG";
                  }
               ?>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">

                <li><a class="dropdown-item" href="?lang=eng">English</a></li>
                <li><a class="dropdown-item" href="?lang=idn">Indonesia</a></li>
              </ul>
            </div>
           
          </div>
        </div>
      </nav>
      
      
    </header>

    <div class="collapse  navbar-collapse main-menu-item kanan justify-content-end" id="navbarSupportedContent">
      <div class="menu-con">
          <div class="header-menu">
              
          </div>
          <div class="isi-menu">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                  <a class="nav-link "  href="#profile">PROFILE</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#colection">COLECTION</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#activity">ACTIVITY</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">CONTACT</a>
                </li>
               
              
                <li class="nav-item bhs mt-5 mb-4 ">
                  <a href="?lang=idn" <?php if($_SESSION['language'] == 'idn'){ echo "class='active'"; } ?> >IDN</a> / <a href="?lang=eng" <?php if($_SESSION['language'] == 'eng'){ echo "class='active'"; }?>>ENG</a>
                </li>
               

              </ul>
          
              </div>
             

      </div>
      
      
     
  </div>

   

        <!-- header start -->
    
        <!-- header end -->

        <section class="header">
          <div class="container-fluid p-0">
            <div class="owl-carousel owl-theme loopingheader" style="width: 100%;">
              <div class="item ">
                <div class="sechead sec-header">
                  <div class="row align-items-start">
                    <div class="col-12 text-end ">
                      <p class="text-right text-emas">Wiswakarma sutejo prayojanam suddham
 
                       
                        </p>
                        <p class="text-right text-emas">  [ Rig Weda ]</p>
                    </div>
                    <div class="col-12 mt-5">
                      <p class="text-headline">
                        <span class="txt11">Art Culture</span>
                        
                        <span style="float:right;" class="txt22">
                          Space
                        </span>
                      </p>
                    </div>
                    
                  </div>
                  <div class="row bawah start-50 translate-middle">
                    <div class="col-12 ">
                      <p class="head-lok text-center">BALI, INDONESIA</p>
                    </div>
                    
                  </div>

                </div>
              </div>
              <div class="item">
                <div class="sechead sec-header2">
                  <div class="row align-items-start">
                    <div class="col-12 text-end ">
                      <p class="text-right text-emas">Wiswakarma sutejo prayojanam suddham
 
                       
                        </p>
                        <p class="text-right text-emas">  [ Rig Weda ]</p>
                    </div>
                    <div class="col-12 mt-5">
                      <p class="text-headline">
                        <span>Art Culture</span>
                        
                        <span style="float:right;">
                          Space
                        </span>
                      </p>
                    </div>
                    
                  </div>
                  <div class="row bawah start-50 translate-middle">
                    <div class="col-12 ">
                      <p class="head-lok text-center">BALI, INDONESIA</p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <div class="whatapp">
          <a href="https://api.whatsapp.com/send/?phone=6281938031722&text=Hi%2C&app_absent=0" target="_blank" rel="noopener noreferrer">
              <div class="icon">
                  <i class="fab fa-whatsapp"></i>
              </div>
          </a>
        </div>


        <div id="profile">
           <!-- sec-desc-1 1 start -->
        <section class="desc1" >
          <div class="container-fluid p-5">
            <div class="sec-desc-1">
              <div class="container-fluid p-0">
                <div class="img-logo">
                  <img src="assets/img/logo.png" alt="" class="pt-5 img-fluid">
                </div>
                <?php if($_SESSION['language'] == 'idn'){?>
                <p class="des">Wiswakarma Museum bertujuan menggali dan memberdayakan seluruh potensi kebudayaan Bali guna terpeliharanya <br> potensi yang ada untuk pengembangan, pemajuan hidup kebudayaan Bali yang lebih dinamis.</p>
                <p class="mob">Wiswakarma Museum bertujuan menggali dan memberdayakan seluruh potensi kebudayaan Bali guna terpeliharanya  potensi yang ada untuk pengembangan, pemajuan hidup kebudayaan Bali yang lebih dinamis.</p>
                <?php } else{?>
                  <p class="des">Wiswakarma Museum aims at excavating and empowering the potency of Balinese culture in order <br> to preserve it for dynamic development of its cultural existence. </p>
                <p class="mob">Wiswakarma Museum aims at excavating and empowering the potency of Balinese culture in order to preserve it for dynamic development of its cultural existence. </p>
                <?php }?>
              </div>
            </div>
          </div>
        </section>
        <!-- sec-desc-1 1 end -->
        
        <!-- sec-latar-belakang start -->
     
        <section class="latarbelakang" >
          <div class="container-fluid p-0">
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                   
                      
                        <button class="accordion-button collapsed   text-right" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                         
                          
                          
                              <p class="mt-3  sejarah" >
                          
                                <b></b>
                                <?php if($_SESSION['language'] == 'idn'){?>
                                  <span >LATAR BELAKANG WISWAKARMA MUSEUM</span> 
                                <?php } else{?>
                                  <span >BACKGROUND WISWAKARMA MUSEUM</span> 
                                <?php }?>
                                
                              </p>
                            
                       
                          
                         
                             
                        
                        </button>

                  
                     
                    
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                    <?php if($_SESSION['language'] == 'idn'){?>
                      <div class="latar-desc">
                        <p class="mb-5">
                          Bali memerlukan jawaban segara bagi keberlangsungan hidup kebudayaannya. Di tengah-tengah benturan peradaban, budaya urban,  modernisasi, kecerdasan buatan, dan kecepatan dunia digital,  Bali selayaknya merancang edukasi kultural,
                          strategi sinergis menggali milik sendiri, tempat di mana kebudayaan kreatif itu tidak cuma dilestarikan dan didokumentasikan.Namun juga dirawat, dialirkan ke ranah-ranah paling canggih sebagai ciptaan terbaru manusia Bali.
                          Puncak-puncak keunggulan tradisi menyangkut bidang kebudayaan yang luas, meliputi, sastra, kesenian, arsitektur, seni kriya, seni lukis adalah capaian-capaian kreatif yang membuat Bali tetap mengalir sampai hari ini.
                          Karenanya perlu strategi berlanjut, sebagai jawaban dari strategi kebudayaan, yang terutama  menjadi fokusnya adalah edukasi kultural itu.
                        </p>
      
                        <p class="mb-5">
                          Pusat kebudayaan kreatif yang diberi nama  Wiswakarma Museum diniatkan untuk menjawab sejumlah problem dan krisis yang hadir, yang terutama adalah hilangnya memori tradisi, kesenjangan pada teks dalam  pengertian seluas-luasnya. 
                          Para penerus kebudayaan kreatif kehilangan oase kultural, prihal watak dan kepribadian kultural itu. Para generasi muda terutama mengalami dua kesenjangan besar, yakni kesenjangan aksara dan kesenjangan bahasa. Teks-teks kebudayaan, 
                          menyangkut bidang -bidang amat luas, meliputi:  liturgi,  sasana, agama,  sastra, arsitektur, usada dan lain- lain yang akrab digeluti dalam  tradisi nyastra di Bali telah menjadi masa lampau yang nyaris  hanya menjadi kenangan. 
                          Pelan-pelan Memori tradisi itu apus dari benak generasinya. Sementara modernisasi hingga produk-produk dunia nirkabel, budaya pop memberi banyak pilihan, merebut ruang-ruang tradisi kita tanpa ampun. 
                          Bila Bali tidak segera menyediakan ruang-ruang  baru bagi pertumbuhan dan perkembangan kebudayaan sendiri, tak mustahil, dan tak dapat dibayangkan seperti apa wajah Bali di masa depan, seperti apa pula  kepribadian  manusia Bali di masa datang.
                          Untuk menjawab kesenjangan inilah   Wiswakarma Museum didirikan, sekaligus menjadi aksi dari politik dan strategi kebudayaan  daerah untuk menguatkan karakter dan kebribadian bangsa .
                        </p>
      
                        <p class="mt-5">
                          2022 &#169; Wiswakarma Museum
                        </p>
                      </div>

                <?php } else{?>
                  <div class="latar-desc">
                        <p class="mb-5">
                        Bali needs immediate response for the sustainability of its culture. In the midst of 
disruption era of cultivation, urban culture, modernization, artificial intelligence, and rapid development of digital era, Bali supposedly design cultural education, synergic strategy to explore its own, a place where creative culture is not only preserved and documented, but also maintained, distributed to the more sophisticated channels as the new creation of Balinese. The top of tradition excellence includes wider cultural field such as literature, arts, architecture, craftmanship, and fine arts. Those are the creative achievements that make Bali exist until now. It needs further strategy, that cultural education is the response of cultural strategy, particularly becomes the main focus. 

                        </p>
      
                        <p class="mb-5">
                        The center of creative culture named Wismakarma Museum, it aimed at responding a number of problems and crisis Bali had, mainly the disruption of traditional memory, text discrepancy on the wider meaning. The next generation of creative culture lost the cultural phase such as characteristics and the identity. The youth experiences two discrepancies, gap of text and language.  Cultural texts includes wider fields such as liturgy, sasana (behavioral norms), literature, architecture, usada (traditional science of medicine) and others related to nyastra (literacy activity) in Bali. It becomes the past and almost a memory. Sluggishly, the traditional memory has been faded for the next generation. Meanwhile, the modernization, digital products, and pop culture give people choices, seize spaces for tradition mercilessly.  If Bali do not respond it immediately by providing new spaces for growth and development of its own culture, it is impossible and unimaginable how it would look in the future and what personality of Bali next generation would be. Wiswakarma Museum was established to respond this phenomenon and become a political act and cultural strategy to strengthen the national character and identity. 
                        </p>
      
                        <p class="mt-5">
                          2022 &#169; Wiswakarma Museum
                        </p>
                      </div>

                <?php }?>
                      


                    </div>
                  </div>
                </div>
              </div>
          </div>
        </section>
        <!-- sec-latar-belakang end -->

        <!-- sec-line start -->
        <!-- <section class="latar-belakang">
          <div class="container-fluid p-0">
            <div class="sec-line">
              <div class="row">
                  <div class="col-md-9 p-4 ml-2">
                    <hr>
                  </div>
                  <div class="col-md-3 p-4">
                      <a class="" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        LATAR BELAKANG WISWAKARMA MUSEUM
                      </a>
                  </div>
              </div>
              <div class="collapse" id="collapseExample">
                <div class="box-latar">
                  <p class="mb-5">
                    Bali memerlukan jawaban segara bagi keberlangsungan hidup kebudayaannya. Di tengah-tengah benturan peradaban, budaya urban,  modernisasi, kecerdasan buatan, dan kecepatan dunia digital,  Bali selayaknya merancang edukasi kultural,
                    strategi sinergis menggali milik sendiri, tempat di mana kebudayaan kreatif itu tidak cuma dilestarikan dan didokumentasikan.Namun juga dirawat, dialirkan ke ranah-ranah paling canggih sebagai ciptaan terbaru manusia Bali.
                    Puncak-puncak keunggulan tradisi menyangkut bidang kebudayaan yang luas, meliputi, sastra, kesenian, arsitektur, seni kriya, seni lukis adalah capaian-capaian kreatif yang membuat Bali tetap mengalir sampai hari ini.
                    Karenanya perlu strategi berlanjut, sebagai jawaban dari strategi kebudayaan, yang terutama  menjadi fokusnya adalah edukasi kultural itu.
                  </p>

                  <p class="mb-5">
                    Pusat kebudayaan kreatif yang diberi nama  Wiswakarma Museum diniatkan untuk menjawab sejumlah problem dan krisis yang hadir, yang terutama adalah hilangnya memori tradisi, kesenjangan pada teks dalam  pengertian seluas-luasnya. 
                    Para penerus kebudayaan kreatif kehilangan oase kultural, prihal watak dan kepribadian kultural itu. Para generasi muda terutama mengalami dua kesenjangan besar, yakni kesenjangan aksara dan kesenjangan bahasa. Teks-teks kebudayaan, 
                    menyangkut bidang -bidang amat luas, meliputi:  liturgi,  sasana, agama,  sastra, arsitektur, usada dan lain- lain yang akrab digeluti dalam  tradisi nyastra di Bali telah menjadi masa lampau yang nyaris  hanya menjadi kenangan. 
                    Pelan-pelan Memori tradisi itu apus dari benak generasinya. Sementara modernisasi hingga produk-produk dunia nirkabel, budaya pop memberi banyak pilihan, merebut ruang-ruang tradisi kita tanpa ampun. 
                    Bila Bali tidak segera menyediakan ruang-ruang  baru bagi pertumbuhan dan perkembangan kebudayaan sendiri, tak mustahil, dan tak dapat dibayangkan seperti apa wajah Bali di masa depan, seperti apa pula  kepribadian  manusia Bali di masa datang.
                    Untuk menjawab kesenjangan inilah   Wiswakarma Museum didirikan, sekaligus menjadi aksi dari politik dan strategi kebudayaan  daerah untuk menguatkan karakter dan kebribadian bangsa .
                  </p>

                  <p class="mt-5">
                    2022 © Wiswakarma Museum
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section> -->
        <!-- sec-line end -->

        <!-- sec-desc-2 start -->
        


        <section class="sec-desc-2" id="profile">
          <div class="container-fluid p-0">
            <div class="row">
              <div class="col-lg-4 px-4">
                <div class="row">
                  <div class="col-12 mb-5 ">
                    <img src="assets/img/gmr1.jpg" class="">

                  </div>
                  <div class="col-12 pt-4 pb-5">
                  <?php if($_SESSION['language'] == 'idn'){?>
                      <p>Membangun pusat konservasi hidup, eksplorasi, pelestarian,  pengembangan,  kemajuan, dan pemajuan  kebudayaan Bali  secara utuh menyeluruh.</p>
                    <?php } else{?>
                      <p>Establishing the center of living conservation, exploration, preservation, development, progress and promotion of overall Balinese culture.</p>
                    <?php }?>
                    
                    

                  </div>
                </div>

              </div>
              <div class="col-lg-8 px-4">
                <div class="row">
                  <div class="col-12 mb-5 ">
                    <img src="assets/img/gmr2.jpg" class="">

                  </div>
                  <div class="col-sm-6 py-4 pe-4">

                  <?php if($_SESSION['language'] == 'idn'){?>
                    <p>Diupayakan sebagai pusat edukasi kebudayaan, laboratorium hidup, dalam semangat dan pemuliaan manusia atas nilai-nilai satyam-siwam-sundaram, ilmu, kesucian, dan estetika.</p>
                    <?php } else{?>
                      <p>It expected as center of cultural education, living laboratory, in enthusiasm and high value on the norm of satyam-siwam-sundaram, knowledge, purity and aesthetics.</p>
                    <?php }?>
                    

                  </div>
                  <div class="col-sm-6 py-4 ps-4" >
                  <?php if($_SESSION['language'] == 'idn'){?>
                    <p>Mandala "utpatti krama", pusat cipta  kebudayaan kreatif, kemandirian, kemerdekaan jiwa, dan keberlangsungan spirit  hidup kebudayaan Bali.</p>
                    <?php } else{?>
                      <p>Mandala "utpatti krama", the center of creative cultural creation, independency, and sustainability of Balinese Culture.</p>
                    <?php }?>
                    

                  </div>
                </div>

              </div>
            </div>

          </div>
        </section>
        
        <!-- sec-desc-2 end -->


        </div>


       
        <!-- sec-banner start -->


        <section class="kategori" id="activity">
          <div class="container-fluid p-0">
            <div class="sec-banner" style="background: url(assets/img/kat1.jpg) no-repeat  ;">
              <div>
                <h1>Explorations</h1>

                <?php if($_SESSION['language'] == 'idn'){?>
                  <p>Eksplorasi, menggali budaya milik sendiri untuk kemandirian,<br>kemartabatan baru manusia Bali.</p>
                    <?php } else{?>
                      <p>Exploring, discovering its own culture for its <br> independency, new identity of Bali</p>
                    <?php }?>

               
              </div>
             
            </div>
            <div class="sec-banner" style="background: url(assets/img/kat2.jpg) no-repeat ;">
              <div>
                <h1>Workshop</h1>
                <?php if($_SESSION['language'] == 'idn'){?>
                  <p>Pelatihan, pengembangan sumber daya manusia Bali,<br>pengembangan keterampilan hidup dan pakerti luhur manusia Bali.</p>
                    <?php } else{?>
                      <p>Training and developing the human resource of Bali,<br> skill and character  building of Balinese. </p>
                    <?php }?>
              

              </div>
              
            </div>
            <div class="sec-banner" style="background: url(assets/img/kat3.jpg) no-repeat  ;">
              <div>
                <h1>Living Art</h1>
                <?php if($_SESSION['language'] == 'idn'){?>
                  <p>Mendekatkan manusia Bali pada seni hidup, bertanggung jawab<br>  pada hidup,pada lingkungan,  sesama, dan orang lain.</p>
                    <?php } else{?>
                      <p>Bringing Balinese people close to the living art, responsible <br> for life, caring for the environment and others.</p>
                    <?php }?>
              
              </div>
              
            </div>

          </div>
        </section>
        <!-- sec-banner end -->

        <!-- sec-maps start-->
        <section class="maps d-none">
          <div class="container-fluid p-0">
            <div class="sec-maps">
              <h1 class="mb-5">MAP WISWAKARMA MUSEUM</h1>
              <div class="row ">
                <div class="col-md-12 maps d-flex justify-content-center mb-5">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1658.603630946655!2d115.24822011420743!3d-8.6107343546843!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb0b1002df9d27ae3!2sMuseum%20Wiswakarma!5e0!3m2!1sid!2sid!4v1662324981137!5m2!1sid!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
              <!-- <div class="row space">
                <div class="col-md-4 mt-5">
                  <p>Ruang Lobi Kantor</p>
                  <p>Ruang Perpustakaan</p>
                  <p>Ruang Pameran Tetap</p>
                  <p>Ruang Pameran Tidak Tetap</p>
                </div>
                <div class="col-md-4 mt-5">
                  <p>Area Pertemuan Terbuka</p>
                  <p>Area Pertunjukan</p>
                  <p>Bale Bengong</p>
                  <p>Dapur</p>
                </div>
                <div class="col-md-4 mt-5">
                  <p>Tempat Suci</p>
                  <p>Toilet</p>
                  <p>Ruang Jaga</p>
                </div>
              </div> -->
            </div>
          </div>
        </section>
        <!-- sec-maps-end -->
      
        <!-- sec-fasilitas start-->
        <section class="fasilitas" id="colection">
          <div class="container-fluid p-0">
      
                <div class="sec-fasilitas">
                  <!-- <div class="row">
                    <div class="col-md-7 p-0">
                        <div class="owl-carousel owl-theme owl-loaded loopingfasilitas">
                        <div class="item">
                          <img src="assets/img/fasilitas.png" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5 p-0">
                      <div class="desc-fas">
                        <p class="mb-5">Fasilitas</p>
                        <h2 class="mb-5 mt-5">Ruang Pameran Tetap</h2>
                        <p class="mb-5 mt-5">
                          Buatkan detail informasi (text) terkait fungsi ruang pada area terkait.
                          Buatkan detail informasi (text) terkait fungsi ruang pada area terkait, Buatkan detail informasi .
                        </p>
                        <div class="row btn-desc-fas">
                          <div class="col-md-5 d-flex align-items-center justify-content-center">
                            <button type="button" class="btn btn-outline-light btn-loc"><-</button>
                          </div>
                          <div class="col-md-5 d-flex align-items-center justify-content-center">
                            <button type="button" class="btn btn-outline-light btn-loc">-></button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->

                  <div class="owl-carousel owl-theme owl-loaded slider">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <div class="owl-item">
                              <div class="fasilitas-item">
                                <div class="row">
                                  <div class="col-xl-7 p-0">
                                    <img src="assets/img/fas/slide1.jpg" class="img-slide" alt="">
                                  </div>
                                  <div class="col-xl-5 position-relative">
                                    <div class="des-fas">
                                      
                                      <?php if($_SESSION['language'] == 'idn'){?>
                                        <p class="mb-5 tag">Fasilitas</p>
                                        <h3 class="title mb-4">Ruang Pameran Tetap</h3>
                                        <p class=" des ">Memamerkan koleksi rajah aksara Bali pada panil-panil kayu, yang menunjukkan keutamaan hakikat aksara Bali, sebagai  rajah emas pemaharddhikaan jiwa, aksara prasada, patung, ukiran, panil,dan pintu-pintu dari berbagai kekayaan yang ada di Bali.</p>
            
                                    
                    <?php } else{?>
                      <p class="mb-5 tag">Facility</p>
                      <h3 class="title mb-4">Permanent Exhibition Hall</h3>
                      <p class=" des ">An exhibition of Balinese scripture on wooden panel which show the virtue of Balinese script as golden script of pemaharddhikaan Jiwa and prasada script, Balinese craft, such as sculpture, engraving, panel, doors and various properties of Bali.</p>
            
                                   
                    <?php }?>
                                      
                    </div>

                                    <div class="navigasi">
                                      <div class="but cusPrev"><img src="assets/img/panah.svg" class="" alt=""></div>
                                      <div class="but cusNext"><img src="assets/img/panah.svg" class="" alt=""></div>

                                    </div>
            
            
                                  </div>
            
                                </div>
                              </div>
                            </div>
                            <div class="owl-item"><div class="fasilitas-item">
                              <div class="row">
                                <div class="col-xl-7 p-0">
                                  <img src="assets/img/fas/slide1.jpg" class="img-slide" alt="">
                                </div>
                                <div class="col-xl-5 position-relative">
                                  <div class="des-fas">
                                  <?php if($_SESSION['language'] == 'idn'){?>
                                        <p class="mb-5 tag">Fasilitas</p>
                                        <h3 class="title mb-4">Ruang Pameran Tetap</h3>
                                        <p class=" des ">Memamerkan koleksi rajah aksara Bali pada panil-panil kayu, yang menunjukkan keutamaan hakikat aksara Bali, sebagai  rajah emas pemaharddhikaan jiwa, aksara prasada, patung, ukiran, panil,dan pintu-pintu dari berbagai kekayaan yang ada di Bali.</p>
            
                                   
                    <?php } else{?>
                      <p class="mb-5 tag">Facility</p>
                      <h3 class="title mb-4">Permanent Exhibition Hall</h3>
                      <p class=" des ">An exhibition of Balinese scripture on wooden panel which show the virtue of Balinese script as golden script of pemaharddhikaan Jiwa and prasada script, Balinese craft, such as sculpture, engraving, panel, doors and various properties of Bali.</p>
            
                                   
                    <?php }?>
          

                                  </div>
                                  <div class="navigasi">
                                    <div class="but cusPrev"><img src="assets/img/panah.svg" class="" alt=""></div>
                                    <div class="but cusNext"><img src="assets/img/panah.svg" class="" alt=""></div>

                                  </div>
          
          
                                </div>
          
                              </div>
                            </div></div>
                            <div class="owl-item"><div class="fasilitas-item">
                              <div class="row">
                                <div class="col-xl-7 p-0">
                                  <img src="assets/img/fas/slide1.jpg" class="img-slide" alt="">
                                </div>
                                <div class="col-xl-5 position-relative">
                                  <div class="des-fas">
                                  <?php if($_SESSION['language'] == 'idn'){?>
                                        <p class="mb-5 tag">Fasilitas</p>
                                        <h3 class="title mb-4">Ruang Pameran Tetap</h3>
                                        <p class=" des ">Memamerkan koleksi rajah aksara Bali pada panil-panil kayu, yang menunjukkan keutamaan hakikat aksara Bali, sebagai  rajah emas pemaharddhikaan jiwa, aksara prasada, patung, ukiran, panil,dan pintu-pintu dari berbagai kekayaan yang ada di Bali.</p>
            
                                    
                    <?php } else{?>
                      <p class="mb-5 tag">Facility</p>
                      <h3 class="title mb-4">Permanent Exhibition Hall</h3>
                      <p class=" des ">An exhibition of Balinese scripture on wooden panel which show the virtue of Balinese script as golden script of pemaharddhikaan Jiwa and prasada script, Balinese craft, such as sculpture, engraving, panel, doors and various properties of Bali.</p>
            
                                   
                    <?php }?>
          
                                  </div>
                                  <div class="navigasi">
                                    <div class="but cusPrev"><img src="assets/img/panah.svg" class="" alt=""></div>
                                    <div class="but cusNext"><img src="assets/img/panah.svg" class="" alt=""></div>

                                  </div>
          
          
                                </div>
          
                              </div>
                            </div></div>
                        </div>
                    </div>
                    <!-- <div class="owl-nav">
                        <div class="owl-prev customPrevBtn">prev</div>
                        <div class="owl-next customNextBtn">next</div>
                    </div> -->
                   
                </div>


                  

                </div>
              
          </div>
        </section>
        <!-- sec-fasilitas end-->

        <!-- sec-location start -->
        <section class="lokasi">
          <div class="container-fluid p-0">
            <div class="sec-loc">
              <div class="row">
                <div class="col-lg-7 d-flex align-items-center justify-content-center">
                  <h2>Location</h2>
                </div>
                <div class="col-lg-5 d-flex align-items-center position-relative">
                  <a href="https://goo.gl/maps/DZw5Tzrqx6gqbvii6" target="_blank" class="btn btn-outline-light btn-loc">
                  <?php if($_SESSION['language'] == 'idn'){?>
                    Buka Peta
                <?php } else{?>
                  Open Maps
                <?php }?>  
                 
                  
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- sec-location end -->

        <!-- sec-footer start -->
        <section class="footer" id="contact">
          <div class="container-fluid p-0">
            <div class="sec-footer">
              <div class="row position-relative">
                <div class="col-md-4 d-flex align-items-end mh-100 justify-content-start space-footer1">
                <p class="gold-col copyr">2022 &#169; Wiswakarma Museum</p>
                </div>
                <div class="col-md-8 ">
                  <div class="row ">
                    <div class="col-md-12 d-flex  justify-content-end">
                      <img src="assets/img/logo.png" alt="" class="img-fluid" width="471px">
                    </div>
                  </div>
                  <div class="row rowfoot">
                    <div class="col-lg-3 space-footer2 ">
                      <p class="gold-col">Phone</p>
                      <a href="tel:+6281938031722" target="_blank">+6281938031722 </a>
                    </div>
                    <div class="col-lg-7 space-footer2">
                      <p class="gold-col">Email</p>
                      <a href="mailto:wiswakarmamuseum@gmail.com" target="_blank">wiswakarmamuseum@gmail.com</a>
                    </div>
                    <div class="col-lg-2  social">
                      <p class="gold-col">Social</p>
                      <a href="https://www.facebook.com/Wiswakarma-Museum-100374996150594" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
                      <a href="https://www.instagram.com/wiswakarmamuseum/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class="sec-footer-mobile">
              <div class="row">
                <div class="col-12 d-flex justify-content-center">
                  <img src="assets/img/logo.png" alt="" class="img-fluid" >
                </div>
              </div>
              <div class="row mt-5 ">
                <div class="col-md-4 mb-4 space-footer2 ">
                  <p class="gold-col">Phone</p>
                  <a href="tel:+6281938031722" target="_blank">+6281938031722 </a>
                </div>
                <div class="col-md-6 mb-4 space-footer2">
                  <p class="gold-col">Email</p>
                  <a href="mailto:wiswakarmamuseum@gmail.com" target="_blank">wiswakarmamuseum@gmail.com</a>
                </div>
                <div class="col-md-2 mb-4 social">
                  <p class="gold-col">Social</p>
                  <a href="https://www.facebook.com/Wiswakarma-Museum-100374996150594" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
                  <a href="https://www.instagram.com/wiswakarmamuseum/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                </div>
              </div>
              <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                  <p class="gold-col copyr">2022 &#169; Wiswakarma Museum</p>
                </div>
              </div>

            </div>
          </div>
        </section>
        <!-- sec-footer end -->







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
   
   <script>
    var nav = document.querySelector('nav');
    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 100) {
        nav.classList.add('bg-dark');
      } else {
        nav.classList.remove('bg-dark');
      }
    });
   </script>
   
   
   <script>
      $(document).ready(function() {
        var owl = $('.loopingheader');
        owl.owlCarousel({
          items:1,
          loop: true,
          nav: false,
          dots:false,
          autoplay:true,
          autoplayTimeout:9000,
          autoplaySpeed:2500,
          smartSpeed:5000,
          singleItem:true,
          autoplayHoverPause:true,
          touchDrag  : false,
     mouseDrag  : false

        });
        

      })
    </script>


    <script>
      $(document).ready(function() {
        var owl2 = $('.slider');
        owl2.owlCarousel({
          items:1,
          loop: true,
          autoplay:false,
          navs: true,
          autoplaySpeed:1000,
          smartSpeed:1500,
          margin : 12,
          dots:false,
          touchDrag  : false,
     mouseDrag  : false

          
         
        });
        $('.cusNext').click(function() {
            owl2.trigger('next.owl.carousel');
        })
        // Go to the previous item
        $('.cusPrev').click(function() {
            // With optional speed parameter
            // Parameters has to be in square bracket '[]'
            owl2.trigger('prev.owl.carousel', [600]);
        })

      });

    </script>

    <script>
      $(document).ready(function(){
      $(".preloader").fadeOut();
      })
    </script>
  </body>
</html>