<div class="container">
    <h1 class="fooldal"><span style="background-color: red; color: white;">A</span>utó<span style="background-color: red; color: white;">M</span>ánia</h1>
    <p class="bevezeto">Üdvözöllek az autós blog oldalamon! Itt mindent megtalálsz, ami az autózással kapcsolatos: legfrissebb autómodellek bemutatása, autós történetek és még sok más. Célom, hogy segítsek az olvasóknak jobban megérteni az autókat és azokkal kapcsolatos legújabb fejlesztéseket. Fedezd fel az autóipar legújabb trendjeit, és légy mindig naprakész az autózással kapcsolatos információkkal! Legyen szó technológiai újításokról, biztonsági kérdésekről vagy egyszerűen csak autós élményekről, itt minden autós rajongó otthonra lelhet!</p>
</div>
<p class="adstart">Cikkajánló</p>
<div class="row">
        <script>
            getData('../server/fooldal.php',stat);
            function stat (data){
                
                for(let obj of data){
                    document.querySelector(".row").innerHTML+=`
                    <a href="index.php?prog=cikkoldal.php&id=${obj.id}" class="col-xl" onclick="oldal()">
                      <div class="fade-card-main" tabIndex="0">
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
<p class="adend"></p>
<div class="cikk">
  <div class="cikkcolor">
    <div class="row cikkrow">
      <div class="col-7 cikkcol">
        <h5 class="cikkcim">Nem találtad meg a neked való cikket?</h5>
        <p class="cikkszoveg">Ne aggódj, van még belőle és kedvedre böngészheted őket!</p>
      </div>
      <div class="col-5 cikkcol">
        <button class="btn btn-outline-dark" id="cikkgomb">Mutasd a cikkeket!</button>
      </div>
    </div>
  </div>
</div>
<p class="fakeimg"></p>

<div class="row footercolumn">
  <div class="col">
    <h4 id="sor">Rólam</h4>
    <p id="rolam">Balogh Dávid vagyok, 19 éves, Kecskeméten születtem és itt élek azóta is. Mindig is imádtam az autókat. A hangjuk, a szabadság érzése az úton és az autók világa mindig izgatottá tett. Nekem az autók többek, mint csak közlekedési eszközök. Ezért döntöttem úgy, hogy összegyűjtöm ezeket a cikkeket, hogy megosszam másokkal a szenvedélyemet, az élményeimet és persze azokat az infókat, amik segíthetnek. Az autók formája, technológiája, a gyorsaság mind olyanok, amik szorosan összefonódnak velem, mintha egy izgalmas kaland részelemei lennének. Az autók világa számomra nem csak egy hobbi, hanem életem része, ami mindig tartogat új kihívásokat és boldog perceket.</p>
  </div>
</div>
<script>
  document.getElementById("cikkgomb").addEventListener("click", function () {
    localStorage.setItem("Page", "Cikk");
    window.location.href = "index.php?prog=cikkek.php";
  });
</script>