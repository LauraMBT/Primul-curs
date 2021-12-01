<?php require_once ('includes/header.php'); ?>

    <div class="container py-5">
            <h1>Contact</h1>
            <div class="row">

                <div class="col-lg-6">
                    <h6>Telefon: <a href="tel:0711122233">0711122233</a></h6>
                    <h6>E-mail: <a href="mailto:laura.mihaela.banateanu@digitalexplorers.ro">laura.mihaela.banateanu@digitalexplorers.ro</a></h6>
                    <h6>Adresa: Str. Primaverii, nr 7, Brasov</h6>
                        <hr size="8" width="100%" color="grey">  

                    <h6>Cofetar:</h6>
                    <h6>Florin Prajiturescu</h6>
                    <h6>E-mail: <a href="mailto:florin.prajiturescu@yahoo.com">florin.prajiturescu@yahoo.com</a></h6>

                    <hr size="8" width="100%" color="grey">
                    
                    <form method="post">
                        <h3>Lasa-ne un mesaj</h3>
                       <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="txtName" class="form-control" placeholder="Numele tau *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtEmail" class="form-control" placeholder="Email-ul tau *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="txtPhone" class="form-control" placeholder="Numarul tau de telefon *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="submit" name="btnSubmit" class="btnContact" value="Trimite" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="txtMsg" class="form-control" placeholder="Mesaj *" style="width: 100%; height: 150px;"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
        
                <div class="col-sm-12 col-lg-6 py-4 img-fluid">

                    <iframe padding-bottom="2rem" width="100%" height="400"
                    id="gmap_canvas"
                    src="https://maps.google.com/maps?q=brasov&t=&z=13&ie=UTF8&iwloc=&output=embed" 
                    frameborder="0"></iframe>

                </div>
            </div>
    </div>
    
    <?php require_once ('includes/footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>       
</body>
</html>