<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
.red .active a,
.red .active a:hover {
    background-color: red;
}
</style>

<body>
    <?php include 'header.php'; ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner_2.jpg" class="d-block w-100" alt="banner 1">
            </div>
            <div class="carousel-item">
                <img src="images/banner_1.jpg" class="d-block w-100" alt="banner 2">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-3">
                <div class="text-center py-2">
                    <h1>I am Preparing For</h1>
                    <p>We have a variety of products to choose from</p>
                </div>
                <div class="">
                    <ul class="p-3 nav red justify-content-evenly  nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link btn active d-flex align-middle justify-content-center text-center"
                                id="pills-bank-tab" data-bs-toggle="pill" data-bs-target="#pills-bank" type="button"
                                role="tab" aria-controls="pills-bank" aria-selected="true">
                                <div class="d-flex justify-content-center align-middle">
                                    <img class="" src="images/bank.png" alt=""><span class="px-3 my-auto">Bank</span>
                                </div>
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-scc-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-scc" type="button" role="tab" aria-controls="pills-scc"
                                aria-selected="false">
                                <div>
                                    <img class="" src="images/ssc.png" alt=""><span class="px-3 my-auto"> SCC</span>
                                </div>
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-railways-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-railways" type="button" role="tab" aria-controls="pills-railways"
                                aria-selected="false">
                                <div>
                                    <img class="" src="images/railway.png" alt=""> Railways
                                </div>
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-police-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-police" type="button" role="tab" aria-controls="pills-police"
                                aria-selected="false">
                                <div>
                                    <img class="" src="images/police.png" alt=""> Police
                                </div>
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-teachering-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-teachering" type="button" role="tab"
                                aria-controls="pills-teachering" aria-selected="false">
                                <div>
                                    <img class="" src="images/teaching.png" alt=""> Teachering
                                </div>
                            </button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-state-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-state" type="button" role="tab" aria-controls="pills-state"
                                aria-selected="false">
                                <div>
                                    <img class="" src="images/state.png" alt=""> State Level
                                </div>
                            </button>
                        </li>

                    </ul>
                    <div class="tab-content py-2" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-bank" role="tabpanel"
                            aria-labelledby="pills-bank-tab">
                            <p>If you're a person seeking achievement and progress. The ideal bait for a student to use
                                is often financial institutions because this is a sector with a consistently rising
                                growth graph. The banking industry is for you if you believe you have the potential to
                                be trustworthy and you have developed a feeling of responsibility attesting to
                                tremendous heights. And you ought to consider working with GDF Academy if you want to
                                pursue a career in banking. After all, the greatest career counselling is necessary.</p>
                            <ul>
                                <li>Video Courses</li>
                                <li>Live Classes</li>
                                <li>Branch Admission</li>
                                <li>Online Test Series</li>
                                <li>E-Books</li>
                                <li>Publication</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-scc" role="tabpanel" aria-labelledby="pills-scc-tab">
                            <p>For various kinds of exams, including CGL, CHSL, stenographer, CPO, GD Constable, and
                                multi-tasking, GDF Academy offers SSC classes to students. At GDF Academy, we are firm
                                believers that preparing for an exam is important</p>
                            <ul>
                                <li>Video Courses</li>
                                <li>Live Classes</li>
                                <li>Branch Admission</li>
                                <li>Online Test Series</li>
                                <li>E-Books</li>
                                <li>Publication</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-railways" role="tabpanel"
                            aria-labelledby="pills-railways-tab">
                            <p>
                                For exams like RRB ALP and Technician, NTPC, Group D, Ministerial and Isolated
                                Categories, RRB JE, etc., GDF Academy provides railway classes to students. We at GDF
                                Academy believe that training will actually make a difference.
                            </p>
                            <ul>
                                <li>Video Courses</li>
                                <li>Live Classes</li>
                                <li>Branch Admission</li>
                                <li>Online Test Series</li>
                                <li>E-Books</li>
                                <li>Publication</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-police" role="tabpanel" aria-labelledby="pills-police-tab">
                            <p>
                                The Staff Selection Commision, competitive computer-based examinations for the
                                recruitment of sub-inspectors in the Delhi Police, Central Armed Police Forces (CAPFs),
                                assistant sub-inspectors in the CISF, etc., are all provided by the GDF Academy.
                            </p>
                            <ul>
                                <li>Video Courses</li>
                                <li>Live Classes</li>
                                <li>Branch Admission</li>
                                <li>Online Test Series</li>
                                <li>E-Books</li>
                                <li>Publication</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-teachering" role="tabpanel"
                            aria-labelledby="pills-teachering-tab">
                            <p>
                                For candidates seeking employment in the teaching area, GDF Academy offers classes for
                                teacher exams. For applicants looking to work in government schools, it is the most
                                desired job path. These exams are given the designations CTET, TET, DSSSB, etc.
                            </p>
                            <ul>
                                <li>Video Courses</li>
                                <li>Live Classes</li>
                                <li>Branch Admission</li>
                                <li>Online Test Series</li>
                                <li>E-Books</li>
                                <li>Publication</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="pills-state" role="tabpanel" aria-labelledby="pills-state-tab">
                            <p>The GDF Academy holds the opinion that studying for the test can have a huge impact.To
                                help students prepare for numerous exams, including those for the UP Gramme Panchayat
                                Adhikari/VDO, UP Police, Delhi Police, UPSC, Lucknow Metro, Delhi Metro, Delhi
                                Development Authority, Bihar, MP, and Jharkhand, among others, we provide state-level
                                exam classes. </p>
                            <ul>
                                <li>Video Courses</li>
                                <li>Live Classes</li>
                                <li>Branch Admission</li>
                                <li>Online Test Series</li>
                                <li>E-Books</li>
                                <li>Publication</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-3 my-3" style="background: #37286f;">
        <div class="row">
            <div class="col-12">
                <div class="w-100 d-flex justify-content-evenly flex-wrap">
                    <div class="card m-2" style="width: 18rem;">
                        <img src="images/classroom.jpg" style="height:8rem;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CLASSROOM PROGRAM</h5>
                            <h4>The Room For Your Dreams</h4>
                            <p class="card-text">Our classrooms are not just classrooms for teaching, they are
                                classrooms for fulfilling big dreams like yours. </p>
                            <a href="#" class="btn w-100 btn-primary">Learn More </a>
                        </div>
                    </div>

                    <div class="card m-2" style="width: 18rem;">
                        <img src="images/ost.jpg" style="height:8rem;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">ONLINE SPEED TESTS</h5>
                            <h4>Test-A-Mend! And Many Things</h4>
                            <p class="card-text">Mend your weakness through our online tests. Assessments of your
                                preparation and studies are best done through tests.</p>
                            <a href="#" class="btn w-100 btn-primary">Learn More </a>
                        </div>
                    </div>

                    <div class="card m-2" style="width: 18rem;">
                        <img src="images/live-class.jpg" style="height:8rem;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">LIVE ONLINE CLASSES</h5>
                            <h4>Why Go Out When You Can Go Online?</h4>
                            <p class="card-text">Live for getting hands on preparation from the renowned faculty.
                                Mahendras live online classes with 24x7 doubt resolution. </p>
                            <a href="#" class="btn w-100 btn-primary">Learn More </a>
                        </div>
                    </div>

                    <div class="card m-2" style="width: 18rem;">
                        <img src="images/video-class.jpg" style="height:8rem;" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">LIVE ONLINE CLASSES</h5>
                            <h4>Why Go Out When You Can Go Online?</h4>
                            <p class="card-text">Live for getting hands on preparation from the renowned faculty.
                                Mahendras live online classes with 24x7 doubt resolution. </p>
                            <a href="#" class="btn w-100 btn-primary">Learn More </a>
                        </div>
                    </div>
                </div>
                <div class="w-100 p-4 m-3 text-center">
                    <a href="#" class="btn p-2 w-25 text-white btn-primary">Learn More </a>
                </div>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="text-center py-2">
                    <h1 class="">Exams Covered</h1>
                    <ul class="nav nav-pills justify-content-evenly mt-5" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Upcoming</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">State Level</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Banking</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">SSC</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                                aria-selected="false">Railways</button>
                        </li>
                    </ul>
                    <div class="tab-content mt-5" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab">
                            <div class="d-flex justify-content-evenly flex-wrap">
                                <div class="w-25 p-3">
                                    <img src="images/1.png" alt=""> <span class="my-auto fw-bold">CUET</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/2.png" alt=""> <span class="my-auto fw-bold">IBSP PO</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/2.png" alt=""> <span class="my-auto fw-bold">IBSP CLERK</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/2.png" alt=""> <span class="my-auto fw-bold">IBSP RRB</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/2.png" alt=""> <span class="my-auto fw-bold">IBSP SO</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/3.png" alt=""> <span class="my-auto fw-bold">SBI CLERK</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/3.png" alt=""> <span class="my-auto fw-bold">SBI PO</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/3.png" alt=""> <span class="my-auto fw-bold">SBI Apprentice</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/4.png" alt=""> <span class="my-auto fw-bold">SSC GD
                                        Constable</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/4.png" alt=""> <span class="my-auto fw-bold">SSC CGL</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/4.png" alt=""> <span class="my-auto fw-bold">SSC CPO</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/4.png" alt=""> <span class="my-auto fw-bold">SSC CHSL</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/a5.png" alt=""> <span class="my-auto fw-bold">UPSSSC PET</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/6.png" alt=""> <span class="my-auto fw-bold">RRB NTPC</span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <div class="d-flex justify-content-evenly flex-wrap">
                                <div class="w-25 p-3">
                                    <img src="images/1.png" alt=""> <span class="my-auto fw-bold">CUET</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/2.png" alt=""> <span class="my-auto fw-bold">IBSP PO</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/2.png" alt=""> <span class="my-auto fw-bold">IBSP SO</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/3.png" alt=""> <span class="my-auto fw-bold">SBI CLERK</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/3.png" alt=""> <span class="my-auto fw-bold">SBI PO</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/3.png" alt=""> <span class="my-auto fw-bold">SBI Apprentice</span>
                                </div>

                                <div class="w-25 p-3">
                                    <img src="images/4.png" alt=""> <span class="my-auto fw-bold">SSC CGL</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/4.png" alt=""> <span class="my-auto fw-bold">SSC CPO</span>
                                </div>

                                <div class="w-25 p-3">
                                    <img src="images/a5.png" alt=""> <span class="my-auto fw-bold">UPSSSC PET</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/6.png" alt=""> <span class="my-auto fw-bold">RRB NTPC</span>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">
                            <div class="d-flex justify-content-evenly flex-wrap">
                                <div class="w-25 p-3">
                                    <img src="images/1.png" alt=""> <span class="my-auto fw-bold">CUET</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/2.png" alt=""> <span class="my-auto fw-bold">IBSP PO</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/2.png" alt=""> <span class="my-auto fw-bold">IBSP SO</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/3.png" alt=""> <span class="my-auto fw-bold">SBI CLERK</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/3.png" alt=""> <span class="my-auto fw-bold">SBI PO</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/3.png" alt=""> <span class="my-auto fw-bold">SBI Apprentice</span>
                                </div>

                                <div class="w-25 p-3">
                                    <img src="images/4.png" alt=""> <span class="my-auto fw-bold">SSC CGL</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/4.png" alt=""> <span class="my-auto fw-bold">SSC CPO</span>
                                </div>

                                <div class="w-25 p-3">
                                    <img src="images/a5.png" alt=""> <span class="my-auto fw-bold">UPSSSC PET</span>
                                </div>
                                <div class="w-25 p-3">
                                    <img src="images/6.png" alt=""> <span class="my-auto fw-bold">RRB NTPC</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include 'footer.php' ?>




</body>

</html>