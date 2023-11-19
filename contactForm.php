<html lang="en">
<head>
    
    <title>Contact Us form</title>
    <meta http-equiv="Content-Type" content="text/html;
    charset=UTF-8">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 50px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

label {
    display: block;
    margin-bottom: 8px;
}

input,
textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 16px;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.row {      
            display: -ms-flexbox; 
            display: flex;
            -ms-flex-wrap: wrap; 
            flex-wrap: wrap;
        }

        .side {
            -ms-flex: 50%; 
            flex: 50%;
            background-color=  #f1f1f1 ;
            padding: 50px;
        }
        .fakeimg {
          background-color:plum;
          width: 100%;
          padding: 20px;
         }
         
    </style>
</head>
<body>


    <div class="row">
    <div class="side">
   
  
        <h2>Contact Me</h2>
    
        <div class="fakeimg" style="height:20px;">Let's talk</div>
        <p>017********</p>
        <div class="fakeimg" style="height:20px;">Email: tasnimza960@gmail.com</div>
        <div class="fakeimg" style="height:20px;">Address: Dhaka,Bangladesh</div>
    </div>
    <div class="main"> 

<div class="container">
    <h2>Send us a massage</h2>
   

    <form id="contactForm">
        <label for="fname">Fast Name:</label>
        <input type="text" id="fname" name="fname" required>
        <label for="lname"> Last Name:</label>
        <input type="text" id="lname" name="lname" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="pNumber">Phone number:</label>
        <input type="pNumber" id="pNumber" name="pNumber" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="button" onclick="submitForm()">Submit</button>
    </form>

</div>
<script src="script.js"></script>
</body>
</html>
