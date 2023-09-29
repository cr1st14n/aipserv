function showModalGenera_0001(tipo, contenido) {
    const iframeDom = document.querySelector('#visorPDF')
    if (tipo == 2) {
        iframeDom.src = `public/pdfs/${contenido}`;
    }
    $('#md_showPDF').modal('show');
}
