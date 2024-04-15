<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- include sass -->
        @vite(['resources/scss/admin.scss'])
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <div class="login-wrapper">
                                <div class="image-wrapper">
                                    <img src="{{ asset('img/pf-image.png') }}" />
                                </div>
                                <div class="header">
                                    <div class="text">SUPSUP!</div>
                                </div>
                                <form>
                                    <div class="username">
                                        <input type="text" id="username" name="username" placeholder="username">
                                    </div>
                                    <div class="password">
                                        <input type="text" id="password" name="password" placeholder="password">
                                    </div>
                                    <div class="forgot">
                                        <a href="/#">forgot password?</a>
                                    </div>
                                    <div class="button-wrapper">
                                        <input type="submit" value="Login">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>