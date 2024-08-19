<?php
$pageTitle = "Corporativo"; // Título dinámico de la página

// Generar el contenido específico de la página
$pageContent = '
<div class="py-4"></div>

    <h2 class="d-flex justify-content-center">Contacto</h2>

    <div class="py-4"></div>

<section class="bg0 p-t-104 p-b-116">
    <div class="container">
        <div class="contact-container">
            <div class="contact-form">
                <form id="frmContacto">
                    <h4 class="mtext-105 cl2 txt-center p-b-30">Enviar un mensaje</h4>

                    <div class="form-group">
                        <input class="inputs-forms" type="text" id="nombreContacto" name="nombreContacto" placeholder="Nombre completo">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-filled" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 2a5 5 0 1 1 -5 5l.005 -.217a5 5 0 0 1 4.995 -4.783z" stroke-width="0" fill="currentColor" />
                            <path d="M14 14a5 5 0 0 1 5 5v1a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-1a5 5 0 0 1 5 -5h4z" stroke-width="0" fill="currentColor" />
                          </svg>
                    </div>

                    <div class="form-group">
                        <input class="inputs-forms" type="text" id="emailContacto" name="emailContacto" placeholder="Correo electrónico">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-filled" width="44" height="44" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" stroke-width="0" fill="currentColor" />
                            <path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" stroke-width="0" fill="currentColor" />
                          </svg>
                    </div>

                    <div class="form-group">
                        <textarea class="inputs-forms" id="mensaje" name="mensaje" placeholder="¿Cual es tu pregunta o mensaje?"></textarea>
                    </div>

                    <button class="btn-submit">Enviar</button>
                </form>
            </div>

            <div class="contact-info">
                <div class="info-item">
                    <span>Dirección</span>
                    <p>Carretera Troncal del Norte, La Palma</p>
                </div>

                <div class="info-item">
                    <span>Teléfono</span>
                    <p><a href="tel:+50379888963">+503 7988 8963</a></p>
                </div>

                <div class="info-item">
                    <span>E-mail</span>
                    <p><a href="mailto:jaimesalguero233@gmail.com">jaimesalguero233@gmail.com</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

';

include 'layout.php';
?>

<link rel="stylesheet" href="../css/Corporativo.css">
