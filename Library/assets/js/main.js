function givei() {
    //Gathering Data
    var x = document.getElementById("opt").selectedIndex;
    var y = document.getElementById("opt").options;
    var f = y[x].index;
    console.log(f);
    var text;

    if (f == 0) {
        text = "<input style='text-align: center;' class='form-control' placeholder='User ID' size='25' type='number' id='fn' max='9999999'  name='inputss'>"
    }
    if (f == 1) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Name' size='25' type='text' id='fn' maxlength='200' name='inputss'>"
    }
    if (f == 2) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Phone' size='25' type='text' id='fn' maxlength='13' name='inputss'>"
    }
    if (f == 3) {
        text = "<input style='text-align: center;' class='form-control' placeholder='E-Mail' size='25' type='text' id='fn' maxlength='100' name='inputss'>"
    }
    if (f == 4) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Address' size='25' type='text' id='fn' maxlength='500' name='inputss'>"

    }
    if (f == 5) {
        text = "<br>" + "<div style='text-align: center;' class='d-flex justify-content-center div-to-align' >" + "<select style='text-align: center' class='form-select text-center' aria-label='Default select example' name='inputss'>" +
        "<option selected value='Paid'>Paid</option>" +
        "<option value='Not Paid'>Not Paid</option>" +
        "<option value='Management'>Management</option>" +

         

        "</select>" +
        "</div>"
    }
    document.getElementById("resultshown").innerHTML = text;
}

function giveopt() {
    //Gathering Data
    var x = document.getElementById("opt").selectedIndex;
    var y = document.getElementById("opt").options;
    var f = y[x].index;
    console.log(f);
    var text;

    if (f == 0) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Password' size='25' type='password' id='fn' maxlength='10'  name='val1'>"
    }
    if (f == 1) {
        text = "<input style='text-align: center;' class='form-control' placeholder='First Name' size='25' type='text' id='fn' maxlength='100' name='val2'>"
    }
    if (f == 2) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Last Name' size='25' type='text' id='fn' maxlength='100' name='val3'>"
    }
    if (f == 3) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Phone' size='25' type='text' id='fn' maxlength='13' name='val4'>"
    }
    if (f == 4) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Email' size='25' type='text' id='fn' maxlength='100' name='val5'>"

    }
    if (f == 5) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Address' size='25' type='text' id='fn' maxlength='500' name='val6'>"
    }
    document.getElementById("resultshown").innerHTML = text;
}
function giveinputbox() {
    //Gathering Data
    var x = document.getElementById("opt").selectedIndex;
    var y = document.getElementById("opt").options;
    var f = y[x].index;
    var text;

    if (f == 0) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Book ID' size='25' type='number' id='fn' max='9999999' name='inputss'>"
    }
    if (f == 1) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Book Name' size='25' type='text' id='fn' maxlength='100' name='inputss' >"
    }
    if (f == 2) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Book Author' size='25' type='text' id='fn' maxlength='100' name='inputss'>"
    }
    if (f == 3) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Book Publisher' size='25' type='text' id='fn' maxlength='100' name='inputss'>"
    }
    if (f == 4) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Book Genre' size='25' type='text' id='fn' maxlength='100' name='inputss'>"
    }
    if (f == 5) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Book Section' size='25' type='text' id='fn' maxlength='3' name='inputss'>"

    }
    if (f == 6) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Book Price' size='25' type='number' id='fn' max='9999999' name='inputss'>"
    }
    if (f == 7) {
        text = "<br>" + "<div style='text-align: center;' class='d-flex justify-content-center div-to-align' >" + "<select style='text-align: center' class='form-select text-center' aria-label='Default select example' name='inputss'>" +
            "<option selected value='Available'>Available</option>" +
            "<option value='Not Available'>Not Available</option>" +
             

            "</select>" +
            "</div>"
    }
    document.getElementById("resultshown").innerHTML = text;
}
function giveinputshowna() {
    //Gathering Data
 
    var x = document.getElementById("opt").selectedIndex;
    var y = document.getElementById("opt").options;
    var f = y[x].index;
    var text;

    if (f == 0) {
        text = "<input style='text-align: center;' class='form-control' placeholder='Book ID' size='25' type='number' id='fn' max='9999999' name='inputss'>";
    }
    if (f == 1) {
        text = "<input style='text-align: center;' class='form-control' placeholder='User ID' size='25' type='number' id='fn' max='9999999' name='inputss'>";
    }
    
    document.getElementById("resultshown").innerHTML = text;
}


var y = setInterval(function () {
    document.getElementById("countdown").innerHTML = ((Math.floor(((new Date((((new Date()).getMonth() + 1).toString()) + " " + (((new Date()).getDate()).toString()) + ", " + ((((new Date()).getFullYear()).toString()).toString()) + " " + "23:59:59").getTime()) - (new Date().getTime())) / (1000 * 60 * 60 * 24)).toString())) + (" Days ") + (Math.floor(((new Date((((new Date()).getMonth() + 1).toString()) + " " + (((new Date()).getDate()).toString()) + ", " + ((((new Date()).getFullYear()).toString()).toString()) + " " + "23:59:59").getTime()) - (new Date().getTime())) % ((1000 * 60 * 60 * 24)) / (1000 * 60 * 60)).toString()) + (" Hours ") + (Math.floor(((new Date((((new Date()).getMonth() + 1).toString()) + " " + (((new Date()).getDate()).toString()) + ", " + ((((new Date()).getFullYear()).toString()).toString()) + " " + "23:59:59").getTime()) - (new Date().getTime())) % ((1000 * 60 * 60)) / (1000 * 60)).toString()) + (" Minutes ") + (Math.floor(((new Date((((new Date()).getMonth() + 1).toString()) + " " + (((new Date()).getDate()).toString()) + ", " + ((((new Date()).getFullYear()).toString()).toString()) + " " + "23:59:59").getTime()) - (new Date().getTime())) % ((1000 * 60)) / (1000)).toString()) + (" Seconds");


    if (t < 0) {
        clearInterval(y);
        document.getElementById("countdown").innerHTML = "EXPIRED";
    }
}, 1);


