<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="../config/tomatoApi.js"></script>
    <title>Game Loading</title>
</head>

<body>
    <div class="gamePlay__screen">

        <div class="profileAvatar">
            <img src="../assets/images/profile Avatar.png">
        </div>

        <div class="game__logo">
            <div class="logo">
                <img src="../assets/images/logo.png">
            </div>

            <div class="score__container">
                <h3>LEVEL: 1/3</h3>
            </div>

            <h2>WHAT IS THE SOLUTION?</h2>
        </div>

        <div class="game__wrapper">
            <div class="game">
                <img src="" id="display">
            </div>

            <div class="score__container">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">TIME REMAINING:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">09:23</th>
                        </tr>
                    </tbody>
                </table>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">SCORE:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1500</th>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        <div class="answer__wrapper">
            <div class="btn__container">
                <div class="icon__image">
                    <img src="../assets/images/ansOne.png">
                </div>

                <div class="icon__image">
                    <img src="../assets/images/ansTwo.png">
                </div>

                <div class="icon__image">
                    <img src="../assets/images/ansThree.png">
                </div>

                <div class="icon__image">
                    <img src="../assets/images/ansFour.png">
                </div>

                <div class="icon__image">
                    <img src="../assets/images/ansFive.png">
                </div>

                <div class="icon__image">
                    <img src="../assets/images/ansSix.png">
                </div>

                <div class="icon__image">
                    <img src="../assets/images/ansSeven.png">
                </div>

                <div class="icon__image">
                    <img src="../assets/images/ansEight.png">
                </div>

                <div class="icon__image">
                    <img src="../assets/images/ansNine.png">
                </div>
            </div>

            <button type="submit" class="btn">ENTER</button>


            <!-- <p>Rating: <span class="star-rating">
		<label for="rate-1" style="--i:1"><i class="fa-solid fa-star"></i></label>
		<input type="radio" name="rating" id="rate-1" value="1">
		<label for="rate-2" style="--i:2"><i class="fa-solid fa-star"></i></label>
		<input type="radio" name="rating" id="rate-2" value="2" checked>
		<label for="rate-3" style="--i:3"><i class="fa-solid fa-star"></i></label>
		<input type="radio" name="rating" id="rate-3" value="3">
		<label for="rate-4" style="--i:4"><i class="fa-solid fa-star"></i></label>
		<input type="radio" name="rating" id="rate-4" value="4">
		<label for="rate-5" style="--i:5"><i class="fa-solid fa-star"></i></label>
		<input type="radio" name="rating" id="rate-5" value="5">
	</span></p> -->

            <!-- <div class="btn__container">
                <div class="icon__image">
                    <img src="../assets/images/Backward Icon.png">
                </div>
            </div> -->
        </div>
    </div>
</body>

</html>