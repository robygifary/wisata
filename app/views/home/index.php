<!-- carousel -->
<div class="container-fluid bg-black opacity-100">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner" style="height: 89vh;">
            <div class="carousel-item active">
                <img src="<?= BASEURL; ?>/img/1.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= BASEURL; ?>/img/2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="<?= BASEURL; ?>/img/5.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- endcarousel -->

<!-- about -->
<section id="about">
    <div class="container">
        <div class="row text-center mt-4">
            <div class="col">
                <h2>About</h2>
            </div>
        </div>
        <div class="row justify-content-center fs-5 text-center mt-3">
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum animi numquam repellendus molestiae
                    magnam ex dolorum repudiandae officia eos inventore.</p>
            </div>
            <div class="col-md-4">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis quod molestiae perferendis
                    accusantium quis, minus, fugiat sequi aut ullam ducimus earum, nostrum doloremque voluptatum veniam!
                </p>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#273036" fill-opacity="1"
            d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,74.7C672,53,768,43,864,58.7C960,75,1056,117,1152,133.3C1248,149,1344,139,1392,133.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</section>
<!-- akhir about -->

<!-- project -->
<section id="project" style="background-color: #273036">
    <div class="container">
        <div class="row text-center mb-2">
            <div class="col">
                <h2 class="text-white">Preview Wisata</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 20rem;">
                    <video controls="true">
                        <source src="<?= BASEURL; ?>/video/video1.mp4" type="video/mp4">
                    </video>
                    <div class="card-body" style="background-color: #a2d9ff;">
                        <h5 class="card-title">Kebun Raya Bogor</h5>
                        <p class="card-text fs-6">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 20rem;">
                    <video controls="true">
                        <source src="<?= BASEURL; ?>/video/video2.mp4" type="video/mp4">
                    </video>
                    <div class="card-body" style="background-color: #a2d9ff;">
                        <h5 class="card-title">The Highland Sentul</h5>
                        <p class="card-text fs-6">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card" style="width: 20rem;">
                    <video controls="true">
                        <source src="<?= BASEURL; ?>/video/video3.mp4" type="video/mp4">
                    </video>
                    <div class="card-body" style="background-color: #a2d9ff;">
                        <h5 class="card-title">Taman Safari Puncak</h5>
                        <p class="card-text fs-6">Some quick example text to build on the card title and make up the
                            bulk of
                            the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#a2d9ff" fill-opacity="1"
            d="M0,128L48,117.3C96,107,192,85,288,69.3C384,53,480,43,576,69.3C672,96,768,160,864,197.3C960,235,1056,245,1152,224C1248,203,1344,149,1392,122.7L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</section>
<!-- akhir project -->

<!-- contact -->
<section id="section" style="background-color: #a2d9ff">
    <div class="container">
        <div class="row text-center mb-4">
            <div class="col">
                <h2>Contact Service</h2>
            </div>
            <div class="row justify-content-center p-3">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="name" class="form-control" id="name" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="email">
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3"></textarea>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto p-3">
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#273036" fill-opacity="1"
            d="M0,128L48,133.3C96,139,192,149,288,144C384,139,480,117,576,112C672,107,768,117,864,138.7C960,160,1056,192,1152,202.7C1248,213,1344,203,1392,197.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg>
</section>
<!-- akhir contact -->

<!--footer  -->
<footer class="bg-dark text-center pb-3">
    <p class="text-white">Created by <a href="https://www.instagram.com/robierockahollic"
            class="text-white fw-bold">Robby T Gifary</a></p>
</footer>
<!-- akhir footer -->