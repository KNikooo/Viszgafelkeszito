$(function () {
    const token = $('meta[name="csrf-token"]').attr("content");
    const ajax = new AjaxHivas(token);
    let eleresiUt = "/api/szakdoga";
    ajax.getAjax(eleresiUt, szakdogaLista);

    $("#adatMentes").hide();

    $("#uj").on("click", function () {
        console.log("uj");
        let Id = $("#id").val();
        let nev = $("#szakdoga_nev").val();
        let tagok = $("#tagokneve").val();
        let oldalL = $("#oldallink").val();
        let githubL = $("#githublink").val();

        let adat = {
            id: Id,
            szakdoga_nev: nev,
            tagokneve: tagok,
            oldallink: oldalL,
            githublink: githubL,
        };

        console.log(adat);
        ajax.postAjax(eleresiUt, adat);
        location.reload();
    });

    $(window).on("modosit", (event) => {
        $("#uj").hide();
        $("#adatMentes").show();
        console.log(event);

        $("#id").attr("value", event.detail.id);
        $("#szakdoga_nev").attr("value", event.detail.szakdoga_nev);
        $("#tagokneve").attr("value", event.detail.tagokneve);
        $("#oldallink").attr("value", event.detail.oldallink);
        $("#githublink").attr("value", event.detail.githublink);

        $("#adatMentes").on("click", function () {
            console.log("ment");
            let Id = $("#id").val();
            let nev = $("#szakdoga_nev").val();
            let tagok = $("#tagokneve").val();
            let oldalL = $("#oldallink").val();
            let githubL = $("#githublink").val();

            let adat = {
                id: Id,
                szakdoga_nev: nev,
                tagokneve: tagok,
                oldallink: oldalL,
                githublink: githubL,
            };

            console.log(Id);
            ajax.putAjax(eleresiUt, adat, Id);
            location.reload();
        });
    });

    $(window).on("torol", (event) => {
        console.log("toroleees");
        ajax.deleteAjax(eleresiUt, event.detail.id);
        location.reload();
    });

    /* if (window.matchMedia("(max-width: 1200px)").matches) {
        $('.szakdogaTabla').css('border-collapse','collapse');
        $('.szakdogaTabla').css('border-spacing',0);
        $('.szakdogaTabla').css('width','100%');
        $('.szakdogaTabla').css('border','1px solid #ddd');
      } */
});
