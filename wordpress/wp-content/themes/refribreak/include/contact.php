<section id="point" class="pattern">
    <div class="container" style="    background: url(<?php echo get_the_post_thumbnail_url(131); ?>) no-repeat; !important;     background-position: bottom center;">
        <div class="col-lg-8 col-lg-offset-2">
            <!-- Section heading -->
            <div class="section-heading">
                <h2>Contáctenos</h2>
            </div>
        </div>
        <!-- Contact Form -->
        <div class="col-md-4 col-md-offset-1 white_block">
            <h4 class="text-center">Contacto</h4>
            <div class="form-style" id="contact_form">
                <!-- Contact results -->
                <div id="contact_results"></div>
                <!-- Form Starts -->
                <div class="form-group">
                    <input type="text" name="Name" class="form-control input-field" placeholder="Nombre y apellido" required="">
                    <input type="email" name="email" class="form-control input-field" placeholder="Correo"
                           required="">
                    <input type="text" name="subject" class="form-control input-field" placeholder="Asunto"
                           required="">
                    <div class="input-group date" id="datetimepicker1">
                        <input type="text" name="date" class="form-control input-field" placeholder="Fecha y Hora"
                               required=""/>
                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
                        <textarea name="message" id="message" class="textarea-field form-control" rows="4"
                                  placeholder="Mensaje" required=""></textarea>
                    <button type="submit" id="submit_btn" value="Submit" class="btn btn-primary center-block">Enviar
                    </button>
                </div>
            </div>
            <!--/Contact form -->
        </div>
        <!--/col-md-4 -->

        <!-- Contact info -->
        <div class="col-md-5 col-md-offset-1 text-center white_block">
            <h4>Información</h4>
            <p>Contacto para información adicional:</p>
            <p><a href="mailto:youremailaddress">refrigerios@refribreak.com</a> O llámenos +57 496 27 56</p>
            <!-- address info -->
            i
            <!-- Social Media icons -->
            <div class="social-media">
                <a href="#" title=""><i class="fa fa-twitter"></i></a>
                <a href="#" title=""><i class="fa fa-facebook"></i></a>
                <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                <a href="#" title=""><i class="fa fa-instagram"></i></a>
            </div>
        </div>
        <!-- /col-md-8 -->
    </div>
    <!-- /container-->
</section>
