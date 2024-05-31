// navigationbar effect when scrolling down and up
window.onscroll = function() { scrollFunction() };

function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("navbarlarge").style.padding = "20px 10px";
        document.getElementById("logolarge").style.fontSize = "25px";

        document.getElementById("navbarsmall").style.padding = "20px 10px";
        document.getElementById("logosmall").style.fontSize = "25px";
    } else {
        document.getElementById("navbarlarge").style.padding = "50px 20px";
        document.getElementById("logolarge").style.fontSize = "35px";

        document.getElementById("navbarsmall").style.padding = "50px 20px";
        document.getElementById("logosmall").style.fontSize = "35px";
    }
}

// open side navigation and close
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

// change view from signup to signin
function changeView() {
    var signUpBox = document.getElementById("signUpBox");
    var signInBox = document.getElementById("signInBox");

    signUpBox.classList.toggle("d-none");
    signInBox.classList.toggle("d-none");

}

function changeclasspassword1() {
    var pbtn1 = document.getElementById("pbtn1");
    var password = document.getElementById("password");

    if (pbtn1.innerHTML == 'See <i class="bi bi-eye-slash-fill"></i>') {
        password.type = "text";
        pbtn1.innerHTML = "Hide <i class='bi bi-eye-fill'></i>";
    } else {
        password.type = "password";
        pbtn1.innerHTML = "See <i class='bi bi-eye-slash-fill'></i>";
    }

}

function changeclasspassword2() {

    var pbtn2 = document.getElementById("pbtn2");
    var rpassword = document.getElementById("rpassword");

    if (pbtn2.innerHTML == 'See <i class="bi bi-eye-slash-fill"></i>') {
        rpassword.type = "text";
        pbtn2.innerHTML = "Hide <i class='bi bi-eye-fill'></i>";
    } else {
        rpassword.type = "password";
        pbtn2.innerHTML = "See <i class='bi bi-eye-slash-fill'></i>";
    }

}

function changeclasspassword3() {

    var pbtn3 = document.getElementById("pbtn3");
    var spassword = document.getElementById("spassword");

    if (pbtn3.innerHTML == 'See <i class="bi bi-eye-slash-fill"></i>') {
        spassword.type = "text";
        pbtn3.innerHTML = "Hide <i class='bi bi-eye-fill'></i>";
    } else {
        spassword.type = "password";
        pbtn3.innerHTML = "See <i class='bi bi-eye-slash-fill'></i>";
    }

}

// function to toggle grid layout to table layout in purchase history page
function changeViewPurchaseHistory() {
    var gridview = document.getElementById("gridview");
    var tableview = document.getElementById("tableview");
    var tablebtn = document.getElementById("tablebtn");

    gridview.classList.toggle("d-none");
    tableview.classList.toggle("d-none");
    if (tablebtn.innerHTML == '<i class="bi bi-hdd-stack"></i> Switch to table view') {
        tablebtn.innerHTML = "<i class='bi bi-grid'></i> Switch to grid view";
    } else {
        tablebtn.innerHTML = "<i class='bi bi-hdd-stack'></i> Switch to table view";
    }

}

// singleproductview

function imageZoom(imgID, resultID) {
    var img, lens, result, cx, cy;
    img = document.getElementById(imgID);
    result = document.getElementById(resultID);
    /*create lens:*/
    lens = document.createElement("DIV");
    lens.setAttribute("class", "img-zoom-lens");
    /*insert lens:*/
    img.parentElement.insertBefore(lens, img);
    /*calculate the ratio between result DIV and lens:*/
    cx = result.offsetWidth / lens.offsetWidth;
    cy = result.offsetHeight / lens.offsetHeight;
    /*set background properties for the result DIV:*/
    result.style.backgroundImage = "url('" + img.src + "')";
    result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
    /*execute a function when someone moves the cursor over the image, or the lens:*/
    lens.addEventListener("mousemove", moveLens);
    img.addEventListener("mousemove", moveLens);
    /*and also for touch screens:*/
    lens.addEventListener("touchmove", moveLens);
    img.addEventListener("touchmove", moveLens);

    function moveLens(e) {
        var pos, x, y;
        /*prevent any other actions that may occur when moving over the image:*/
        e.preventDefault();
        /*get the cursor's x and y positions:*/
        pos = getCursorPos(e);
        /*calculate the position of the lens:*/
        x = pos.x - (lens.offsetWidth / 2);
        y = pos.y - (lens.offsetHeight / 2);
        /*prevent the lens from being positioned outside the image:*/
        if (x > img.width - lens.offsetWidth) { x = img.width - lens.offsetWidth; }
        if (x < 0) { x = 0; }
        if (y > img.height - lens.offsetHeight) { y = img.height - lens.offsetHeight; }
        if (y < 0) { y = 0; }
        /*set the position of the lens:*/
        lens.style.left = x + "px";
        lens.style.top = y + "px";
        /*display what the lens "sees":*/
        result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
    }

    function getCursorPos(e) {
        var a, x = 0,
            y = 0;
        e = e || window.event;
        /*get the x and y positions of the image:*/
        a = img.getBoundingClientRect();
        /*calculate the cursor's x and y coordinates, relative to the image:*/
        x = e.pageX - a.left;
        y = e.pageY - a.top;
        /*consider any page scrolling:*/
        x = x - window.pageXOffset;
        y = y - window.pageYOffset;
        return { x: x, y: y };
    }
}

imageZoom("myimage", "myresult");