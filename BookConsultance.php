<html>
    <head>
    <title>BookConsultance</title>
  
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
    <style> @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    margin: 0%;
    padding: 0%;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.bg-blue {
    background-color: #054d7c;
}

.bg-red {
    background-color: #d80606;
}

.bg-darkred {
    background-color: #a70f0f;
    border: none;
    color: #fff !important;
}

p {
    color: #ddd;
    font-weight: 500;
    font-size: 13px;
}

select {
    font-size: 13px !important;
}

#inputState:focus {
    background-color: #a70f0f;
    color: #fff;
    box-shadow: none;
}

::placeholder {
    color: white !important;
    font-size: 13px;
}

input:focus {
    background-color: #a70f0f !important;
    color: #fff;
    box-shadow: none !important;
}

textarea:focus {
    background-color: #a70f0f !important;
}

#dropDown {
    height: 100%;
    padding-bottom: 8px;
}

#dropDown.form-control {
    appearance: revert;
    color: #fff;
}

#dropDown.form-control:focus {
    background-color: #a70f0f;
}

.btn {
    background-color: #fff;
    letter-spacing: 2px;
    font-size: 0.85rem;
    font-weight: 600;
}

.msg-btn {
    height: 70px;
}

.btn:hover {
    background-color: #efefef;
}</style>

</head>
    <body>


<div class="row m-md-5 m-3 ">
        <div class="col-lg-4 bg-blue py-5 px-5">
            <h4 class="text-center text-white mb-4">Contact Details</h4>
            <div class="row">
                <div class=" col-lg-4 col-md-5 offset-lg-0 offset-md-2 col-4 ">
                    <p class="fw-bold">Call Us:</p>
                </div>
                <div class=" col-lg-8 col-md-5 col-8">
                    <p>+2 392 3929 210</p>
                </div>
                <div class=" col-lg-4 col-md-5 offset-lg-0 offset-md-2 col-4">
                    <p class="fw-bold">Location:</p>
                </div>
                <div class=" col-lg-8 col-md-5 col-8">
                    <p>San Francisco, California,USA</p>
                </div>
                <div class=" col-lg-4 col-md-5 offset-lg-0 offset-md-2 col-4">
                    <p class="fw-bold">Work hours:</p>
                </div>
                <div class=" col-lg-8 col-md-5 col-8">
                    <p class="">Monday-Friday 8:00AM-8:00PM Sunday-closed</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 bg-red py-5 px-5">
            <form action="">
                <h4 class="text-center text-white mb-4">Make An Appointment</h4>
                <div class="row">
                    <div class="col-md-6 col-12 my-md-0 my-2">
                        <input type="text" class="form-control bg-darkred" placeholder="Your Full Name">
                    </div>
                    <div class="col-md-6 col-12 my-md-0 my-2 ">
                        <input type="email" class="form-control bg-darkred" placeholder="Your Email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-12 my-2">
                        <input type="text" class="form-control bg-darkred" placeholder="Your Phone Number">
                    </div>
                    <div class="col-md-6 col-12 my-2">
                        <select name="" id="dropDown" class="form-control bg-darkred shadow-none">
                            <option value="" hidden selected>Services</option>
                            <option value="service 1">Service 1</option>
                            <option value="service 1">Service 2</option>
                            <option value="service 1">Service 3</option>
                        </select>
                    </div>
                    <div class="">
                        <textarea cols="10" rows="3" class="form-control bg-darkred shadow-none"
                            placeholder="Message"></textarea>
                    </div>
                    <div class=" my-2"> <button class="btn w-100 shadow-none text-uppercase msg-btn">Send
                            Message</button> </div>

                </div>
            </form>
        </div>
        <div class="col-lg-4 bg-blue py-5 px-5">
            <h4 class="text-center text-white mb-4">Maintenance Services</h4>
            <div class="col">
                <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa a minima explicabo similique,
                    ipsum quam quibusdam quae. Assumenda quibusdam molestiae eveniet qui voluptatum nesciunt vero
                    molestias quas sint quia? Ratione?</p>
            </div>
            <div class=""><button class="btn my-3 shadow-none text-uppercase">More Services</button></div>
        </div>
    </div>
</body>
    </html>