<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <title>Register Now</title>

    
</head>

<body>

    

    <div>
        <div class="container-xxl bg-danger bg-opacity-10">
            <div class="row bg-danger">
                <div class="col-md-12 fs-2 text-center">
                  Register Here
                </div>
            </div>
            <form method="post" enctype="multipart/form-data">
                <input type="hidden" id="jasoos1" name="jasoos1">
                <input type="hidden" id="jasoos2" name="jasoos2">

                <div class="d-grid gap-3"></div>
                <div class="row">
                    <div class="col-md-5 p-2 mt-3">
                        <label for="txtEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="txtEmail" name="txtEmail" required>
                    </div>
                   
                    <div class="row">
                        <div class="col-md-4 p-2">
                            <label for="txtName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="txtName" name="txtName" required>
                        </div>
                        <div class="col-md-4 p-2">
                            <label for="txtContact" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="txtContact" name="txtContact" required>
                        </div>
                        <div class="col-md-4 p-2">
                            <label for="txtCity" class="form-label">City</label>
                            <input class="form-control" list="cities" name="txtCity" id="txtCity"
                                placeholder="Type to search..." required>
                            <datalist id="cities">
                                <option value="Mumbai">
                                <option value="Delhi">
                                <option value="Bangalore">
                                <option value="Hyderabad">
                                <option value="Chennai">
                                <option value="Kolkata">
                                <option value="Jaipur">
                                <option value="Lucknow">
                                <option value="Bhopal">
                                <option value="Patna">
                                <option value="Ranchi">
                                <option value="Raipur">
                                <option value="Chandigarh">
                                <option value="Guwahati">
                                <option value="Bhubaneswar">
                                <option value="Thiruvananthapuram">
                                <option value="Dehradun">
                                <option value="Jammu">
                                <option value="Imphal">
                                <option value="Pondicherry">
                                <option value="Shimla">
                                <option value="Port Blair">
                                <option value="Amaravati">
                                <option value="Pondicherry">
                                <option value="Gangtok">
                                <option value="Bathinda">
                                <option value="Delhi">
                                <option value="Gandhinagar">
                            </datalist>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 p-2">
                            <label for="inputAddress" class="form-label">Address</label>
                            <input type="text" class="form-control" id="inputAddress" name="inputAddress" required
                                placeholder="Apartment, studio, or floor">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 p-2">
                            <label for="txtCategory" class="form-label">Category</label>
                            <select id="txtCategory" class="form-select" name="txtCategory" required>
                                <option selected>Choose...</option>
                                <option value="Plumber">Plumber</option>
                                <option value="Maid">Maid</option>
                                <option value="Painter">Painter</option>
                                <option value="Electrician">Electrician</option>
                            </select>
                        </div>
                        <div class="col-md-4 p-2">
                            <label for="txtExp" class="form-label">Experience</label>
                            <select id="txtExp" name="txtExp" class="form-select" required>
                                <option selected>Choose...</option>
                                <option value="1">1 Year</option>
                                <option value="3">3 Years</option>
                                <option value="5">5 Years</option>
                            </select>
                        </div>
                        <div class="col-md-4 p-2">
                            <label for="txtFirm" class="form-label">Firm/Shop</label>
                            <input type="text" class="form-control" id="txtFirm" name="txtFirm" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 p-2">

                            <label for="txtareaWorkDone" class="form-label">Work Done Details</label>
                            <textarea class="form-control" name="txtareaWorkDone" id="txtareaWorkDone" rows="2"
                                required></textarea>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 p-2">
                            <label for="picFile" class="form-label">Profile Pic</label>
                            <input class="form-control" type="file" id="picFile" name="picFile"
                                onchange=" doShowPrev(this);">
                        </div>
                        <div class="col-md-5 p-2">
                            <label for="idFile" class="form-label">Id Proof</label>
                            <input class="form-control" type="file" id="idFile" name="idFile"
                                onchange="doShowPrev2(this);">
                        </div>
                    </div>
                    
                    <div class="row mt-2">
                        <div class="col-md-12 d-flex justify-content-center">
                            <button type="submit"
                                class="btn btn-lg btn-outline-danger me-2" formaction="action.php?action=register">Submit</button>
                    </div>

                    <div class="col-md-12 d-flex justify-content-center">
                            <button type="submit"
                                class="btn btn-lg btn-outline-danger me-2" formaction="action.php?action=edit">Update</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</body>

</html>