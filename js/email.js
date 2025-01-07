function sendEmail() {
    Email.send({
/*         SecureToken: '58085f5c-76d1-4604-9b28-2d5f9e3c9969',
 */         Host: "smtp.elasticemail.com",
        Username: "dina.greta.2024@gmail.com",
        Password: "64D65CA512AD32BD6142E4AB8ED002614BA8",
        To: "dina.greta.2024@gmail.com",
        From: document.getElementById("email").value,
        Subject: "New contact message",
        Body: "First name : " + document.getElementById("fname").value
            + "<br> Last name : " + document.getElementById("lname").value
            + "<br> Email : " + document.getElementById("email").value
            + "<br> Phone Number : " + document.getElementById("phoneNumber").value
            + "<br> Content : " + document.getElementById("contactMsg").value
    }).then(
        message => alert("Your message has been sent successfully.")
    );
}