<div class="container"></div>


<div class="o-block-cover alignfull is-light" style="min-height:75vh"><span aria-hidden="true" class="o-block-cover__background has-background-dim-0 has-background-dim"></span><img class="o-block-cover__image-background o-image-11" alt="" src="https://i.ibb.co/LRPp5sJ/1711801022978.jpg" style="object-position:0% 50%" data-object-fit="cover" data-object-position="0% 50%"/><div class="o-block-cover__inner-container">
<div class="o-block-jetpack-layout-grid alignfull column1-desktop-grid__span-4   cim">
<div class="">
<h2 class="o-block-heading" id="text-on-img" style="font-size:48px;font-style:normal;font-weight:500">Tuti ajánlatok <br>Tuti árakon</h2>



<p>Széles választékú, egy helyen megtalálható, különböző és <br>könnyen megfizethető ajánlatok.</p>



<div class="o-block-buttons">
<div class="o-block-button is-style-outline"><a class="o-block-button__link o-element-button" style="border-radius:0px " href="index.php?prog=bongesz.php">Vásárolj most!</a></div>
</div>
</div>
</div>
</div></div>



<div class="o-block-group" style="padding-top:5vh;padding-bottom:5vh">
<h2 class="o-block-heading has-text-align-center " id="smolcimtxt" style="line-height:1.5">Fejlessze ki egészségét és formáját több mozgással, a mi testmozgást erősítő eszközeinkkel, amelyek segítségével könnyedén elérheti céljait és élhet egy aktív életmódot akár saját otthonában!</h2>
</div>



<hr class="o-block-separator has-text-color has-css-opacity has-background alignfull is-style-wide" style="background-color:#e5e5e5;color:#e5e5e5"/>



<div class="o-block-group alignwide" style="padding-top:5vh;padding-bottom:5vh">
<div class="o-block-columns">
<div class="o-block-column fokepdiv">
<figure class="o-block-image size-large" onclick="showdata('4')"><img src="https://i.ibb.co/N3cch6d/c-m-k-p-4.jpg" alt="" id="fookep4"class="o-image-19"/></figure>
</div>



<div class="o-block-column">
<h2 class="o-block-heading" id="fotermeknev" style="font-style:normal;font-weight:500">termék név</h2>


<p class="">Ár(Ft):</p>



<h2 class="o-block-heading has-medium-font-size" id="fophpar">"ár"</h2>







<div style="height:40px" aria-hidden="true" class="o-block-spacer"></div>


<p class="">Állapot:</p>

<p id="allapot"><strong>még leírás</strong></p>





<p><strong>Amit tudni lehet róla:</strong></p>



<p class="leiras"  id="leiras">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
</div>
</div>
</div>



<hr class="o-block-separator has-text-color has-css-opacity has-background alignfull is-style-wide" style="background-color:#e5e5e5;color:#e5e5e5"/>



<div class="o-block-group" style="padding-top:6vh;padding-bottom:6vh">
<h2 class="o-block-heading has-text-align-center has-large-font-size" id="my-all-time-favourite-scent-it-smells-divine-and-lasts-all-day-a-true-and-beautiful-rose-fragrance" style="line-height:1.5"><em>“A legjobb hely vásárolni, mindig visszatérek a legjobb ajánlatokért!”</em></h2>



<p class="has-text-align-center ">egy kommentelő</p>
</div>


<div class="o-block-group alignfull  has-foreground-background-color has-text-color has-background has-link-color" style="padding-top:6vh;padding-bottom:6vh">
<div class="o-block-jetpack-layout-grid alignfull  ">
<div class="">
<h5 class="o-block-heading" id="join-the-mailing-list"><strong>Csatlakoztasd az emailed!</strong></h5>



<p class="">Jelentkezz email-es rendszeres értesítőnikre! Ne hogy lemaradj a legújjab ajánlatokról!</p>


</div>

<script>
        console.log("data");

  getData('../server/fooldalsql.php', renderItem);
  function renderItem(data){
    console.log(data);

    document.getElementById("allapot").innerHTML=``;
    document.getElementById("fotermeknev").innerHTML=``;
    document.getElementById("fophpar").innerHTML=``;
    document.getElementById("leiras").innerHTML=``;
    document.getElementById("fookep4").src=``;

    for(let obj of data){
    document.getElementById("fotermeknev").innerHTML+=`${obj.name}`
    document.getElementById("allapot").innerHTML+=`${obj.state}`
    document.getElementById("fophpar").innerHTML+=`${obj.price}Ft`
    document.getElementById("leiras").innerHTML+=`${obj.descr}`
    document.getElementById("fookep4").src=`${obj.mainImg}`
    }
  }
  function showdata(id){
    console.log(id)
location.href="index.php?prog=termek.php&id="+id;
  }
  </script>
