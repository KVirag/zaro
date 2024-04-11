<div class="container">
  <script>
    getData('../server/cikkoldal.php' + window.location.search, stat);

    function stat(data) {
      let cikkek = document.createElement("div");
      cikkek.id = "cikkek";
      let container = document.querySelector(".container");
      container.appendChild(cikkek);

      for (let obj of data) {
        document.querySelector("#cikkek").innerHTML += `
                  <h3 class="focim">${obj.cim}</h3>
                  <p class="fakeimg" style="height: 60px"></p>
                  <p class="cikkelem">${obj.cikk1}</p>
                  <p class="fakeimg"></p>
                  <img src="${obj.kep1}" class="img" alt="">
                  <p class="fakeimg"></p>
                  <p class="cikkelem">${obj.cikk2}</p>
                  <p class="fakeimg"></p>
                  <img src="${obj.kep2}" class="img" alt="">
                  <p class="fakeimg"></p>
                  <p class="cikkelem">${obj.cikk3}</p>
                  <p class="fakeimg"></p>
                  <img src="${obj.kep3}" class="img" alt="">
                  <p class="fakeimg"></p>
                  </div>
                  `
      }
      const storedMode = localStorage.getItem("Mode");
      const cimhatter = document.querySelectorAll(".cimhatter");
      const leirashatter = document.querySelectorAll(".leirashatter");
      const fakeimg = document.querySelectorAll(".fakeimg");
      const cim = document.querySelectorAll(".cim");
      const leiras = document.querySelectorAll(".leiras");
      const cikkelem = document.querySelectorAll(".cikkelem");
      const focim = document.querySelectorAll(".focim");



      document.getElementById("cikkvissza").addEventListener("click", function () {
        localStorage.setItem("Page", "Cikk");
        window.location.href = "index.php?prog=cikkek.php";
      });


      if (storedMode === "Dark") {

        cim.forEach(cim => { cim.style.color = "whitesmoke" });
        leiras.forEach(leiras => { leiras.style.color = "whitesmoke" });
        cimhatter.forEach(function(cimhatter) { cimhatter.style.backgroundColor = 'rgba(51, 60, 71, 0.85)'; });
        leirashatter.forEach(function(leirashatter) { leirashatter.style.backgroundColor = 'rgba(51, 60, 71, 0.9)'; });
        fakeimg.forEach(function(fakeimg) { fakeimg.style.backgroundColor = "#1E2022"; });
        cikkelem.forEach(function(cikkelem) { cikkelem.style.color = "whitesmoke"; });
        focim.forEach(function(focim) { focim.style.color = "whitesmoke"; })
      } 


      else if (storedMode === "Light") {

        cim.forEach(cim => { cim.style.color = "black" });
        leiras.forEach(leiras => { leiras.style.color = "black" });
        cimhatter.forEach(function(cimhatter) { cimhatter.style.backgroundColor = "rgba(197, 197, 175, 0.85)"; });
        leirashatter.forEach(function(leirashatter) { leirashatter.style.backgroundColor = "rgba(197, 197, 175, 0.9)"; });
        fakeimg.forEach(function(fakeimg) { fakeimg.style.backgroundColor = "rgb(236, 235, 225)"; });
        cikkelem.forEach(function(cikkelem) { cikkelem.style.color = "black"; });
        focim.forEach(function(focim) { focim.style.color = "black"; });
      }
    }
  </script>

</div>
<div style="margin: auto; width: 70%;">
  <div class="row">
    <div class="col-9">
      <p class="cikkszoveg">A cikk végére értél! Olvasnál még?</p>
    </div>
    <div class="col-3 cikkcol">
      <button class="btn btn-outline-dark" id="cikkvissza">Mutass még cikkeket!</button>
    </div>
  </div>
</div>
<p class="fakeimg"></p>
