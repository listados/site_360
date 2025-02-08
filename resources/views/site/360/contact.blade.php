<section id="contact" class="contact section light-background">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Contato</h2>
        <p>Entre em contato conosco e venha conhercer o 360° Listados!</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4 g-lg-5">
            <div class="col-lg-5">
                <div class="info-box" data-aos="fade-up" data-aos-delay="200">
                    <h3>Informações de Contato</h3>
                    <p>Aqui você encontra formas de entrar em contato conosco, seja via telefonema, whatsapp e e-mail, estaremos aguardando a sua mensagem!</p>

                    <div class="info-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon-box">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="content">
                            <h4>Nossa Localização</h4>
                            <p>Rua Ary Barroso N° 70</p>
                            <p>Fortaleza - Ceará</p>
                        </div>
                    </div>

                    <div class="info-item" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon-box">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="content">
                            <h4>Número de Contato</h4>
                            <p>+55 85 99866-0078</p>
                            <p>+55 85 99866-0078</p>
                        </div>
                    </div>

                    <div class="info-item" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon-box">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="content">
                            <h4>Endereço de E-mail</h4>
                            <p>adm@listados.com.br</p>
                            <p>contato@listados.com.br</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="contact-form" data-aos="fade-up" data-aos-delay="300">
                    <h3>Entre em Contato</h3>
                    <p>Preencha o formulário com os seus dados, o assunto que deseja tratar conosco e escreva sua mensagem, verificaremos assim que recebermos.</p>

                    <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Nome" required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="">
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control" name="subject" placeholder="Assunto" required="">
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required=""></textarea>
                            </div>

                            <div class="col-12 text-center">
                                <div class="loading">Enviando</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Sua mensagem foi enviada com sucesso. Obrigado!</div>

                                <button type="submit" class="btn">Enviar Mensagem</button>
                            </div>

                        </div>
                    </form>

                </div>
            </div>

        </div>

    </div>

</section>
