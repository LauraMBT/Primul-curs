<?php require_once ('includes/header.php'); ?>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

                <div class="carousel-item active"
                     style="background-image: url(https://images.pexels.com/photos/3969250/pexels-photo-3969250.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);">
                </div>
                
                <div class="carousel-item" 
                     style="background-image: url(https://images.pexels.com/photos/8520897/pexels-photo-8520897.png?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260);">
                </div>
                
                <div class="carousel-item"
                     style="background-image: url(https://images.pexels.com/photos/6346166/pexels-photo-6346166.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500);">
                </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleSlidesOnly" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleSlidesOnly" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        
    </div>


                  
   <div class="container text-center py-5 ">
        <div class="row col-md-10 col-lg-6 justify-content-center mx-auto">
                            
                    <h1>Arta de a cauta satisfacii in dulcegarii!</h1>
                    <h2>Curs revolutionar de prajitureala</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiseing elit. In turpis lorem, feugiat id magna
                        vitae, mattis pretium orei. Quisque rhoneus quis tellus sit amet posuere. Aliquam convallis 
                        sed felis sit amet viverra.</p>
                    
                        <button type="button" class="btn btn-outline-primary">Inscrie-te acum</button>
                        <button type="button" class="btn btn-outline-secondary">Cere detalii</button>
                               
        </div>
    </div>
    


    <div class="caracteristici 
    bg-light
    py-5 
    border-top 
    border-bottom 
    text-center" >

<section class="about-cards-section bg-light ">
    <div class="container">
            <div class="row ">

                <div class="col-sm-12 col-md-4 card-wrapper ">
                    <div class="card border-0 bg-light " >
                        <div class="position-relative rounded-circle overflow-hidden mx-auto custom-circle-image">
                        <img class="w-100 h-100" src="https://i.pinimg.com/originals/75/ff/e1/75ffe116577f9bb100296366697e4fef.jpg" 
                        alt="image1">   
                        </div>

                        <div class="card-body text-center ">
                            <h4 class="card-title">Performanta</h4>
                            <p class="card-text" >Lorem ipsum dolor sit amet, consectetur adipiseing elit.</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-sm-6 col-md-4 card-wrapper ">
                    <div class="card border-0 bg-light">
                        <div class="position-relative rounded-circle overflow-hidden mx-auto custom-circle-image">
                        <img class="w-100 h-100" src="https://i.pinimg.com/236x/27/5d/a9/275da9818c99792410f1f644c421be67.jpg" 
                        alt="image2">     
                        </div>  

                        <div class="card-body text-center">
                            <h4 class="card-title">Siguranta in ziua de maine</h4>
                            <p class="card-text" >Lorem ipsum dolor sit amet, consectetur adipiseing elit.</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-sm-6 col-md-4 card-wrapper">
                    <div class="card border-0 bg-light">
                        <div class="position-relative rounded-circle overflow-hidden mx-auto custom-circle-image">
                        
                            <img class="w-100 h-100" src="https://i.pinimg.com/474x/40/e0/2b/40e02b67c0f7fb71adcb0cd7f0c2a9cb.jpg"
                        alt="image3"> 
                        </div>      

                        <div class="card-body text-center">
                            <h4 class="card-title">Dublarea venitului</h4>
                            <p class="card-text" >Lorem ipsum dolor sit amet, consectetur adipiseing elit.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<div class="numbers bg-warning py-4 text-center">
        <?php 
        $number_1 = 18005;
        $number_2 = 7085;
        $number_3 = 32005;
        $number_total = $number_1 + $number_2 + $number_3;
        $modul = 1;
        $fraza = "Participanti la modulul ";
        ?>

        <div class="container">
                <div class="row ">
                        <div class="col-6 col-lg-3 "> 
                            <h3><?php echo number_format($number_1, 0, ',', '.'); ?></h3>
                            <p> <?php echo $fraza . $modul++; ?></p>     
                        </div>

                        <div class="col-6 col-lg-3 "> 
                            <h3><?php echo number_format($number_2, 0, ',', '.'); ?></h3>
                            <p> <?php echo $fraza . $modul++; ?></p>       
                        </div>

                        <div class="col-6 col-lg-3 "> 
                            <h3><?php echo number_format($number_3, 0, ',', '.'); ?></h3>
                            <p> <?php echo $fraza . $modul++; ?></p>     
                        </div>

                        <div class="col-6 col-lg-3 "> 

                            <h3>
                                    <?php if ($number_total > 50000){ 
                                            echo '<strong>'.number_format($number_total, 0, ',', '.').'</strong>';
                                        
                                        } else {
                                            echo number_format($number_total, 0, ',', '.');
                                         } ?>
                            </h3>

                            <p>Numar total de participanti</p>
                        </div>

                </div>
        </div>
</div>

<?php require_once ('includes/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>       
</body>
</html>