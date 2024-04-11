<div class="container"> 
  <h2 class="focim">Cikkek tárháza</h2>
    <div class="row-md d-flex justify-content-end szuro">
      <div class="col-2.5 elem">
        <select class="form-select" id="marka">
          <option value="0">Válassz egy márkát!</option>
        </select>
      </div>
      <div class="col-2.5 elem">
        <select class="form-select" id="cikktipus">
          <option value="0">Válassz egy cikktípust!</option>
        </select>
      </div>
      <div class="col-1 elem">
        <button class="btn btn-outline-dark" id="btnSzuro" style="width: 100%">Alkalmaz</button>
      </div>
      </div>
    </div>
      <p class="fakeimg" style="height: 20px"></p>
  <script>
  getData('../server/marka.php', renderMarka);
  function renderMarka(data){
    for(let obj of data){
    document.getElementById("marka").innerHTML+=`
        <option>${obj.marka}</option>
      `
    }
  }

  getData('../server/cikktipus.php', renderTipus);
  function renderTipus(data){
    for(let obj of data){
    document.getElementById("cikktipus").innerHTML+=`
        <option>${obj.cikktipus}</option>
      `
    }
  }

  document.getElementById("btnSzuro").addEventListener("click", function () {

    let marka = document.getElementById("marka").value;
    let cikktipus = document.getElementById("cikktipus").value;

    getData(`../server/szurtAdat.php?marka=${marka}&cikktipus=${cikktipus}`, stat);
    function stat (data){

        let elem = document.getElementById("cikkek");
        elem.parentNode.removeChild(elem);
        let cikkek = document.createElement("div");
        cikkek.id = "cikkek";
        let container = document.querySelector(".container");
        container.appendChild(cikkek);


        for(let obj of data){
            document.querySelector("#cikkek").innerHTML+=`
            <a href="index.php?prog=cikkoldal.php&id=${obj.id}" onclick="oldal()">
              <div class="fade-card" tabIndex="0">
                  <div class="fade-card-front" style="background-image: url('${obj.borito}');">
                    <div class="leirashatter">
                      <h5 class="leiras">${obj.roviden}</h5>
                    </div>
                  </div>

                  <div class="fade-card-back" style="background-image: url('${obj.borito}');">
                    <div class="cimhatter">
                      <h1 class="cim">${obj.cim}</h1>
                    </div>
                  </div>
                </div>
                </a>
                <p class="fakeimg"></p>
              `
        }
        const storedMode = localStorage.getItem("Mode");
        const cimhatter = document.querySelectorAll(".cimhatter");
        const leirashatter = document.querySelectorAll(".leirashatter");
        const fakeimg = document.querySelectorAll(".fakeimg");
        const cim = document.querySelectorAll(".cim");
        const leiras = document.querySelectorAll(".leiras");

        if(storedMode === "Dark"){

          cim.forEach(cim => {cim.style.color = "whitesmoke"});
          leiras.forEach(leiras => {leiras.style.color = "whitesmoke"});
          cimhatter.forEach(function(cimhatter) {cimhatter.style.backgroundColor = 'rgba(51, 60, 71, 0.85)';});
          leirashatter.forEach(function(leirashatter) {leirashatter.style.backgroundColor = 'rgba(51, 60, 71, 0.9)';});
          fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "#1E2022";});
        }
        else if(storedMode === "Light"){

          cim.forEach(cim => {cim.style.color = "black"});
          leiras.forEach(leiras => {leiras.style.color = "black"});
          cimhatter.forEach(function(cimhatter) {cimhatter.style.backgroundColor = "rgba(197, 197, 175, 0.85)";});
          leirashatter.forEach(function(leirashatter) {leirashatter.style.backgroundColor = "rgba(197, 197, 175, 0.9)";});
          fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "rgb(236, 235, 225)";});
        }
    }
  });

  getData('../server/cikkek.php',stat);
    function stat (data){

      let cikkek = document.createElement("div");
      cikkek.id = "cikkek";
      let container = document.querySelector(".container");
      container.appendChild(cikkek);

        for(let obj of data){
            document.querySelector("#cikkek").innerHTML+=`
            <a href="index.php?prog=cikkoldal.php&id=${obj.id}" onclick="oldal()">
              <div class="fade-card" tabIndex="0">
                  <div class="fade-card-front" style="background-image: url('${obj.borito}');">
                    <div class="leirashatter">
                      <h5 class="leiras">${obj.roviden}</h5>
                    </div>
                  </div>

                  <div class="fade-card-back" style="background-image: url('${obj.borito}');">
                    <div class="cimhatter">
                      <h1 class="cim">${obj.cim}</h1>
                    </div>
                  </div>
                </div>
                </a>
                <p class="fakeimg"></p>

            `
        }
        
        const storedMode = localStorage.getItem("Mode");
        const cimhatter = document.querySelectorAll(".cimhatter");
        const leirashatter = document.querySelectorAll(".leirashatter");
        const fakeimg = document.querySelectorAll(".fakeimg");
        const cim = document.querySelectorAll(".cim");
        const leiras = document.querySelectorAll(".leiras");

        if(storedMode === "Dark"){

          cim.forEach(cim => {cim.style.color = "whitesmoke"});
          leiras.forEach(leiras => {leiras.style.color = "whitesmoke"});
          cimhatter.forEach(function(cimhatter) {cimhatter.style.backgroundColor = 'rgba(51, 60, 71, 0.85)';});
          leirashatter.forEach(function(leirashatter) {leirashatter.style.backgroundColor = 'rgba(51, 60, 71, 0.9)';});
          fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "#1E2022";});
        }
        else if(storedMode === "Light"){

          cim.forEach(cim => {cim.style.color = "black"});
          leiras.forEach(leiras => {leiras.style.color = "black"});
          cimhatter.forEach(function(cimhatter) {cimhatter.style.backgroundColor = "rgba(197, 197, 175, 0.85)";});
          leirashatter.forEach(function(leirashatter) {leirashatter.style.backgroundColor = "rgba(197, 197, 175, 0.9)";});
          fakeimg.forEach(function(fakeimg) {fakeimg.style.backgroundColor = "rgb(236, 235, 225)";}); 
        }

    }


</script>
</div>
</body>
</html>
