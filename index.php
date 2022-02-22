<?php
    $conn = new mysqli("localhost", "root", "", "landingpage");
    if(isset($_POST['submit'])){
        if($conn->connect_errno){
            echo "Не удалось подключиться к MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
            exit;
        } else{
            $username = $_POST['username'];
            $comment = $_POST['comment'];
            $sql = "INSERT INTO `registiration` (`id`, `Username`, `Comment`) VALUES (NULL, '$username', '$comment');";
            mysqli_query($conn, $sql);
            echo "<script>alert('Comment was successfully')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="deskription" content="This site by Azim and Amirbek">
    <title>Landing Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <header>
            <nav>
                <div class="logo">
                    <h3>Telegraph</h3>
                </div>
                <div class="try_beta">
                    <button>Try Beta</button>
                </div>
            </nav>
            <div class="nav__content">
                <div class="nav__content__wrapper">
                    <div class="nav__content__wrapper__left">
                        <h2>Simple. Secure. <br> Reliable messaging.</h2>
                        <p>
                            It is a long established fact that a reader will be distracted by the <br>
                             readable content of a page when looking at its layout. The point of <br>
                              using Lorem Ipsum.
                        </p>
                        <button>Try Beta</button>
                    </div>
                    <div class="nav__content__wrapper__right">
                        <img src="./img/header/group/Group 6.png" alt="">
                    </div>
                </div>
            </div>
            <div class="header__content">
                <div class="header__content__wrapper">
                    <div class="header__content__wrapper__content">
                        <div class="header__content__wrapper__content__android">
                            <img src="img/header/icons/android.png" alt="">
                            <h1>Android</h1>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting.
                            </p>
                            <div class="header__content__wrapper__content__android__download">
                                <h6>Try Beta For Free</h6>
                                <img src="img/header/icons/download.png" alt="">
                            </div>
                        </div>
                        <div class="header__content__wrapper__content__iphone">
                            <img src="img/header/icons/Shape.png" alt="">
                            <h1>iPhone</h1>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting.
                            </p>
                            <div class="header__content__wrapper__content__iphone__download">
                                <h6>Try Beta For Free</h6>
                                <img src="img/header/icons/download.png" alt="">
                            </div>
                        </div>
                        <div class="header__content__wrapper__content__macWin">
                            <img src="img/header/icons/finder.png" alt="">
                            <img src="img/header/icons/windows.png" alt="">
                            <h1>Mac or Windows</h1>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting.
                            </p>
                            <div class="header__content__wrapper__content__macWin__download">
                                <h6>Try Beta For Free</h6>
                                <img src="img/header/icons/download.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <main>
        <div class="main">
            <div class="main__wrapper">
                <div class="main__section__one">
                    <div class="main__section__one__left">
                        <div class="main__section__one__left__text">
                            <h1>Sharing Cool Stuff With Your Community</h1>
                            <p>There are many variations of passages of Lorem Ipsum <br>
                            available, but the majority have suffered alteration in some <br>
                            form, by injected humour, <br> <br>

                            If you are going to use a passage of Lorem Ipsum, <br>
                            you need to be sure there isn't anything.</p>
                        </div>
                    </div>
                    <div class="main__section__one__right">
                        <div class="main__section__one__right__card__one">
                            <div class="main__section__one__right__card__one__box">
                                <img src="img/main/1.png" alt="">
                                <h3>Security by Default</h3>
                                <p>It is a long established fact that <br>
                                     a reader will be distracted by the <br>
                                      readable content.
                                </p>
                            </div>
                            <div class="main__section__one__right__card__one__box">
                                <img src="img/main/3.png" alt="">
                                <h3>Say What's On Your Mind</h3>
                                <p>It is a long established fact that <br>
                                     a reader will be distracted by the <br>
                                      readable content.
                                </p>
                            </div>
                        </div>
                        <div class="main__section__one__right__card__two">
                            <div class="main__section__one__right__card__two__box">
                            <img src="img/main/2.png" alt="">
                            <h3>Document Share</h3>
                            <p>It is a long established fact that <br>
                                a reader will be distracted by the <br>
                                 readable content.
                           </p> 
                        </div>
                        </div>
                    </div>
                </div>
                <div class="main__section__two">
                    <div class="main__section__one__left">
                        <img src="img/main/section__two/1.png" alt="">
                        <img src="img/main/section__two/2.png" alt="">
                    </div>
                    <div class="main__section__one__right">
                        <h1>Keep In Touch With The Groups <br> Of People.</h1>
                        <p>
                            There are many variations of passages of Lorem Ipsum <br>
                            available, but the majority have suffered alteration in some <br>
                            form, by injected humour, or randomised words which don't <br>
                            look even slightly believable.
                        </p>
                    </div>
                </div>
                <div class="main__section__three">
                     <h1>Let's Start With Quick App</h1>
                     <p>It is a long established fact that a reader will be distracted by the readable <br>
                        content of a page when looking at its layout.
                    </p>
                    <button>Try Beta</button>
                </div>
            </div>
        </div>
    </main>
    <form method="post">
        <div class="form-group">
            <label for="input">Username</label>
            <input type="text" class="form-control w-75 m-auto mt-0" id="input" name="username">
        </div>
        <div class="form-group">
            <label for="textarea">Comment</label>
            <textarea class="form-control w-75 m-auto mt-0" id="textarea" rows="5" style="resize: none;" name="comment"></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-primary btn_submit">Submit</button>
</form>
    <footer>
        <div class="footer">
            <div class="main__wrapper">
                <ul>
                    <li>© Telegraph. 2020 — All rights reserved.</li>
                </ul>
                <ul>
                    <li><a href=""></a>Twitter</li>
                    <li><a href=""></a>Instagram</li>
                    <li><a href=""></a>Facebook</li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>