<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>Contact Page</title>
    <style>
        .first-row {
            background-color: rgba(0, 0, 0, 1);
            padding: 0;
            text-align: 0;
        }

        .third-row {
            margin: 50;
            background-color: rgba(0, 0, 0, 1);
            align-items: 20;
        }

        .color{
            color:white;
        }
        .send_btn {
           background-color: #4F1787;  /* or any color you want */
           color: blue;
           padding: 10px 20px;
           border: none;
           cursor: pointer;
       }
       .send_btn:hover {
           background-color: #3f1934;
       }

        .end{
            
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row first-row">
            <div class="col-md-3">
                <a href="index.php" style="padding-left: 12px"> <img src="fas-logo.png" height="90px" width="90px" style="border-radius: 30px;"></a>
            </div>
            <div class="col-md-9  d-flex align-items-end">
                <div class="d-flex justify-content-between w-50">">
                <a href="index.php" style="margin-right: 50px; text-decoration: none; color: rgb(255,255, 255)">Home</a>
                <a href="about.php" style="margin-right: 50px; text-decoration: none; color: rgb(255, 255, 255)">About</a>
                <a href="catalog.php" style="margin-right: 50px; text-decoration: none; color: rgb(255, 255, 255)">Catalog</a>
                <a href="sales.php" style="margin-right: 50px; text-decoration: none; color: rgb(255, 255, 255)">Sales</a>
                <a href="contact.php" style="text-decoration: none; color: rgb(255, 255, 255)">Contact</a>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1>Contact Form</h1>
                        <div class="mb-3">
                            <label for="exampleFormControlInput2" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Enter your Full Name">
                          </div>
                          <div class="mb-3">
                            <label for="exampleFormControlInput3" class="form-label">Phone NUmber</label>
                            <input type="number" class="form-control" id="exampleFormControlInput3" placeholder="Enter your Phone Number">
                          </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="" placeholder="Enter your Email Address">
                          </div>
                          <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" id="description" rows="4" placeholder="Enter your description" required></textarea>
                            </div>
                            <div>
                                <button class="send_btn" type="submit">Submit</button>
                            </div>
                    </div>
                  </div>
            </div>

            <div class="col-md-6 ">
                <h1>Our LOcation on Map</h1>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7927.1252890841115!2d3.382763037490091!3d6.576746781943725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b93eeb4cb6a21%3A0x812c0ef25562e752!2sOgudu%20Mall!5e0!3m2!1sen!2sng!4v1723745662159!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        
 
        <div class="row third-row">
            <div class="col-md-4 color">
                <a href="">Facebook</a>
                <a href="">Instagram</a>
                <a href="https://wa.me/2347083037092">Whatsapp</a>
            </div>
            <div class="col-md-4 color">
                All Rights Reserved. &COPY;2024 Designed by Deborah
            </div>
            <div class="col-md-4 color">
                <p>Email: <a href="mailto:mydailyonlinehustle@gmail.com">mydailyonlinehustle@gmail.com</a></p>
                <p>Phone Number: <a href="tel+07083037092">07083037092</a></p>

            </div>


        </div>

    </div>
</body>
</html>