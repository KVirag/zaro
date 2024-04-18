
<div class="main">
<div class="o-block-group alignwide b-termek szurok" style="padding-top:5vh;padding-bottom:5vh">
<div class=" o-block-columns ">
  
<div class="o-block-column">
  <div class="elem b-hely">
        <select class="form-select" id="hely">
          <option value="0">Hely</option>
        </select>
      </div>
      
</div>
<div class="o-block-column">
  <div class="elem b-kat">
        <select class="form-select" id="kategoria">
          <option value="0">Válassz egy kategóriát!</option>
        </select>
      </div>
      </div>
      
      <div class="o-block-column">
      <div class="elem b-ar">
        <h3>ár:</h3> <p id="ar" onclick="ar()">csökkenő</p>
      </div>
      </div>

      <div class="o-block-column">
      <div class="elem b-ido">
      <h3>feltöltés ideje:</h3> <p id="ido" onclick="ido()">legújjabb</p>
      </div>
      </div>
      <div class="o-block-column">
      <div class="elem b-ok">
      <button class="btn btn-outline-dark w-100" id="btnSzuro" >Alkalmaz</button>
      </div></div>
    </div> <!-- szűrés kategóriára, időre, hely, árra -->

</div>
</div>
<div class="b-termekek" id="b-termek-sorok">   <!-- címkép, idő, leírás, kategória, ár -->


</div>
<script>
function ar(){
  let ara =document.getElementById("ar").innerHTML
  
if(ara =="csökkenő"){
document.getElementById("ar").innerHTML="növekvő"
}
if(ara =="növekvő"){
  document.getElementById("ar").innerHTML="csökkenő"
}
}
function ido(){
  
  let idoi =document.getElementById("ido").innerHTML
if(idoi =="legújjabb"){
  document.getElementById("ido").innerHTML="legrégibb"
}
if(idoi =="legrégibb"){
  document.getElementById("ido").innerHTML="legújjabb"
}
}

  document.getElementById("btnSzuro").addEventListener("click", function () {

let kat = document.getElementById("kategoria").value;
let hely = document.getElementById("hely").value;
let idov = document.getElementById("ido").innerHTML;
let arv = document.getElementById("ar").innerHTML;
let ar;let ido;
console.log(kat, hely)
if(arv =="csökkenő"){
ar="DESC"
}

if(arv =="növekvő"){
ar="ASC"
}
if(idov =="legújjabb"){
ido="DESC"
}
if(idov =="legrégibb"){
ido="ASC"
}
console.log(idov+", "+arv)
console.log(ido+", "+ar)
getData(`../server/bongeszsql.php?kat=${kat}&hely=${hely}&iar=${ar}&iido=${ido}`, kigyujt);
function kigyujt (data){

    document.getElementById("b-termek-sorok").innerHTML="";
    
    for(let obj of data){
        document.getElementById("b-termek-sorok").innerHTML+=`
        <div class='o-block-group alignwide" style="padding-top:5vh;padding-bsottom:5vh'>
<div class="o-block-columns" id="">

<div class="o-block-column fokepdiv">

<figure class="o-block-image size-large" onclick="showdata('${obj.psid}')"><img src="${obj.mainImg}" alt="" id="fookep4"class="o-image-19"/></figure>
</div>



<div class="o-block-column">
<h4 class="o-block-heading" id="fotermeknev" style="font-style:normal;font-weight:500">${obj.pname}</h4>
<p class="">${obj.price}Ft</p>
<div style="height:40px" aria-hidden="true" class="o-block-spacer"></div>
<p class="">${obj.state}:</p>
<p id="allapot"><strong>${obj.descr}</strong></p>
<p><strong>feltöltés ideje:</strong></p>
<p class="leiras"  id="leiras">${obj.time}</p>

</div>
</div>


</div>


          `
    }
}
});

getData('../server/hely.php', renderHely);
  function renderHely(data){
    for(let obj of data){
    document.getElementById("hely").innerHTML+=`
        <option>${obj.adress}</option>
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