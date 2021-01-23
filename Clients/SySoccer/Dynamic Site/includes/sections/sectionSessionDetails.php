<?php $productID = intval($_GET['productId']);?>
<section class="section section-book" id="book">
    <?php if($products[$productID - 1] != null) : ?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mb-5">
                    <div class="session-heading">
                        <h2 class="session-title"><?php echo $products[$productID - 1][productName]; ?></h2>
                        <p class="session-price">Price: &ThickSpace; <?php echo $products[$productID - 1][productPrice]; ?>/hr</p>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-6">
                    <img src="<?php echo $products[$productID - 1][productImageURL]; ?>" class="img-fluid session-feature-img" alt="">
                </div>
                <div class="col-lg-6">
                    <h3><?php echo $bookingDetailsTitle ?></h3>
                    <p>
                        <?php echo $products[$productID - 1][productDescription]; ?>
                    </p>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-sm-12">
                    <h3>Interested in making a booking?</h3>
                    <p class="lead"><?php echo $bookingDetails ?></p>
                </div>
            </div>
            <div class="row">
                <ul class="nav nav-tabs mb-4" style="margin: 0px auto;">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#new">I am a new customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#exsiting">I am an exsiting customer</a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content border-left border-right border-bottom p-4">
                    <div class="tab-pane fade active show" id="new">
                        <h3>Sign up to book</h3>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima temporibus
                            atque blanditiis quos aspernatur quas, sapiente tempora vitae quasi qui?</p>
                        <form>
                            <div class="form-group form-group-lg">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                    anyone else.</small>
                            </div>
                            <div class="form-group form-group-lg">
                                <label for="name">Your full name</label>
                                <input type="text" class="form-control" id="name"
                                    placeholder="Enter your full name">
                            </div>
                            <div class="form-group form-group-lg">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="form-group form-group-lg">
                                <label for="exampleInputPassword2">Repeat your Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2">
                            </div>
                            <!-- <button type="submit" class="btn btn-primary btn-lg">Get started</button> -->
                            <a href="#" class="btn btn-primary btn-lg">Get started</a>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="exsiting">
                        <h3>Login to book</h3>
                        <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fuga quae id qui
                            esse obcaecati incidunt facilis atque possimus magnam maxime!</p>
                        <form>
                            <div class="form-group form-group-lg">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group form-group-lg">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <!-- <button type="submit" class="btn btn-primary btn-lg">Login</button> -->
                            <a href="#" class="btn btn-primary btn-lg">Login</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>
    <?php if($products[$productID - 1] == null) : ?>
        <?php include("includes/components/pageNotFoundComponent.php") ?>
    <?php endif ?>
</section>
