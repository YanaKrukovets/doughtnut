function send() {
    var emailTo = "example@fd.com",
        emailSub = "Волшебные Пончики",
        name = document.getElementById("uname").value,
        email = document.getElementById("email").value
        emailBody = "%0D%0A%0D%0AХочу на мастер-класс!%0D%0A%0D%0A" + name + "%0D%0A%0D%0Aemail: " + email + "%0D%0A%0D%0AКомментарии " + document.getElementById("comment").value; 

    if (email && name && /[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/.test(email)) {
        location.href = "mailto:" + emailTo + "?subject=" + emailSub + "&body=" + emailBody; 
    }
}