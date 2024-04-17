<div class="container">
<div class="o-block-group alignwide" style="padding-top:5vh;padding-bottom:5vh">
<div class=" o-block-columns b-termek w-100">
<div class="szurok">
  <div class="elem b-hely">
        <select class="form-select" id="hely">
          <option value="0">Hely</option>
        </select>
      </div>
  <div class="elem b-kat">
        <select class="form-select" id="kategoria">
          <option value="0">Válassz egy kategóriát!</option>
        </select>
      </div>
      
      <div class="elem b-ar">
        <h3>ár:</h3> <p id="ar" onclick="ar(this)">csökkenő</p>
      </div>
      <div class="elem b-ido">
      <h3>feltöltés ideje:</h3> <p id="ido" onclick="ido(this)">legújjabb</p>
      </div>
      <div class="elem b-ok">
      <button class="btn btn-outline-dark" id="btnSzuro" >Alkalmaz</button>
      </div>
    </div> <!-- szűrés kategóriára, időre, hely, árra -->
<div class="b-termekek">   <!-- címkép, idő, leírás, kategória, ár -->

<div class="o-block-group alignwide" style="padding-top:5vh;padding-bottom:5vh">
<div class="o-block-columns">
<div class="o-block-column fokepdiv">

</div>



<div class="o-block-column">
</div>
</div>


</div>
</div>
</div>
</div>
</div>
<script>


  document.getElementById("btnSzuro").addEventListener("click", function () {

let kat = document.getElementById("kategoria").value;
let hely = document.getElementById("hely").value;
let idov = document.getElementById("ido").innerHTML;
let arv = document.getElementById("ar").innerHTML;
let ar;let ido;
if(arv =="csökkenő"){
ar="DESC"
}
if(idov =="legújjabb"){
ido="ASC"
}
console.log(idov+", "+arv)
console.log(ido+", "+ar)
getData(`../server/szurtAdat.php?iido=${ido}&kat=${kat}&hely=${hely}&iar=${ar}`, kigyujt);
function kigyujt (data){

    let elem = document.getElementById("cikkek");
    elem.parentNode.removeChild(elem);
    let cikkek = document.createElement("div");
    cikkek.id = "cikkek";
    let container = document.querySelector(".container");
    container.appendChild(cikkek);

    <figure class="o-block-image size-large" onclick="showdata('{$psid}')"><img src="{$mainImg}" alt="" id="fookep4"class="o-image-19"/></figure>
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
}
});

getData('../server/hely.php', renderHely);
  function renderHely(data){
    for(let obj of data){
    document.getElementById("hely").innerHTML+=`
        <option>${obj.state}</option>
      `
    }
  }
  getData('../server/kat.php', renderKat);
  function renderKat(data){
    for(let obj of data){
    document.getElementById("kategoria").innerHTML+=`
        <option>${obj.name}</option>
      `
    }
  }
   
//visz a terméknek az oldalára
  function showdata(id){
    console.log(id)
location.href="index.php?prog=termek.php&id="+id;
  }
</script>