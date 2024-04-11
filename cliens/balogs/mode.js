document.addEventListener("DOMContentLoaded", function () {

    var screenWidth = window.innerWidth;
    if (screenWidth <= 575) {
        navbar.classList.remove('fixed-top');
        document.getElementById('ures').style.display = 'none';

    }
    if (screenWidth > 575) {
        navbar.classList.add('fixed-top');
        document.getElementById('ures').style.display = 'block';
    }



    const storedMode = localStorage.getItem("Mode");
    if (performance.navigation.type == 1) {
        localStorage.clear(); 
        localStorage.setItem("Page", "Home");
        localStorage.setItem("Mode", "Light");
        window.location.href = "index.php";
    }
    if (storedMode == "Dark") {
        mode();
    }

});
function home(){
    localStorage.setItem("Page", "Home");

}
function cikk(){
    localStorage.setItem("Page", "Cikk");

}
function oldal() {
    localStorage.setItem("Page", "Oldal");
}


document.getElementById("btn").addEventListener("click", function () {

    const storedValue = localStorage.getItem("Mode");
    if(storedValue == "Dark"){
        localStorage.setItem("Mode", "Light");
        mode();
    }

    else if(storedValue == "Light"){
        localStorage.setItem("Mode", "Dark");
        mode();
    }
});


window.addEventListener('resize', function() {

    var screenWidth = window.innerWidth;

    if (screenWidth <= 575) {
        navbar.classList.remove('fixed-top');
        document.getElementById('ures').style.display = 'none';

    }
    if (screenWidth > 575) {
        navbar.classList.add('fixed-top');
        document.getElementById('ures').style.display = 'block';
    }
});



function mode(){
    const storedPage = localStorage.getItem("Page");


    if(storedPage === "Home"){



            const elem = document.getElementById("btn");
            const storedValue = localStorage.getItem("Mode");
            const navbar = document.querySelector(".navbar");
            const navlink = document.querySelector(".nav-link");
            const cimhatter = document.querySelectorAll(".cimhatter");
            const leirashatter = document.querySelectorAll(".leirashatter");
            const fakeimg = document.querySelectorAll(".fakeimg");
            const cim = document.querySelectorAll(".cim");
            const leiras = document.querySelectorAll(".leiras");
            const fooldal = document.querySelector(".fooldal");
            const bevezeto = document.querySelector(".bevezeto");
            const adstart = document.querySelector(".adstart");
            const adend = document.querySelector(".adend");
            const span = document.querySelectorAll("span");
            const cikkcolor = document.querySelectorAll(".cikkcolor");
            const cikkcim = document.querySelectorAll(".cikkcim");
            const cikkszoveg = document.querySelectorAll(".cikkszoveg");
            const cikkgomb = document.querySelectorAll("#cikkgomb");

        
        if (storedValue === "Dark"){
            elem.innerHTML = "Világos mód";
            elem.classList.replace("btn-outline-dark", "btn-outline-light");
            document.querySelector("#btn").style.backgroundColor = "#333c47";
        
            document.body.style.backgroundColor = "#1E2022";

            span.forEach(span => {span.style.color = "black"});
            span.forEach(span => {span.style.backgroundColor = "yellow"});
         
        
            navbar.classList.replace("navbar-light", "navbar-dark");
            navlink.classList.replace("navbar-light", "navbar-dark");
            document.querySelector(".navbar").style.background = "linear-gradient(270deg, #626a75 0%, #333c47 100%)";
        
            document.querySelector(".footercolumn").style.background = "linear-gradient(270deg, #626a75 0%, #333c47 100%)";
            document.querySelector(".footercolumn").style.color = "whitesmoke";
            document.getElementById("sor").style.borderColor = "whitesmoke";

            cim.forEach(cim => {cim.style.color = "whitesmoke"});
            leiras.forEach(leiras => {leiras.style.color = "whitesmoke"});
            cimhatter.forEach(function(cimhatter) {cimhatter.style.backgroundColor = 'rgba(51, 60, 71, 0.85)';});
            leirashatter.forEach(function(leirashatter) {leirashatter.style.backgroundColor = 'rgba(51, 60, 71, 0.9)';});
            fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "#1E2022";});

            fooldal.style.color = "whitesmoke";
            bevezeto.style.color = "whitesmoke";
            adstart.style.color = "whitesmoke";
            adstart.style.borderColor = "#333c47";
            adend.style.borderColor = "#333c47";

            cikkcolor.forEach(function(cikkcolor) {cikkcolor.style.backgroundColor = 'rgba(51, 60, 71, 0.85)';});
            cikkcim.forEach(function(cikkcim) {cikkcim.style.color = "whitesmoke";});
            cikkszoveg.forEach(function(cikkszoveg) {cikkszoveg.style.color = "whitesmoke";});
            cikkgomb.forEach(function(cikkgomb) {cikkgomb.style.backgroundColor = 'rgba(51, 60, 71, 0.85)';});
            cikkgomb.forEach(function(cikkgomb) {cikkgomb.style.color = "whitesmoke";});
            document.getElementById("cikkgomb").classList.replace("btn-outline-dark", "btn-outline-light");


        
        }
        
        else if (storedValue === "Light"){
        
            elem.innerHTML = "Sötét mód";
            elem.classList.replace("btn-outline-light", "btn-outline-dark");
            document.querySelector("#btn").style.backgroundColor = "rgb(197, 197, 175)";
        
            document.body.style.backgroundColor = "rgb(236, 235, 225)";
            
            span.forEach(span => {span.style.color = "white"});
            span.forEach(span => {span.style.backgroundColor = "red"});         
        
            navbar.classList.replace("navbar-dark", "navbar-light");
            navlink.classList.replace("navbar-dark", "navbar-light");
            document.querySelector(".navbar").style.background = "linear-gradient(270deg, rgb(230, 230, 206) 0%, rgb(165, 165, 150) 100%)";
        
            document.querySelector(".footercolumn").style.background = "linear-gradient(270deg, rgb(230, 230, 206) 0%, rgb(165, 165, 150) 100%)";
            document.querySelector(".footercolumn").style.color = "black";
            document.getElementById("sor").style.borderColor = "black";

            cim.forEach(cim => {cim.style.color = "black"});
            leiras.forEach(leiras => {leiras.style.color = "black"});
            cimhatter.forEach(function(cimhatter) {cimhatter.style.backgroundColor = "rgba(197, 197, 175, 0.85)";});
            leirashatter.forEach(function(leirashatter) {leirashatter.style.backgroundColor = "rgba(197, 197, 175, 0.9)";});
            fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "rgb(236, 235, 225)";}); 

            fooldal.style.color = "black";
            bevezeto.style.color = "black";
            adstart.style.color = "black";
            adstart.style.borderColor = "rgb(197, 197, 175)";
            adend.style.borderColor = "rgb(197, 197, 175)";

            cikkcolor.forEach(function(cikkcolor) {cikkcolor.style.backgroundColor = "rgba(197, 197, 175, 0.85)";});
            cikkcim.forEach(function(cikkcim) {cikkcim.style.color = "black";});
            cikkszoveg.forEach(function(cikkszoveg) {cikkszoveg.style.color = "black";});
            cikkgomb.forEach(function(cikkgomb) {cikkgomb.style.backgroundColor = "rgba(197, 197, 175, 0.85)";});
            cikkgomb.forEach(function(cikkgomb) {cikkgomb.style.color = "black";});
            document.getElementById("cikkgomb").classList.replace("btn-outline-light", "btn-outline-dark");
        } 
    }


    if(storedPage === "Oldal"){ 

            const elem = document.getElementById("btn");
            const storedValue = localStorage.getItem("Mode");
            const navbar = document.querySelector(".navbar");
            const navlink = document.querySelector(".nav-link");
            const fakeimg = document.querySelectorAll(".fakeimg");
            const cikkelem = document.querySelectorAll(".cikkelem");
            const focim = document.querySelectorAll(".focim");
            const cikkcim = document.querySelectorAll(".cikkcim");
            const cikkszoveg = document.querySelectorAll(".cikkszoveg");
            const cikkvissza = document.querySelectorAll("#cikkvissza");



        if (storedValue === "Dark"){
        
            elem.innerHTML = "Világos mód";
            elem.classList.replace("btn-outline-dark", "btn-outline-light");
            document.querySelector("#btn").style.backgroundColor = "#333c47";
        
            document.body.style.backgroundColor = "#1E2022";
        
            navbar.classList.replace("navbar-light", "navbar-dark");
            navlink.classList.replace("navbar-light", "navbar-dark");
            document.querySelector(".navbar").style.background = "linear-gradient(270deg, #626a75 0%, #333c47 100%)";
        

            fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "#1E2022";});
            cikkelem.forEach(function(cikkelem) {cikkelem.style.color = "whitesmoke";});
            focim.forEach(function(focim) { focim.style.color = "whitesmoke"; });
            cikkcim.forEach(function(cikkcim) {cikkcim.style.color = "whitesmoke";});
            cikkszoveg.forEach(function(cikkszoveg) {cikkszoveg.style.color = "whitesmoke";});
            cikkvissza.forEach(function(cikkvissza) {cikkvissza.style.backgroundColor = 'rgba(51, 60, 71, 0.85)';});
            cikkvissza.forEach(function(cikkvissza) {cikkvissza.style.color = "whitesmoke";});
            document.getElementById("cikkvissza").classList.replace("btn-outline-dark", "btn-outline-light");


        
        }

        else if (storedValue === "Light"){
        
            elem.innerHTML = "Sötét mód";
            elem.classList.replace("btn-outline-light", "btn-outline-dark");
            document.querySelector("#btn").style.backgroundColor = "rgb(197, 197, 175)";
        
            document.body.style.backgroundColor = "rgb(236, 235, 225)";
        
            navbar.classList.replace("navbar-dark", "navbar-light");
            navlink.classList.replace("navbar-dark", "navbar-light");
            document.querySelector(".navbar").style.background = "linear-gradient(270deg, rgb(230, 230, 206) 0%, rgb(165, 165, 150) 100%)";
        
            fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "rgb(236, 235, 225)";});
            cikkelem.forEach(function(cikkelem) {cikkelem.style.color = "black";});
            focim.forEach(function(focim) { focim.style.color = "black"; });
            cikkcim.forEach(function(cikkcim) {cikkcim.style.color = "black";});
            cikkszoveg.forEach(function(cikkszoveg) {cikkszoveg.style.color = "black";});
            cikkvissza.forEach(function(cikkvissza) {cikkvissza.style.backgroundColor = "rgba(197, 197, 175, 0.85)";});
            cikkvissza.forEach(function(cikkvissza) {cikkvissza.style.color = "black";});
            document.getElementById("cikkvissza").classList.replace("btn-outline-light", "btn-outline-dark");




        } 
}


        if(storedPage === "Cikk"){


            const elem = document.getElementById("btn");
            const btnSzuro = document.getElementById("btnSzuro");
            const storedValue = localStorage.getItem("Mode");
            const navbar = document.querySelector(".navbar");
            const navlink = document.querySelector(".nav-link");
            const selectek = document.querySelectorAll(".form-select");
            const fakeimg = document.querySelectorAll(".fakeimg");
            const cimhatter = document.querySelectorAll(".cimhatter");
            const leirashatter = document.querySelectorAll(".leirashatter");
            const cim = document.querySelectorAll(".cim");

            const leiras = document.querySelectorAll(".leiras");
        
        
            if (storedValue === "Dark"){
            
                elem.innerHTML = "Világos mód";
                elem.classList.replace("btn-outline-dark", "btn-outline-light");
                btnSzuro.classList.replace("btn-outline-dark", "btn-outline-light");
                document.querySelector("#btn").style.backgroundColor = "#333c47";
                document.querySelector("#btnSzuro").style.backgroundColor = "#333c47";
                selectek.forEach(select => {select.style.color = "whitesmoke"});
                selectek.forEach(select => {select.style.backgroundColor = "#333c47"});
                selectek.forEach(select => {select.style.borderColor = "whitesmoke"});
            
                document.body.style.backgroundColor = "#1E2022";
            
                navbar.classList.replace("navbar-light", "navbar-dark");
                navlink.classList.replace("navbar-light", "navbar-dark");
                document.querySelector(".navbar").style.background = "linear-gradient(270deg, #626a75 0%, #333c47 100%)";
            

                cim.forEach(cim => {cim.style.color = "whitesmoke"});
                document.querySelector(".focim").style.color  = "whitesmoke";
                leiras.forEach(leiras => {leiras.style.color = "whitesmoke"});
                cimhatter.forEach(function(cimhatter) {cimhatter.style.backgroundColor = 'rgba(51, 60, 71, 0.85)';});
                leirashatter.forEach(function(leirashatter) {leirashatter.style.backgroundColor = 'rgba(51, 60, 71, 0.9)';});
                fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "#1E2022";});

            
            }

            else if (storedValue === "Light"){
            
                elem.innerHTML = "Sötét mód";
                elem.classList.replace("btn-outline-light", "btn-outline-dark");
                btnSzuro.classList.replace("btn-outline-light", "btn-outline-dark");
                document.querySelector("#btn").style.backgroundColor = "rgb(197, 197, 175)";
                document.querySelector("#btnSzuro").style.backgroundColor = "rgb(197, 197, 175)";
                selectek.forEach(select => {select.style.color = "black"});
                selectek.forEach(select => {select.style.backgroundColor = "rgb(197, 197, 175)"});
                selectek.forEach(select => {select.style.borderColor = "black"});
            
                document.body.style.backgroundColor = "rgb(236, 235, 225)";
            
                navbar.classList.replace("navbar-dark", "navbar-light");
                navlink.classList.replace("navbar-dark", "navbar-light");
                document.querySelector(".navbar").style.background = "linear-gradient(270deg, rgb(230, 230, 206) 0%, rgb(165, 165, 150) 100%)";


                cim.forEach(cim => {cim.style.color = "black"});
                document.querySelector(".focim").style.color  = "black";
                leiras.forEach(leiras => {leiras.style.color = "black"});
                cimhatter.forEach(function(cimhatter) {cimhatter.style.backgroundColor = "rgba(197, 197, 175, 0.85)";});
                leirashatter.forEach(function(leirashatter) {leirashatter.style.backgroundColor = "rgba(197, 197, 175, 0.9)";});
                fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "rgb(236, 235, 225)";}); 
            } 
    }   
}