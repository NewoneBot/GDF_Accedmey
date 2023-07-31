<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
/* background-color: yellow !important; */

.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: #4d3838;
    font-weight: 500;
    background-color: #ffffff;
    box-shadow: 0px 5px 12px -5px #a99e9e;
    border-radius: 47px;
}

.nav-pills .nav-link {
    color: #958686 !important;
}

.btn .active {
    background-color: red;
}

.red .active a,
.red .active a:hover {
    background-color: red;
}
</style>

<body>

    <!-- Button trigger modal -->
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button> -->

    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> -->
    <div calss="w-100 container" style="background: #37286f;">
        <div class="row px-3 py-2 m-0">
            <div class="col-md-6  text-white">
                <i class="fa-brands px-3 fa-facebook"></i>
                <i class="fa-brands px-3 fa-twitter"></i>
                <i class="fa-brands px-3 fa-instagram"></i>
                <i class="fa-brands px-3 fa-youtube"></i>
                <i class="fa-brands px-3 fa-linkedin"></i>
                <i class="fa-brands px-3 fa-telegram"></i>
            </div>
            <div class="col-md-6 text-white d-flex justify-content-end">
                <span class="px-3">
                    <i class="fa-regular fa-user "></i> Register
                </span>
                <span class="px-3">
                    <i class="fa-solid fa-lock "></i> Login
                </span>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand" href="#">
                <img src="images/gdf_logo.png" class="w-100" style="height:5rem;" alt="">
            </a>
            <div id="line" class="nav-item w-50 d-flex fw-bold ">
                <input type="text" class="form-control w-100 border-end-0 rad rounded-0" placeholder="Username"
                    aria-label="Username" aria-describedby="basic-addon1">
                <button class="btn border  border-start-0 border-1 rounded-0" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav w-100">
                    <li id="line" class="nav-item active mx-3 fw-bold">
                        <a class="nav-link" href="about.php">Home</a>
                    </li>
                    <li id="line" class="nav-item  mx-3 fw-bold">
                        <a class="nav-link" href="team.php">Exam</a>
                    </li>
                    <li id="line" class="nav-item  mx-3 fw-bold">
                        <a class="nav-link" href="service.php">Career</a>
                    </li>
                    <li id="line" class="nav-item  mx-3 fw-bold ">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script type="text/javascript">
$(window).on('load', function() {
    $('#myModal').modal('show');
});
</script>

</html>