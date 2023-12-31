<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
/* ==========================================
    FOR DEMO PURPOSE
  ========================================== */

.text-small {
    font-size: 0.9rem;
}

footer a {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

footer :hover,
a:focus {
    text-decoration: none;
}

footer .form-control {
    background: #212529;
    border-color: #545454;
}

.form-control:focus {
    background: #212529;
}

footer {
    background: #212529;
}
</style>

<body>
    <div class="d-flex flex-column h-100">

        <!-- FOR DEMO PURPOSE -->
        <section class="hero text-white py-5 flex-grow-1 bg-light">
            <div class="container text-center py-4">
                <div class="row">
                    <div class="col-lg-12">
                        <img src="images/gdf_logo.png" class="w-50" alt="">
                        <p class="fst-italic text-muted">Our classrooms are not just classrooms for teaching, they are
                            classrooms for fulfilling big dreams like yours.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- FOOTER -->
        <footer class="w-100 py-4 flex-shrink-0">
            <div class="container py-4">
                <div class="row gy-4 gx-5">
                    <div class="col-lg-4 col-md-6">
                        <h5 class="h1 text-white">FB.</h5>
                        <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt.</p>
                        <p class="small text-muted mb-0">&copy; Copyrights. All rights reserved. <a class="text-primary"
                                href="#">Bootstrapious.com</a></p>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h5 class="text-white mb-3">Quick links</h5>
                        <ul class="list-unstyled text-muted">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Get started</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h5 class="text-white mb-3">Quick links</h5>
                        <ul class="list-unstyled text-muted">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Get started</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white mb-3">Newsletter</h5>
                        <p class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt.</p>
                        <form action="#">
                            <div class="input-group mb-3">
                                <input class="form-control" type="text" placeholder="Recipient's username"
                                    aria-label="Recipient's username" aria-describedby="button-addon2">
                                <button class="btn btn-primary" id="button-addon2" type="button"><i
                                        class="fas fa-paper-plane"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>