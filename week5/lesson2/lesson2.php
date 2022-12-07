<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="/assets/bootstrap-5.2.3-dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>HTML Form</title>
</head>
<body>

<div class="container">
    <main>
        <div class="row align-items-center py-5">
            <div class="mx-auto">









                <form action="lesson2.php" method="post" class="p-4 p-md-5 border rounded-3 bg-light">

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Text field</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1">
                    </div>



                    <input type=hidden name="hiddenUserId" value="1">

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>

                    <div class="mb-3">
                        <label for="select1" class="form-label">Select</label>
                        <select name="select" id="select1" class="form-select" aria-label="Default select example">
                            <option value="0">Open this select menu</option>
                            <option selected value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="select2" class="form-label">Select Multiselect</label>
                        <select name="select_multiple[]" multiple id="select2" class="form-select" aria-label="multiple select example">
                            <option selected value="0">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Checkbox</label>
                        <div class="form-check">
                            <input name="checkbox[first][subone]" class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault"> Default checkbox </label>
                        </div>
                        <div class="form-check">
                            <input name="checkbox[second][subtwo]" class="form-check-input" type="checkbox" value="2" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked"> Checked checkbox </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Radio</label>
                        <div class="form-check">
                            <input name="radio" value="0" class="form-check-input" type="radio" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1"> Default radio </label>
                        </div>
                        <div class="form-check">
                            <input name="radio" value="1" class="form-check-input" type="radio" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2"> Default checked radio </label>
                        </div>
                        <div class="form-check">
                            <input name="radio" value="3" class="form-check-input" type="radio" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2"> Default checked radio </label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Textarea</label>
                        <textarea name="textarea one" class="form-control" id="exampleFormControlTextarea1" rows="3" cols="10"></textarea>
                    </div>

<!--                    <div class="mb-3">-->
<!--                        <label class="form-label">File</label>-->
<!--                        <input type="file" name="file" class="form-control" aria-label="file example">-->
<!--                        <div class="invalid-feedback">Example invalid form file feedback</div>-->
<!--                    </div>-->

<!--                    <button class="w-100 btn btn-lg btn-warning mb-1" type="reset">Reset</button>-->
                    <input class="w-100 btn btn-lg btn-primary mb-1" type="submit" value="Submit">
                </form>





                <div class="card mt-5">
                    <div class="card-body">

                        <blockquote class="blockquote border p-5">
                            <div class="p-3 bg-primary text-white">echo</div>
<!--                            <div class="p-3 bg-primary text-white">&lt;b&gt;bold&lt;/b&gt;</div>-->
                            <div class="border mt-3 p-3">
                                <?php
                                var_dump($_POST);
                                ?>
                            </div>
                        </blockquote>

                    </div>
                </div>














            </div>
        </div>
    </main>
</div>

<!--<script src="/assets/bootstrap-5.2.3-dist/js/bootstrap.bundle.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>-->

</body>
</html>