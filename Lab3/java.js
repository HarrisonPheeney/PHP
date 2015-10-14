
'use strict';

var FirstName = document.getElementById("fName");
var LastName = document.getElementById("lName");
var Address1 = document.getElementById("Address1");
var Address2 = document.getElementById("Address2");
var Email = document.getElementById("Email");
var CheckBox = document.getElementById("AcceptTerms");

var lblFirstName = document.getElementById("lblFName");
var lblLastName = document.getElementById("lblLName");
var lblAddress1 = document.getElementById("lblAddress1");
var lblAddress2 = document.getElementById("lblAddress2");
var lblEmail = document.getElementById("lblEmail");

FirstName.addEventListener("focus", FirstNameFocus, true);
FirstName.addEventListener("blur", FirstNameBlur, true);


LastName.addEventListener("focus", LastNameFocus, true);
LastName.addEventListener("blur", LastNameBlur, true);

Address1.addEventListener("focus", Address1Focus, true);
Address1.addEventListener("blur", Address1Blur, true);

Address2.addEventListener("focus", Address2Focus, true);
Address2.addEventListener("blur", Address2Blur, true);

Email.addEventListener("focus", EmailFocus, true);
Email.addEventListener("blur", EmailBlur, true);


document.getElementById("btnSubmit").onclick = function()
{
    validateForm();
};




function FirstNameFocus() {
    FirstName.style.backgroundColor = "yellow";
    FirstName.style.fontStyle = "italic";
    lblFirstName.style.textDecoration = "underline";



}

function FirstNameBlur() {
    FirstName.style.backgroundColor = "";
    FirstName.style.fontStyle = "normal";
    lblFirstName.style.textDecoration = "none";

}

function LastNameFocus() {
    LastName.style.backgroundColor = "yellow";
    LastName.style.fontStyle = "italic";
    lblLastName.style.textDecoration = "underline";

}

function LastNameBlur() {
    LastName.style.backgroundColor = "";
    LastName.style.fontStyle = "normal";
    lblLastName.style.textDecoration = "none";
}

function Address1Focus() {
    Address1.style.backgroundColor = "yellow";
    Address1.style.fontStyle = "italic";
    lblAddress1.style.textDecoration = "underline";

}

function Address1Blur() {
    Address1.style.backgroundColor = "";
    Address1.style.fontStyle = "normal";
    lblAddress1.style.textDecoration = "none";
}

function Address2Focus() {
    Address2.style.backgroundColor = "yellow";
    Address2.style.fontStyle = "italic";
    lblAddress2.style.textDecoration = "underline";

}

function Address2Blur() {
    Address2.style.backgroundColor = "";
    Address2.style.fontStyle = "normal";
    lblAddress2.style.textDecoration = "none";
}

function EmailFocus() {
    Email.style.backgroundColor = "yellow";
    Email.style.fontStyle = "italic";
    lblEmail.style.textDecoration = "underline";

}

function EmailBlur() {
    Email.style.backgroundColor = "";
    Email.style.fontStyle = "normal";
    lblEmail.style.textDecoration = "none";
}



function validateForm(){

    if(FirstName === "")
    {
        alert("jaja");
    }


    //FirstName.style.borderStyle = "solid";
    //FirstName.style.borderColor = "red";


    /* elseif(LastName == "")
     {
     LastName.style.borderStyle = " solid";
     LastName.style.borderColor = "red";
     }

     elseif(Address1 == "")
     {
     Address1.style.borderStyle = " solid";
     Address1.style.borderColor = "red";
     }

     elseif(Address2 == "")
     {
     Address2.style.borderStyle = " solid";
     Address2.style.borderColor = "red";
     }

     elseif(Email == "")
     {
     Email.style.borderStyle = " solid";
     Email.style.borderColor = "red";
     }*/

}









