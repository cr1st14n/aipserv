window.onload = function () {
  document.addEventListener(
    "contextmenu",
    function (e) {
      e.preventDefault();
    },
    false
  );
};
data = Array;
data = {
  1: "PORTADA.pdf",
  10: "GEN 0.pdf",
  11: "GEN 1.pdf",
  12: "GEN 2.pdf",
  13: "GEN 3.pdf",
  14: "GEN 4.pdf",
  20: "ENR 0.pdf",
  21: "ENR 1.pdf",
  22: "ENR 2.pdf",
  23: "ENR 3.pdf",
  24: "ENR 4.pdf",
  25: "ENR 5.pdf",
  26: "ENR 6.pdf",
  30: "AD 0.pdf",
  31: "AD 1.pdf",

  33: "SLCB.pdf",
  34: "SLLP.pdf",
  35: "SLVR.pdf",
  SLAG: "AD NTL/SLAG.pdf",
  SLAL: "AD NTL/SLAL.pdf",
  SLAP: "AD NTL/SLAP.pdf",
  SLAS: "AD NTL/SLAS.pdf",
  SLBJ: "AD NTL/SLBJ.pdf",
  SLCA: "AD NTL/SLCA.pdf",
  SLCC: "AD NTL/SLCC.pdf",
  SLCO: "AD NTL/SLCO.pdf",
  SLCP: "AD NTL/SLCP.pdf",

  SLET:"AD NTL/SLET.pdf",
  SLGM:"AD NTL/SLGM.pdf",
  SLHI:"AD NTL/SLHI.pdf",
  SLJE:"AD NTL/SLJE.pdf",
  SLJO:"AD NTL/SLJO.pdf",
  SLJV:"AD NTL/SLJV.pdf",
  SLMG:"AD NTL/SLMG.pdf",
  SLOR:"AD NTL/SLOR.pdf",
  SLPO:"AD NTL/SLPO.pdf",
  SLPS:"AD NTL/SLPS.pdf",


  SLRA:"AD NTL/SLRA.pdf",
  SLRB:"AD NTL/SLRB.pdf",
  SLRI:"AD NTL/SLRI.pdf",
  SLRQ:"AD NTL/SLRQ.pdf",
  SLRY:"AD NTL/SLRY.pdf",
  SLSA:"AD NTL/SLSA.pdf",
  SLSB:"AD NTL/SLSB.pdf",
  SLSI:"AD NTL/SLSI.pdf",
  SLSM:"AD NTL/SLSM.pdf",
  SLSR:"AD NTL/SLSR.pdf",
  SLSV:"AD NTL/SLSV.pdf",
  SLTI:"AD NTL/SLTI.pdf",
  SLTJ:"AD NTL/SLTJ.pdf",
  SLTR:"AD NTL/SLTR.pdf",
  SLUY:"AD NTL/SLUY.pdf",
  SLVG:"AD NTL/SLVG.pdf",
  SLVM:"AD NTL/SLVM.pdf",
  SLYA:"AD NTL/SLYA.pdf",

  SUP_A:"SUP A.pdf",
  SUP_C:"SUP C.pdf",
  AIC:"AIC.pdf",
};

function funAct(param) {
  $("#pdfPag").attr("src", "");

  html = `
  <div class="col-md-12 col-xl-12 mg-t-30">
        <div class="d-flex ht-300 pos-relative align-items-center">
          <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
          </div>
        </div>
        <!-- d-flex -->
      </div>
  `;
  $("#pagID1").html(html);

  let url = `resources/pdf/${data[param]}#toolbar=0`;
  setTimeout(() => {
    $("#pagID1").html("");

    $("#pdfPag").attr("src", url);
    console.log(data[param]);
  }, 800);
}
