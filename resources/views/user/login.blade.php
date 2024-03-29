@include('templates.headerArsha')

<main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-6 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="section-title">
                            <h2>Login</h2>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="pwd">Password</label>
                                <input type="password" name="pwd" class="form-control" id="pwd" required>
                                <div class="form-group col-md-2">
                                    <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                                    <span id="mybutton" onclick="change()" class="input-group-text">

                                        <!-- icon mata bawaan bootstrap  -->
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                            <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                        </svg>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="text-center"><button type="submit">Buat Akun</button></div>
                        <div class="text-center">
                            <p>
                                Belum punya akun?<a href="/regis"> Buat Akun!</a>
                            </p>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img mt-3 section-title" data-aos="zoom-in" data-aos-delay="200">
                    <h1 class="text-center" style="color: white; ">
                        <br>
                        Lets Join Us! <br>
                        <br>
                        <br>
                    </h1>
                    <img src="{{ asset('storage/img/karateDuelCewe.png')}}" class="img-fluid animated" alt="">
                </div>
            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<script>
    // membuat fungsi change
    function change() {

        // membuat variabel berisi tipe input dari id='pwd', id='pwd' adalah form input password 
        var x = document.getElementById('pwd').type;

        //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
        if (x == 'password') {

            //ubah form input password menjadi text
            document.getElementById('pwd').type = 'text';

            //ubah icon mata terbuka menjadi tertutup
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                                    <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                                    <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                                                    </svg>`;
        } else {

            //ubah form input password menjadi text
            document.getElementById('pwd').type = 'password';

            //ubah icon mata terbuka menjadi tertutup
            document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                                                    <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                                                    </svg>`;
        }
    }
</script>

@include('templates.footerArsha')