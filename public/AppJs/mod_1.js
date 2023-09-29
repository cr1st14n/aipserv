async function list_contenido_1(param) {
    try {
        const response = await fetch('document/list_1');

        if (!response.ok) {
            throw new Error('Error al obtener los datos');
        }

        const content = await response.text();
        $('#br-mainpanel').html(content);
    } catch (error) {
        console.error(error);
    }
}
async function showPDF_1(id) {
    try {
        const query = await fetch(`document/showPDF_1/${id}`)
        if (!query.ok) {
            throw new Error('Error al obtener los datos');
        }
        const query_response = await query.json();
        console.log(query_response);
        showModalGenera_0001('asdf','asdf')
    } catch (error) {
        console.log(error);
    }
}
async function data_list() {
    try {
        const query = await fetch('document/data_list_1')
        if (!query.ok) {
            throw new Error('Error al obtener los datos');
        }
        const query_response = await query.json();
        let listHtml = query_response.data.map((e) => { return data_make_row(e) }).join(' ')
        console.log(query_response);
        $('#tableBody_list_1').html(listHtml);

    } catch (error) {
        console.log(error);
    }
}

function data_make_row(e) {
    return `
    <tr>
        <th scope="row">AR-${e.id}</th>
        <td>${e.created_at}</td>
        <td>${e.doc_descripcion}</td>
        <td>
            <button class="btn btn-danger" onClick="showPDF_1(${e.id})"><i class="fa fa-file-pdf-o"></i></button>
            <button class="btn btn-danger"><i class="fa fa-table"></i></button>
        </td>
    </tr>
    `
}


async function register_1(param) {
    try {
        const query = await fetch('document/register_1');
        const query_response = await query.text()
        $('#br-mainpanel').html(query_response);
    } catch (error) {
        console.log(error);
    }
}
function register_data() {
    let descripcion = document.getElementById('descripcion').value;
    let tipo = document.getElementById('tipo').value;
    let pdfFile = document.getElementById('pdf').files[0];
    let csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;
    if (descripcion && tipo && pdfFile) {
        var reader = new FileReader();

        reader.onload = function () {
            var pdfData = reader.result.split(',')[1]; // Obtener los datos en base64

            var formData = new FormData();
            formData.append('doc_descripcion', descripcion);
            formData.append('doc_tipo', tipo);
            formData.append('doc_pdf', pdfData);

            fetch('document/create', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': csrfToken
                }
            })
                .then(response => response.json())
                .then(data => {
                    console.log('Respuesta del servidor:', data);
                })
                .catch(error => console.error('Error:', error));
        }

        reader.readAsDataURL(pdfFile);
    } else {
        alert('Por favor completa todos los campos');
    }
}