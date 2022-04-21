function szakdogaLista(tomb) {
    const szuloElem = $("#adatok");
    const sablonElem = $("#adatokSablon .adat");

    tomb.forEach(function (adat) {
        let ujElem = sablonElem.clone().appendTo(szuloElem);
        const ujSzakD = new Szakdoga(ujElem, adat);
    });
    sablonElem.remove();
}